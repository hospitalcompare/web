<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalAdmitted;
use App\Models\HospitalRating;

/**
 * Populates the Hospitals with the related Rating
 */
class Admitted extends DefaultImport {

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
                    $admitted = HospitalAdmitted::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'total_responses'   => $item['Total Responses - IP'],
                        'total_eligible'    => $item['Total Eligible - IP'],
                        'perc_recommended'  => rtrim($item['Percentage Recommended - IP'], '%') ?? 0,
                        'perc_response_rate'  => rtrim($item['Response Rate - IP'], '%') ?? 0,
                    ]);

                    //Check if we already have a rating for that Hospital and update it
                    HospitalRating::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'friends_family_rating'   => !empty($item['Percentage Recommended - IP']) ? rtrim($item['Percentage Recommended - IP'], '%') : null,
                    ]);

                    $this->returnedData[] = $admitted;
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
