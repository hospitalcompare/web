<?php


namespace App\Imports;


use App\Helpers\Utils;
use App\Imports\DefaultImport;
use App\Models\Address;
use App\Models\Hospital;
use App\Models\HospitalRating;
use App\Models\HospitalType;
use App\Models\Trust;

/**
 * Populates the Hospitals with the related Rating
 */
class Incomplete extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {


                //Check if we have the Hospital by Location ID
                $hospital = Hospital::where('location_id', $item['Organisation Code'])->orWhere('organisation_id', $item['Organisation Code'])->first();

                //If we have the Hospital we can update the User Ratings
                if(!empty($hospital)) {
                    //Get total number of ratings
                    $totalRatings = (int)explode('-', $item['NHS#UK users rating'])[1];
                    //Check if we already have a rating for that Hospital and update it
                    $rating = HospitalRating::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'avg_user_rating'   => $item['Banding Classification  (NHS#UK users rating)'],
                        'total_ratings'     => $totalRatings,
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