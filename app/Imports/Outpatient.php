<?php


namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalOutpatient;
use App\Models\Specialty;
use App\Models\Trust;

/**
 * Populates the Hospitals with the related Outpatient
 */
class Outpatient extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {


                //Check if we have the Specialty
                if (!empty($item['Treatment Function Code'])) {
                    $specialty = Specialty::updateOrCreate([
                        'code' => $item['Treatment Function Code'],
                    ], [
                        'name' => $item['Treatment Function'],
                    ]);

                } else {
                    $this->excludedData[] = $item;
                    continue;
                }

                $hospitals = [];
                //First we check if we can find the Hospital based on the given code
                $hospitals[] = Hospital::where('location_id', $item['Provider Code'])->first();
                //If we still don't have the hospital, try to get all the hospitals within the Trust
                if(empty($hospitals[0])) {
                    $trust = Trust::where('trust_id', $item['Provider Code'])->orWhere('provider_id', $item['Provider Code'])->first();
                    //If we don't have the trust then exclude the item and move on to the next one
                    if(empty($trust)) {
                        $this->excludedData[] = $item;
                        continue;
                    }
                    $hospitals = $trust->hospitals()->get();
                }

                //If we have the Hospital we can update the Waiting Times
                if(!empty($hospitals)) {
                    foreach($hospitals as $hospital) {
                        //Check if we already have an OutpatientOp for that Hospital and update it
                        $outpatient = HospitalOutpatient::updateOrCreate([
                            'hospital_id'           => $hospital->id,
                            'specialty_id'          => $specialty->id
                        ], [
                            'total_non_admitted'    => $item['Total NonAdmitted'],
                            'perc_95'               => rtrim($item['95th percentile waiting time (in weeks)'], '%') ?? 0,
                        ]);

                        $this->returnedData[] = $outpatient;
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
