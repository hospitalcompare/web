<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalOutpatient;

/**
 * Populates the Hospitals with the related Rating
 */
class OutpatientOps extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {


                //Check if we have the Hospital by Location ID
                $hospital = Hospital::where('location_id', $item['Matched Hospital Code'])->orWhere('organisation_id', $item['Matched Hospital Code'])->first();

                //If we have the Hospital we can update the User Ratings
                if(!empty($hospital)) {
                    //Check if we already have a rating for that Hospital and update it
                    $outpatient = HospitalOutpatient::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'total_responses'   => $item['Total Responses'],
                        'total_eligible'    => $item['Total Eligible'],
                        'perc_recommended'  => rtrim($item['Percentage Recommended - OP'], '%') ?? 0,
                    ]);

                    $this->returnedData[] = $outpatient;
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