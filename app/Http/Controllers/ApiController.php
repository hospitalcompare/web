<?php


namespace App\Http\Controllers;


use App\Helpers\Errors;
use App\Helpers\Utils;
use App\Helpers\Validate;
use App\Models\Enquiry;
use App\Models\Hospital;
use App\Models\HospitalWaitingTime;
use App\Models\Procedure;
use App\Models\Specialty;
use App\Services\Location;
use Request;

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
            $order = ['MasterList.csv', 'LocationRatings.csv', 'Choices.csv', 'CancelledOps.csv', 'OutpatientOps.csv', 'Admitted.csv', 'Emergency.csv', 'Maternity.csv', 'WaitingTimes.csv', 'Procedures.csv'];

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
        \DB::statement('UPDATE hospitals LEFT JOIN hospital_types ON hospitals.hospital_type_id = hospital_types.id SET special_offers = 1 WHERE hospital_types.name = "Independent" AND hospitals.id % 3 = 0');
        //Add a waiting time = 0 to all the hospitals that don't have the total specialty

        //Update all the Hospitals that don't have a Waiting Time ( so they won't be excluded from our filters )
//        $hospitals = Hospital::doesntHave('waitingTime')->get();
        $specialties = Specialty::all();

        if(!empty($specialties)) {
            foreach($specialties as $spec) {
                //Check if we have the specialty to all the Hospitals
                $hospitals = Hospital::all();
                if(!empty($hospitals)) {
                    foreach($hospitals as $hos) {
                        //Check if we have the Specialty assigned to the Hospital
                        $waitingTime = HospitalWaitingTime::where(['hospital_id' => $hos->id, 'specialty_id' => $spec->id])->first();
                        if(empty($waitingTime)) {
                            $waitingTime = new HospitalWaitingTime();
                            $waitingTime->hospital_id = $hos->id;
                            $waitingTime->specialty_id = $spec->id;
                            $waitingTime->total_within_18_weeks = 0;
                            $waitingTime->total_incomplete = 0;
                            $waitingTime->avg_waiting_weeks = null;
                            $waitingTime->perc_waiting_weeks = null;
                            $waitingTime->save();
                        }
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
        $dob                    = Validate::escapeString($request['date_of_birth']) ?? '';
        $additionalInformation  = Validate::escapeString($request['additional_information']);
        $price                  = isset($request['price']) ? Validate::escapeString($request['price']) : 0;
        $waitingTime            = isset($request['waiting_time']) ? Validate::escapeString($request['waiting_time']) : 0;
        $waitingTimeSelf        = isset($request['waiting_time_self']) ? Validate::escapeString($request['waiting_time_self']) : 0;
        $consultants            = isset($request['consultants']) ? Validate::escapeString($request['consultants']) : 0;

        //Check if we have the required variables
        $required = ['hospitalId', 'title', 'firstName', 'lastName', 'email', 'phoneNumber','postcode', 'dob'];
        foreach($required as $req) {
            if(empty($$req)){
                $this->returnedData['error'] = 'Please supply the value: '.$req;
                Errors::generateError($this->returnedData);
            }
        }

        //Validate date of birth
        if(!Validate::isValidDate($dob)) {
            $this->returnedData['error'] = 'The date_of_birth is wrong. Please try again.';
            Errors::generateError($this->returnedData);
        }

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

        //We can create the actual Enquiry if it reaches here
        $enquiry = new Enquiry();
        $enquiry->specialty_id              = $specialtyId;
        $enquiry->hospital_id               = $hospitalId;
        $enquiry->title                     = $title;
        $enquiry->first_name                = $firstName;
        $enquiry->last_name                 = $lastName;
        $enquiry->email                     = $email;
        $enquiry->phone_number              = $phoneNumber;
        $enquiry->postcode                  = $postcode;
        $enquiry->date_of_birth             = $dob;
        $enquiry->additional_information    = $additionalInformation;
        $enquiry->price                     = $price;
        $enquiry->waiting_time              = $waitingTime;
        $enquiry->waiting_time_self         = $waitingTimeSelf;
        $enquiry->consultants               = $consultants;
        $enquiry->save();

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $enquiry;

        return $this->returnedData;
    }
}
