<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalEmergency;

/**
 * Populates the Hospitals with the related Rating
 */
class Emergency extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {


                //Check if we have the Hospital by Location ID
                $hospital = Hospital::where('location_id', $item['Matched Organisation Code'])->orWhere('organisation_id', $item['Matched Organisation Code'])->first();

                //If we have the Hospital we can update the Admitted
                if(!empty($hospital)) {
                    //Check if we already have an Admitted for that Hospital and update it
                    $emergency = HospitalEmergency::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'total_responses'           => $item['Total Responses'],
                        'total_eligible'            => $item['Total Eligible'],
                        'response_rate'             => $item['Response Rate'],
                        'perc_recommended'          => rtrim($item['Percentage Recommended - AE'], '%') ?? 0,
                        'perc_not_recommended'      => rtrim($item['Percentage Not Recommended - AE'], '%') ?? 0,
                    ]);

                    $this->returnedData[] = $emergency;
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