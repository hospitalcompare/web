<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalMaternity;

/**
 * Populates the Hospitals with the related Rating
 */
class Maternity extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {


                //Check if we have the Hospital by Location ID
                $hospital = Hospital::where('location_id', $item['Matched Organisation Code'])->orWhere('organisation_id', $item['Matched Organisation Code'])->first();

                //If we have the Hospital we can update the Maternity
                if(!empty($hospital)) {
                    //Check if we already have an Maternity for that Hospital and update it
                    $maternity = HospitalMaternity::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'total_responses'           => $item['Total Responses'],
                        'total_eligible'            => $item['Total Eligible'],
                        'perc_response_rate'        => rtrim($item['Response Rate - Mat'], '%') ?? 0,
                        'perc_recommended'          => rtrim($item['Percentage Recommended - Mat'], '%') ?? 0
                    ]);

                    $this->returnedData[] = $maternity;
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