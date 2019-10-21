<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalRating;

/**
 * Populates the Hospitals with the related Rating
 */
class LocationRatings extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {
                //Check if we have the Hospital by Location ID
                $hospital = Hospital::where('location_id', $item['Location ID'])->orWhere('organisation_id', $item['Location ID'])->first();

                //If we have the Hospital we can update the User Ratings
                if(!empty($hospital)) {
                    //Check if we already have a rating for that Hospital and update it
                    $rating = HospitalRating::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'latest_rating'     => !empty($item['Latest Rating'])           ? $item['Latest Rating']            : null,
                        'safe'              => !empty($item['CQC Rating - Safe'])       ? $item['CQC Rating - Safe']        : null,
                        'effective'         => !empty($item['CQC Rating - Effective'])  ? $item['CQC Rating - Effective']   : null,
                        'caring'            => !empty($item['CQC Rating - Caring'])     ? $item['CQC Rating - Caring']      : null,
                        'responsive'        => !empty($item['CQC Rating - Responsive']) ? $item['CQC Rating - Responsive']  : null,
                        'well_led'          => !empty($item['CQC Rating - Well-Led'])   ? $item['CQC Rating - Well-Led']    : null,
                        'report_url'        => !empty($item['URL'])                     ? $item['URL']                      : null,
                    ]);
                    $this->returnedData[] = $rating;
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
