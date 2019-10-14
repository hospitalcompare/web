<?php


namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalPolicy;
use App\Models\HospitalRating;
use App\Models\Policy;

/**
 * Populates the Hospitals with the related Vitality Health Policy
 */
class VitalityHealth extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Get the Policies based on the name
            $local          = Policy::where('name', 'Local')->first();
            $countrywide    = Policy::where('name', 'Countrywide')->first();
            $londonCare     = Policy::where('name', 'London Care')->first();

            $mapping = [
                'Vitality Health - Local - Excludes Central London'                                                                         => 'local',
                'Vitality Health - Country-wide - all of Local plus non London NHS Private Patient Units and some Central London hospitals' => 'countrywide',
                'Vitality Health London Care - All Hospitals including Central London'                                                      => 'londonCare'
            ];

            //Loop through the data
            foreach($this->data as $item) {
                //Check if we have Location ID first
                if(!empty($item['Location ID'])) {
                    //Check if we have the Hospital by Location ID
                    $hospital = Hospital::where('location_id', $item['Location ID'])->orWhere('organisation_id', $item['Location ID'])->first();
                    //If we have the Hospital we can update the HospitalPolicies
                    if(!empty($hospital)) {
                        //Check if we have the different types of policies
                        foreach($mapping as $key => $var) {
                            if(!empty($item[$key])) {
                                //Check if we already have a policy for that Hospital and update it
                                $hospitalPolicy = HospitalPolicy::updateOrCreate([
                                    'hospital_id'       => $hospital->id,
                                    'policy_id'         => $$var->id
                                ], []);
                                $this->returnedData[] = $hospitalPolicy;
                            }
                        }

                    } else {
                        //Add the item as excluded and skip the record
                        $this->excludedData[] = $item;
                        continue;
                    }
                } else {
                    //Add the item as excluded and skip the record
                    $this->excludedData[] = $item;
                    continue;
                }
            }
        }
        return ['excludedData' => $this->excludedData, 'returnedData' => $this->returnedData];
    }
}
