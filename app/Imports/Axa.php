<?php


namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalPolicy;
use App\Models\HospitalRating;
use App\Models\Policy;

/**
 * Populates the Hospitals with the related Aviva Policy
 */
class Axa extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Get the Policies based on the name
            $general                = Policy::where('name', 'General')->first();
            $cataractSurgery        = Policy::where('name', 'Cataract Surgery')->first();
            $oralSurgery            = Policy::where('name', 'Oral Surgery')->first();
            $mri                    = Policy::where('name', 'Diagnostic Imaging - MRI')->first();
            $ctScan                 = Policy::where('name', 'Diagnostic Imaging - CT Scan')->first();
            $petScan         = Policy::where('name', 'Diagnostic Imaging - PET Scan')->first();

            $mapping = [
                'General'                           => 'general',
                'Cataract Surgery'                  => 'cataractSurgery',
                'Oral Surgery'                      => 'oralSurgery',
                'Diagnostic Imaging - MRI'          => 'mri',
                'Diagnostic Imaging - CT Scan'      => 'ctScan',
                'Diagnostic Imaging - PET Scan'     => 'petScan'
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
