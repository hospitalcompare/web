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
        $request = Request::all();
        if(empty($request['name']))
            return 'Please supply a name';

        $name = $request['name'];

        //Set the precision to 13 for latitude and longitude
        ini_set('precision', 13);
        //Set execution time to 10 mins
        ini_set('max_execution_time', 600);

        //Get the MasterList.csv
        $filename = base_path('storage/imports/'.$name.'.csv');
        $data = Utils::csvToArray($filename);

        //TODO: Create the Design pattern here
        $class = '\App\Imports\\' .ucfirst($name);
        $import = new $class($data);
        return $import->handle();
//        $requestedTypes = ['Independent', 'NHS', 'NHS*'];
//        $returnedData = [];
//
//        //Check if we have data
//        if(!empty($data) && is_array($data)) {
//            //Loop through the data
//            foreach($data as $item) {
//                //Check if we have the Hospital Type or add it to DB
//                if(!empty($item['Location Type/Sector']) && in_array($item['Location Type/Sector'], $requestedTypes)) {
//                    $hospitalType = HospitalType::firstOrCreate([
//                        'name' => $item['Location Type/Sector']
//                    ]);
//
//                    //Check if we have the requested fields to create the address
//                    if(empty($item['Location Longitude']) || empty($item['Location Latitude']) || $item['Location Longitude'] == 'NULL' || $item['Location Longitude'] == 'NULL')
//                        continue;
//
//                    //If we don't have the name of the provider, skip the record
//                    if(empty($item['Provider Name']) || $item['Provider Name'] == 'NULL') {
//                        //Check if we have Trust Name
//                        if(empty($item['Trust Name']) || $item['Provider Name'] == 'NULL') {
//                            continue;
//                        } else {
//                            $item['Provider Name'] = $item['Trust Name'];
//                        }
//                    }
//
//                    //Loop through all the inputs and set them to empty strings if the values are NULL or empty()
//                    foreach($item as $key=>$value) {
//                        $item[$key] = Utils::validateValue($value);
//                    }
//
//                    $hospitalAddress = Address::firstOrCreate([
//                        'address_1'         => $item['Location Address 1'],
//                        'address_2'         => $item['Location Address 2'],
//                        'city'              => $item['Location Address 3'],
//                        'county'            => $item['Location County'],
//                        'postcode'          => $item['Location Postcode'],
//                        'local_authority'   => $item['Location Local Authority'],
//                        'region'            => $item['Location Region'],
//                        'latitude'          => $item['Location Latitude'],
//                        'longitude'         => $item['Location Longitude'],
//                    ]);
//
//                    $trustAddress = Address::firstOrCreate([
//                        'address_1'         => $item['Provider Address 1'],
//                        'address_2'         => $item['Provider Address 2'],
//                        'city'              => $item['Provider Address 3'],
//                        'county'            => $item['Provider County'],
//                        'postcode'          => $item['Provider Postcode'],
//                        'local_authority'   => $item['Provider Local Authority'],
//                        'region'            => $item['Provider Region'],
//                        'latitude'          => $item['Provider Latitude'],
//                        'longitude'         => $item['Provider Longitude'],
//                    ]);
//
//                    //Create the Trust entity
//                    $trust = Trust::firstOrCreate([
//                        'address_id'    => $trustAddress->id,
//                        'trust_id'      => $item['Trust Code'],
//                        'provider_id'   => $item['Provider ID'],
//                        'name'          => $item['Provider Name'],
//                        'tel_number'    => $item['Provider Telephone Number'],
//                        'url'           => $item['Provider Web Address']
//                    ]);
//
//                    //Create the Hospital entity
//                    //If we don't have the trust, then skip the record
//                    if(empty($trust))
//                        continue;
//
//                    $hospital = Hospital::firstOrCreate([
//                        'hospital_type_id'  => $hospitalType->id,
//                        'address_id'        => $hospitalAddress->id,
//                        'trust_id'          => $trust->id,
//                        'location_id'       => $item['Location ID'],
//                        'organisation_id'   => $item['Organisation Code'],
//                        'ods_code'          => $item['Location ODS Code'],
//                        'name'              => $item['Location Name'],
//                        'tel_number'        => $item['Location Telephone Number'],
//                        'url'               => $item['Location Web Address']
//                    ]);
//
//                    $returnedData[] = [
//                        'hospital_address'  => $hospitalAddress,
//                        'trust_address'     => $trustAddress,
//                        'trust'             => $trust,
//                        'hospital'          => $hospital
//                    ];
//
//                } else {
//                    //We skip the item if it's not one of those types
//                    continue;
//                }
//            }
//        }
//        return $returnedData;
    }
}