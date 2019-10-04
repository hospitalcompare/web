<?php


namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalPolicy;
use App\Models\HospitalRating;
use App\Models\Policy;

/**
 * Populates the Hospitals with the related Aviva Policy
 */
class Aviva extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Get the Policies based on the name
            $personalCare           = Policy::where('name', 'Personal Care')->first();
            $selectCare             = Policy::where('name', 'Select Care')->first();
            $children               = Policy::where('name', 'Children')->first();
            $expressCare            = Policy::where('name', 'Express Care')->first();
            $exclusive              = Policy::where('name', 'Exclusive')->first();
            $companyConnect         = Policy::where('name', 'Company Connect')->first();
            $companyHealthcover     = Policy::where('name', 'Company Healthcover')->first();
            $fairSquare             = Policy::where('name', 'Fair & Square')->first();
            $speedyDiagnostics      = Policy::where('name', 'Speedy Diagnostics')->first();
            $capitalOption          = Policy::where('name', 'Capital Option')->first();
            $trustHospital          = Policy::where('name', 'Trust Hospital')->first();

            $mapping = [
                'Aviva, Key List - Personal Care'               => 'personalCare',
                'Aviva, Key List - Select Care'                 => 'selectCare',
                'Aviva, Key List - Children\'s'                 => 'children',
                'Aviva, Extended List - Express Care'           => 'expressCare',
                'Aviva, Extended List - Exclusive'              => 'exclusive',
                'Aviva, Extended List - Company Connect'        => 'companyConnect',
                'Aviva, Extended List - Company Healthcover'    => 'companyHealthcover',
                'Aviva - Fair & Square'                         => 'fairSquare',
                'Aviva - Speedy Diagnostics'                    => 'speedyDiagnostics',
                'Aviva - Capital Option List'                   => 'capitalOption',
                'Aviva -Trust Hospital List'                    => 'trustHospital'
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
