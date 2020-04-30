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
use App\Models\Survey;
use App\Models\Trust;
use App\Services\Location;
use Illuminate\Support\Facades\DB;
use Request;
use Intervention\Image\ImageManagerStatic as Image;

class ApiController {

    protected $returnedData = [
        'success'   => false,
        'data'      => []
    ];

    public function generateSitemap() {
        return json_encode(Utils::generateSitemap());
    }

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
     * Returns a list of Hospitals for data submitted on homepage form
     *
     * @param string $postcode
     * @param string $procedureId
     * @param int $radius
     *
     * @return array
     */
    public function getHospitalsForHomepageSearch($postcode = '', $procedureId = '', $radius = null) {
        //Get the request and load it as variables
        $radius = 50;
        $hospitals      = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius);

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $hospitals['data'];

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
//        if(!empty($hospitalIds) && is_array($hospitalIds)) {
//            foreach($hospitalIds as $key => $hospitalId) {
//                if(!empty($hospitalId)) {
//                    $hospital = Hospital::where('id', $hospitalId)->with('hospitalType')->first();
//                    if(empty($hospital) || $hospital->hospitalType->name == 'NHS') {
//                        unset($hospitalIds[$key]);
//                    }
//                }
//            }
//        }

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
        foreach($hospitalIds as $i => $hospitalId) {
            $enquiry[$i] = new Enquiry();
            $enquiry[$i]->specialty_id              = $specialtyId;
            $enquiry[$i]->hospital_id               = $hospitalId;
            $enquiry[$i]->title                     = $title;
            $enquiry[$i]->first_name                = $firstName;
            $enquiry[$i]->last_name                 = $lastName;
            $enquiry[$i]->email                     = $email;
            $enquiry[$i]->phone_number              = $phoneNumber;
            $enquiry[$i]->postcode                  = $postcode;
            $enquiry[$i]->reason                    = $reason;
            $enquiry[$i]->additional_information    = $additionalInformation;
            $enquiry[$i]->save();

            //Get the hospital and send the email if it has an email address
            $hospital = Hospital::where('id', $hospitalId)->first();
            $specialty = Specialty::where('id', $specialtyId)->first();
            $specialtyName = '';
            //Set the Specialty Name if we have it
            if(!empty($specialty))
                $specialtyName = $specialty->name;

            //TODO: This is for the `live` environment ONLY
            if(env('APP_ENV') == 'live') {
                if(!empty($hospital) && !empty($hospital->email)) {
                    try {
                        $bodyProvider = Email::getProviderBody($specialtyName, $title, $firstName, $lastName, $email, $phoneNumber, $postcode, $additionalInformation);
                        Email::send($bodyProvider,  $hospital->email, 'Enquiry regarding treatment at your hospital', 'datamanager@hospitalcompare.co.uk');
                    } catch(\Exception $e){
                        \Log::info('Something went wrong sending the Provider email. Please check the enquiries: '.\GuzzleHttp\json_encode($enquiry).'. Error:'.$e->getMessage());
                    }
                }
            }

            //Send the email //TODO: Activate it once the tests are working
            if(!empty($enquiry[$i])) {
                $bodyUser = Email::getUserBody($hospital->name, $specialtyName, $title, $firstName, $lastName, $email, $phoneNumber, $postcode, $reason, $additionalInformation);
                $ATBody = Email::getTrunkieBody($hospital->name, $hospital->location_id, $specialtyName, $title, $firstName, $lastName, $email, $phoneNumber, $postcode, $additionalInformation);
                //Send the Email to User
                try {
                    Email::send($bodyUser, $email, 'Thank you for Enquiring with Hospital Compare', 'datamanager@hospitalcompare.co.uk');
                } catch(\Exception $e){
                    \Log::info('Something went wrong sending the User email. Please check the enquiries: '.\GuzzleHttp\json_encode($enquiry[$i]).'. Error:'.$e->getMessage());
                }
                //Send the Data to AT
                try {
                    Email::send($ATBody, 'sechcemailbccabshatdsdnlntets@hospitalcompare.onmicrosoft.com', 'Enquire ID: '.$enquiry[$i]->id, 'datamanager@hospitalcompare.co.uk');
                } catch(\Exception $e){
                    \Log::info('Something went wrong sending the email to AT. Please check the enquiries: '.\GuzzleHttp\json_encode($enquiry[$i]).'. Error:'.$e->getMessage());
                }

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

    // Return all faqs
    public function faqs() {
        //Search FAQs by question and answer
        $faqs = Faq::all();

        $this->returnedData['success']      = true;
        $this->returnedData['data']['faqs'] = $faqs;

        return $this->returnedData;
    }

    public function getProceduresForDropdowns() {
        //Get all Specialties with Procedures ordered by name
        $procedures = Specialty::where('name', '<>','Total')->with(['procedures' => function($query) {
            $query->orderBy('name', 'ASC');
        }])->orderBy('name', 'ASC')->get()->toArray();

//        $procedures = Procedure::all()->sortBy('name')->toArray();
        //Add the option to view all procedures ( id = 0 )
        array_unshift($procedures, ['id' => '-1', 'name' => 'Not Known']);
        array_unshift($procedures, ['id' => 0, 'name' => 'Choose your treatment (if known)']);

        $this->returnedData['success']      = true;
        $this->returnedData['data']['procedures_for_dropdowns'] = $procedures;

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

    public function createSurvey() {
        //Get the request and load it as variables
        $request    = \Request::all();
        $rating     = Validate::escapeString($request['rating']);
        $feedback   = !empty($request['feedback']) ? Validate::escapeString($request['feedback']) : null;
        $this->returnedData['success'] = false;
        $this->returnedData['data'] = [];

        $survey = new Survey();
        $survey->rating = $rating;
        $survey->feedback = $feedback;
        $survey->save();

        $this->returnedData['success'] = true;
        $this->returnedData['data'] = $survey;

        return $this->returnedData;
    }
}
