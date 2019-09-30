<?php


namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalPolicy;
use App\Models\HospitalRating;
use App\Models\Policy;

/**
 * Populates the Hospitals with the related Aviva Policy
 */
class SimplyHealth extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Get the Policies based on the name
            $metropolitan   = Policy::where('name', 'Metropolitan')->first();
            $national       = Policy::where('name', 'National')->first();
            $connections    = Policy::where('name', 'Connections')->first();

            $mapping = [
                'Metropolitan'  => 'metropolitan',
                'National'      => 'national',
                'Connections'   => 'connections'
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
