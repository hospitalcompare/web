<?php


namespace App\Http\Controllers;


use App\Helpers\Errors;
use App\Helpers\Utils;
use App\Models\Address;
use App\Models\Hospital;
use App\Models\HospitalType;
use App\Models\Trust;
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
            //Get all the names from the storage file
            $files = \Storage::disk('imports')->files();
            if(!empty($files))
                foreach($files as $filename)
                    $names[] = str_replace('.csv', '', $filename);
        } else
            $names[] = $request['name'];

        if(!empty($names[0])){
            foreach($names as $name) {
                //Get the MasterList.csv
                $filename = base_path('storage/imports/'.$name.'.csv');
                $data = Utils::csvToArray($filename);

                //Design Pattern to import the File
                if(empty($data))
                    return "Please supply the file {$name}.csv";
                $class = '\App\Imports\\' .ucfirst($name);
                $import = new $class($data);
                $returnedData[$name] = $import->handle();
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
        $procedureId    = $request['procedure_id'] ?? ''; //For the moment, send the procedure as Specialty ( as we don't have the Procedures )
        $radius         = $request['radius'] ?? 10; //10 miles as default

        $hospitals = $hospitals = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius);

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $hospitals;

        return json_encode($this->returnedData);
    }

    /**
     * Returns all the hospitals as array
     *
     * @return array
     */
    public function getAllHospitals() {
        //Retrieve all the hospitals
        $hospitals = Hospital::with(['address', 'trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'outpatient', 'rating', 'waitingTime'])->get()->toArray();

        $this->returnedData['data'] = $hospitals;

        return $this->returnedData;
    }
}