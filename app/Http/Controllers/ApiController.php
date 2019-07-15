<?php


namespace App\Http\Controllers;


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

    public function getHospitalsByDistance($postcode) {
        //Retrieve the latitude and longitude from the postcode
        $location = new Location($postcode);
        $location = $location->getLocation();
        $latitude = (string)$location['data']->result->latitude;
        $longitude = (string)$location['data']->result->longitude;
        $radius = 1; //relates to distance in miles

        $hospitals = Hospital::whereHas('address', function($q) use($latitude, $longitude, $radius) {
            $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
            $q->having('radius', '<', $radius);
            $q->orderBy('radius', 'ASC');
        })->with(['address'=> function($query) use($latitude, $longitude) {
            $query->selectRaw(\DB::raw("id, address_1, address_2, city, county, postcode, local_authority, region, latitude, longitude, status, created_at, updated_at, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
        }, 'trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'outpatient', 'rating', 'waitingTime'])->get()->toArray();

        $this->returnedData['data'] = $hospitals;
        return $this->returnedData;
    }
}