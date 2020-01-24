<?php


namespace App\Http\Controllers;


use App\Helpers\Email;
use App\Helpers\Errors;
use App\Helpers\Utils;
use App\Helpers\Validate;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Hospital;
use App\Models\HospitalWaitingTime;
use App\Models\Procedure;
use App\Models\Specialty;
use App\Models\Trust;
use App\Services\Location;
use Request;
use Intervention\Image\ImageManagerStatic as Image;

class ApiController {

    protected $returnedData = [
        'success'   => false,
        'data'      => []
    ];

    /**
     * Imports one or ALL import files based on a given `name`
     *
     * @return array|string
     */
    public function import() {
        //Set the precision to 13 for latitude and longitude
        ini_set('precision', 13);
        ini_set('memory_limit', '-1');
        //Set execution time to 10 mins
        ini_set('max_execution_time', 600);

        $request = Request::all();
        if(empty($request['name']))
            return 'Please supply a name';

        $names = [];
        $returnedData = [];

        //Check if we want to import all the files or use the name for the requested import file
        if(strtolower($request['name']) === 'all') {
            //Set the correct order for the import
            $order = [
                'MasterList.csv',
                'LocationRatings.csv',
                'Choices.csv',
                'CancelledOps.csv',
                'Admitted.csv',
                'Emergency.csv',
                'Maternity.csv',
                'WaitingTimes.csv',
                'Outpatient.csv',
                'Inpatient.csv',
                'Diagnostics.csv',
                'Procedures.csv',
                'Place.csv',
                'Aviva.csv',
                'SimplyHealth.csv',
                'Axa.csv',
                'VitalityHealth.csv'
            ];

            //Get all the names from the storage file
            $files = \Storage::disk('imports')->files();
            if(!empty($files))
                //Check if we have the import file and set the order
                foreach($order as $ord)
                    if(in_array($ord, $files))
                        $names[] = str_replace('.csv', '', $ord);
        } else
            $names[] = $request['name'];

        if(!empty($names[0])){
            foreach($names as $name) {
                //Get the MasterList.csv
                $filename = base_path('storage/imports/'.$name.'.csv');
                $data = Utils::csvToArray($filename);

                //Design Pattern to import the File
                if(empty($data) || $data == 'Filename does not exists or is not readable')
                    return json_encode("Please supply the file {$name}.csv");
                $class = '\App\Imports\\' .ucfirst($name);
                $import = new $class($data);
                $returnedData[$name] = $import->handle();
            }
        }

        //Update the Hospitals with special offers
        //TODO: Remove this when the actual special offers are decided
//        \DB::statement('UPDATE hospitals LEFT JOIN hospital_types ON hospitals.hospital_type_id = hospital_types.id SET special_offers = 1 WHERE hospital_types.name = "Independent" AND hospitals.id % 3 = 0');
        //Set Special offers just to BMI ( for the meeting with them)
        //Get all the Trusts having trust_id = 'NT4'
        $trustSpecialOffers = Trust::where('trust_id', 'NT3')->with('hospitals')->get();
        if(!empty($trustSpecialOffers)) {
            foreach($trustSpecialOffers as $trustSpecialOffer) {
                if(!empty($trustSpecialOffer->hospitals)) {
                    foreach($trustSpecialOffer->hospitals as $hospital) {
                        $hospital->special_offers = true;
                        $hospital->save();
                    }
                }
            }
        }

        //Update all the Hospitals that don't have a Waiting Time ( so they won't be excluded from our filters )
//        $hospitals = Hospital::doesntHave('waitingTime')->get();
        $totalSpecialty = Specialty::where(['name' => 'Total'])->first();

        if(!empty($totalSpecialty)) {
                //Check if we have the specialty to all the Hospitals
            $hospitals = Hospital::all();
            if(!empty($hospitals)) {
                foreach($hospitals as $hos) {
                    $waitingTime = null;
                    //Check if we have the Specialty assigned to the Hospital
                    $waitingTime = HospitalWaitingTime::where(['hospital_id' => $hos->id, 'specialty_id' => $totalSpecialty->id])->first();
                    if(empty($waitingTime)) {
                        $waitingTime = new HospitalWaitingTime();
                        $waitingTime->hospital_id = $hos->id;
                        $waitingTime->specialty_id = $totalSpecialty->id;
                        $waitingTime->total_within_18_weeks = 0;
                        $waitingTime->total_incomplete = 0;
                        $waitingTime->avg_waiting_weeks = null;
                        $waitingTime->perc_waiting_weeks = null;
                        $waitingTime->save();
                    }
                }
            }
        }

        return $returnedData;
    }

    /**
     * Gets a list of multiple Locations based on a given (incomplete) postcode
     *
     * @param $postcode
     * @return array
     */
    public function getLocations($postcode) {

        if(!empty($postcode)) {
            //Validate the postcode
            $postcode = Validate::escapeString($postcode);
            $location = new Location($postcode);
            $locations = $location->getLocationsByIncompletePostcode();

            $this->returnedData['data']       = $locations['data'];
            $this->returnedData['success']    = $locations['success'];
        }

        return $this->returnedData;
    }

    /**
     * Gets a list of multiple Hospitals based on the given ids
     *
     * @param $hospitalIds
     * @param $procedureId
     * @return array
     */
    public function getHospitalsByIds($hospitalIds, $procedureId = 0) {
        $data                               = [];
        $this->returnedData['success']      = false;
        if(!empty($hospitalIds)) {
            //Explode the ids
            $hospitalIds = explode(',', $hospitalIds);
            foreach($hospitalIds as $hospitalId) {
                $hospital = Hospital::where('id', $hospitalId)->with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'outpatient', 'rating', 'address', 'placeRating']);
                //Check if we have the `procedure_id` and retrieve the relation Waiting Times
                $specialty = Specialty::where('name', 'Total')->first();
                $specialtyId = $totalSpecialty = $specialty->id;

                if(!empty($procedureId) && $procedureId !== '-1') {
                    $procedure = Procedure::where('id', $procedureId)->first();
                    $specialtyId = $procedure->specialty_id;
                }

                $hospital = $hospital->with(['waitingTime' => function ($query) use($specialtyId) {
                    $query->bySpecialty($specialtyId);
                }]);
                $hospital = $hospital->first();

                if(empty($hospital)) {
                    $hospital = $hospital->with(['waitingTime' => function ($query) use($totalSpecialty) {
                        $query->bySpecialty($totalSpecialty);
                    }]);
                    $hospital = $hospital->first();
                }

                $hospital = $hospital->toArray();
                $hospital['image'] = \File::exists("images/hospitals/{$hospital['location_id']}_thumb.jpg") ? "images/hospitals/{$hospital['location_id']}_thumb.jpg" : "images/hospitals/hospital-placeholder.jpg";
                $data[] = $hospital;
            }

            $this->returnedData['data']    = $data;
            $this->returnedData['success'] = true;
        }

        return $this->returnedData;
    }

    /**
     * Returns a list of Hospitals filtered by Distance (given by a Postcode)
     *
     * @param $postcode
     * @return array
     */
    public function getHospitalsByDistance($postcode) {
        //Get the request and load it as variables
        $request        = \Request::all();
        $procedureId    = $request['procedure_id'] ?? '';
        $radius         = $request['radius'] ?? 50; //50 miles as default

        $hospitals  = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius);

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $hospitals;

        return $this->returnedData;
    }

    /**
     * Returns all the hospitals as array
     *
     * @return array
     */
    public function getAllHospitals() {
        //Get the request and load it as variables
        $request        = \Request::all();
        $postcode       = $request['postcode'] ?? '';
        $procedureId    = $request['procedure_id'] ?? '';
        $radius         = $request['radius'] ?? 50; //50 miles as default

        $hospitals = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius);

        $this->returnedData['success']              = true;
        $this->returnedData['data']['hospitals']    = $hospitals;

        return $this->returnedData;
    }

    /**
     * Creates an Enquiry based on the given inputs: specialty_id (can be null/empty), hospital_id, title, first_name, last_name, email, date_of_birth, additional_information
     *
     * @return array
     */
    public function enquiry() {
        //Get the request and load it as variables
        $request                = \Request::all();
        $procedureId            = (!empty($request['procedure_id']) && $request['procedure_id'] > 0) ? Validate::escapeString($request['procedure_id']) : null;
        $hospitalId             = Validate::escapeString($request['hospital_id']);
        $title                  = Validate::escapeString($request['title']);
        $firstName              = Validate::escapeString($request['first_name']);
        $lastName               = Validate::escapeString($request['last_name']);
        $email                  = Validate::escapeString($request['email']);
        $phoneNumber            = Validate::escapeString($request['phone_number']);
        $postcode               = Validate::escapeString($request['postcode']);
        $reason                 = !empty($request['reason_for_contact']) ? Validate::escapeString($request['reason_for_contact']) : 'other';
        $additionalInformation  = Validate::escapeString($request['additional_information']);

        //Check if we have the required variables
        $required = ['hospitalId', 'title', 'firstName', 'lastName', 'email', 'phoneNumber','postcode'];
        foreach($required as $req) {
            if(empty($$req)){
                $this->returnedData['error'] = 'Please supply the value: '.$req;
                Errors::generateError($this->returnedData);
            }
        }

        //Check if there is one or more hospital_id sent
        if (strpos($hospitalId, ',') !== false) {
            //Explode the hospital ids
            $hospitalIds = explode(',', $hospitalId);
        } else {
            $hospitalIds = [$hospitalId];
        }

        //Check if the Hospital is Private
        if(!empty($hospitalIds) && is_array($hospitalIds)) {
            foreach($hospitalIds as $key => $hospitalId) {
                if(!empty($hospitalId)) {
                    $hospital = Hospital::where('id', $hospitalId)->with('hospitalType')->first();
                    if(empty($hospital) || $hospital->hospitalType->name == 'NHS') {
                        unset($hospitalIds[$key]);
                    }
                }
            }
        }

        //Validate date of birth (OLD)
//        if(!Validate::isValidDate($dob)) {
//            $this->returnedData['error'] = 'The date_of_birth is wrong. Please try again.';
//            Errors::generateError($this->returnedData);
//        }

        //Validate the email
        if(!Validate::isValidEmail($email)) {
            $this->returnedData['error'] = 'The email is wrong. Please try again.';
            Errors::generateError($this->returnedData);
        }

        //Validate the phone_number
        if(!Validate::isValidPhoneNumber($phoneNumber)) {
            $this->returnedData['error'] = 'The phone number is wrong. Please try again.';
            Errors::generateError($this->returnedData);
        }

        //Validate the postcode
        if(!Validate::isValidPostcode($postcode)) {
            $this->returnedData['error'] = 'The postcode is wrong. Please try again.';
            Errors::generateError($this->returnedData);
        }

        //Set the Specialty if we have a procedure_id
        $specialtyId = null;
        if(!empty($procedureId)) {
            $specialty = Procedure::where('id', $procedureId)->first();
            if(!empty($specialty))
                $specialtyId = $specialty->specialty_id;
        }

        //We can create the actual Enquiry(s) if it reaches here
        $enquiry = [];
        foreach($hospitalIds as $hospitalId) {
            $enquiry[$hospitalId] = new Enquiry();
            $enquiry[$hospitalId]->specialty_id              = $specialtyId;
            $enquiry[$hospitalId]->hospital_id               = $hospitalId;
            $enquiry[$hospitalId]->title                     = $title;
            $enquiry[$hospitalId]->first_name                = $firstName;
            $enquiry[$hospitalId]->last_name                 = $lastName;
            $enquiry[$hospitalId]->email                     = $email;
            $enquiry[$hospitalId]->phone_number              = $phoneNumber;
            $enquiry[$hospitalId]->postcode                  = $postcode;
            $enquiry[$hospitalId]->reason                    = $reason;
            $enquiry[$hospitalId]->additional_information    = $additionalInformation;
            $enquiry[$hospitalId]->save();

            //Get the hospital and send the email if it has an email address
            $hospital = Hospital::where('id', $hospitalId)->first();
            if(!empty($hospital) && !empty($hospital->email)) {
                try {
                    Email::send($hospital->email, "{$title} {$lastName} Enquired with Hospital Compare", "{$title} {$lastName} Enquired with Hospital Compare", 'datamanager@hospitalcompare.co.uk');
                } catch(\Exception $e){
                    \Log::info('Something went wrong sending an email. Please check the enquiries: '.\GuzzleHttp\json_encode($enquiry).'. Error:'.$e->getMessage());
                }
            }
        }

        //Send the email //TODO: Activate it once the tests are working
        if(!empty($enquiry)) {
            $html = '<style>
                table {
                    font-family: arial;
                    background-color: #fff;
                }

                td {
                    vertical-align: top;
                }
            </style>

            <center class="bg-grey">
                <table width="600" style="">
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td width="200"></td>
                        <td width="200">
                            <a href="https://www.hospitalcompare.co.uk"><img width="200" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.svg" alt="Hospital compare logo"></a>
                        </td>
                        <td width="200"></td>
                    </tr>
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td width="200"></td>
                        <td width="200">
                            <p style="text-align: center; font-size: 26px; color: #037098">Thank You, John.</p>
                            <p style="text-align: center; color: #037098">We have recieved your enquiry for</p>
                            <p style="text-align: center; font-weight: bold; color: #037098">Hospital name here</p>
                        </td>
                        <td width="200"></td>
                    </tr>
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg" alt="Man on sofa browsing hospital compare website"></td>
                    </tr>
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <table width="600">
                    <tr>
                        <td width="25"></td>
                        <td>
                            <p style="font-size: 20px; font-weight: 600">Next steps</p>
                            <p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. Aaperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam voluptate voluptatem.</p>
                        </td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td colspan="3" height="50"></td>
                    </tr>
                </table>
                <table width="600" style="border-bottom: 1px solid #e6e6e6">
                    <tr>
                        <td width="25"></td>
                        <td colspan="2">
                            <p style="font-size: 20px; font-weight: 600">Your email</p>
                            <p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. A aperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam voluptate voluptatem.</p>
                        </td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td width="150">Title</td>
                        <td width="400">Mr</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td width="150">First name</td>
                        <td width="400">William</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td>Last Name</td>
                        <td>Wallace</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td>Phone Number</td>
                        <td>04564 654656</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td>Email Address</td>
                        <td>william.wallace@freedom</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td>Postcode</td>
                        <td>SC1 OCH</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td>Treatment</td>
                        <td>Anus</td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25" height="15"></td>
                        <td width="150"></td>
                        <td width="400"></td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td width="25"></td>
                        <td>Additional<br>Comments</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, eius illo minima necessitatibus pariatur quidem quo voluptatem. Blanditiis consequatur dolore eligendi eveniet fuga harum perferendis quasi, quibusdam quos recusandae, repellat?
                        </td>
                        <td width="25"></td>
                    </tr>
                    <tr>
                        <td colspan="3" height="25"></td>
                    </tr>
                </table>
                <!-- Footer -->
                <table width="600" style="">
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td width="100"></td>
                        <td width="400" style="text-align: center"><img width="200" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.svg" alt="Hospital compare logo"></td>
                        <td width="100"></td>
                    </tr>
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td width="100"></td>
                        <td width="400" style="text-align: center">
                            <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare">
                                <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.svg" alt="Facebook logo">
                            </a>
                            <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare">
                                <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.svg" alt="Twitter logo">
                            </a>
                        </td>
                        <td width="100"></td>
                    </tr>
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td width="100"></td>
                        <td width="400">
                            <p style="text-align: center; color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Beatae consequuntur cumque delectus eos, et exercitationem fuga itaque nemo numquam provident quasi
                                qui reiciendis repellendus sequi soluta ut vero vitae voluptatum?</p>
                        </td>
                        <td width="100"></td>
                    </tr>
                    <tr>
                        <td height="25"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </center>
';
            try {
                Email::send($email, 'Thank you for Enquiring with Hospital Compare', null, 'datamanager@hospitalcompare.co.uk', $html);
            } catch(\Exception $e){
                \Log::info('Something went wrong sending an email. Please check the enquiries: '.\GuzzleHttp\json_encode($enquiry).'. Error:'.$e->getMessage());
            }
        }

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $enquiry;

        return $this->returnedData;
    }

    public function searchFaq($search = '') {
        $search = Validate::escapeString($search);
        //Search FAQs by question and answer
        $faqs = Faq::where('answer', 'like', '%'.$search.'%')->orWhere('question', 'like', '%'.$search.'%')->get();

        $this->returnedData['success']      = true;
        $this->returnedData['data']['faqs'] = $faqs;

        return $this->returnedData;
    }

    public function testGet() {

        $this->returnedData['success'] = true;
        return $this->returnedData;
    }

    public function testPost() {

        $this->returnedData['success'] = true;
        return $this->returnedData;
    }

    public function createEnquiriesFile() {
        //Get the request and load it as variables
        $request    = \Request::all();
        $startDate  = $request['start_date'] ?? '';
        $endDate    = $request['end_date'] ?? '';

        $this->returnedData['success'] = true;
        $this->returnedData['data'] = Utils::createEnquiriesCsv($startDate, $endDate);
        return $this->returnedData;
    }

    public function createHospitalImagesThumbs() {
        //Get all the files
        $path = resource_path('images/hospitals');
        $files = \File::files($path);

        $this->returnedData['success'] = false;
        $this->returnedData['data'] = [];


        //Parse through all the images
        foreach($files as $image) {
            $filename    = $image->getBaseName('.jpg');

            //Check if the image already has a thumbnail
            if(!file_exists($path. '/' .$filename.'_thumb.jpg') && strpos($filename, '_thumb') === false) {
                $image_resize = Image::make($image->getRealPath());
                //Resize the image as a thumbnail
                $image_resize->resize(300, 300);
                //Save the image
                $image_resize->save($path. '/' .$filename.'_thumb.jpg');
                $this->returnedData['data'][] = $filename;
            }
        }

        $this->returnedData['success'] = true;
        return $this->returnedData;
    }
}
