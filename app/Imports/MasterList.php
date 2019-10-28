<?php


namespace App\Imports;


use App\Models\Address;
use App\Models\Hospital;
use App\Models\HospitalType;
use App\Models\Trust;

/**
 * Populates the Hospitals and Trusts based on a CSV File called MasterList.csv
 */
class MasterList extends DefaultImport {

    public $requestedTypes = ['Independent', 'NHS'];

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {
                //Check if we have the Hospital Type or add it to DB
                if(!empty($item['Location Type/Sector']) && in_array($item['Location Type/Sector'], $this->requestedTypes)) {
                    $hospitalType = HospitalType::firstOrCreate([
                        'name' => $item['Location Type/Sector']
                    ]);

                    //Check if we have the requested fields to create the address
                    if(empty($item['Location Longitude']) || empty($item['Location Latitude']) || $item['Location Longitude'] == 'NULL' || $item['Location Longitude'] == 'NULL') {
                        $this->excludedData[] = $item;
                        continue;
                    }

                    //If we don't have the name of the provider, skip the record
                    if(empty($item['Provider Name']) || $item['Provider Name'] == 'NULL') {
                        //Check if we have Trust Name
                        if(empty($item['Trust Name']) || $item['Provider Name'] == 'NULL') {
                            $this->excludedData[] = $item;
                            continue;
                        } else {
                            $item['Provider Name'] = $item['Trust Name'];
                        }
                    }

                    $hospitalAddress = Address::updateOrCreate([
                        'latitude'          => $item['Location Latitude'],
                        'longitude'         => $item['Location Longitude'],
                    ], [
                        'address_1'         => $item['Location Address 1'],
                        'address_2'         => $item['Location Address 2'],
                        'city'              => $item['Location Address 3'],
                        'county'            => $item['Location County'],
                        'postcode'          => $item['Location Postcode'],
                        'local_authority'   => $item['Location Local Authority'],
                        'region'            => $item['Location Region'],
                    ]);

                    $trustAddress = Address::updateOrCreate([
                        'latitude'          => $item['Provider Latitude'],
                        'longitude'         => $item['Provider Longitude'],
                    ], [
                        'address_1'         => $item['Provider Address 1'],
                        'address_2'         => $item['Provider Address 2'],
                        'city'              => $item['Provider Address 3'],
                        'county'            => $item['Provider County'],
                        'postcode'          => $item['Provider Postcode'],
                        'local_authority'   => $item['Provider Local Authority'],
                        'region'            => $item['Provider Region'],
                    ]);

                    //Create the Trust entity
                    $trust = Trust::updateOrCreate([
                        'trust_id'      => $item['Trust Code'],
                        'provider_id'   => $item['Provider ID'],
                    ], [
                        'address_id'    => $trustAddress->id,
                        'name'          => $item['Provider Name'],
                        'tel_number'    => $item['Provider Telephone Number'],
                        'url'           => $item['Provider Web Address']
                    ]);

                    //Create the Hospital entity
                    //If we don't have the trust, then skip the record
                    if(empty($trust)) {
                        $this->excludedData[] = $item;
                        continue;
                    }

                    $hospital = Hospital::updateOrCreate([
                        'location_id'       => $item['Location ID'],
                        'organisation_id'   => $item['Organisation Code'],
                    ], [
                        'hospital_type_id'      => $hospitalType->id,
                        'address_id'            => $hospitalAddress->id,
                        'trust_id'              => $trust->id,
                        'location_specialism'   => $item['Location Specialism'],
                        'ods_code'              => $item['Location ODS Code'],
                        'name'                  => $item['Location Name'],
                        'tel_number'            => $item['Location Telephone Number'],
                        'url'                   => $item['Location Web Address'],
//                        'report_url'        => $item['CQC Report URL']
                    ]);

                    $this->returnedData[] = [
                        'hospital_address'  => $hospitalAddress,
                        'trust_address'     => $trustAddress,
                        'trust'             => $trust,
                        'hospital'          => $hospital
                    ];

                } else {
                    //We skip the item if it's not one of those types
                    $this->excludedData[] = $item;
                    continue;
                }
            }
        }
        return ['excludedData' => $this->excludedData, 'returnedData' => $this->returnedData];
    }
}
