<?php


namespace App\Http\Controllers;


use App\Helpers\Utils;
use App\Models\Address;
use App\Models\Hospital;
use App\Models\HospitalType;
use App\Models\Trust;
use Request;

class ApiController {

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
}