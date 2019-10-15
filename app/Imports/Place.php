<?php

namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalPlaceRating;

/**
 * Populates the Hospitals with the related Rating
 */
class Place extends DefaultImport {

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
                    $place = HospitalPlaceRating::updateOrCreate([
                        'hospital_id'       => $hospital->id
                    ], [
                        'cleanliness'                       => !empty($item['% Cleanliness']) ? $item['% Cleanliness'] : null,
                        'food_hydration'                    => !empty($item['% Food & Hydration']) ? $item['% Food & Hydration'] : null,
                        'privacy_dignity_wellbeing'         => !empty($item['% Privacy, Dignity & Wellbeing']) ? $item['% Privacy, Dignity & Wellbeing'] : null,
                        'condition_appearance_maintenance'  => !empty($item['% Condition, Appearance & Maintainance']) ? $item['% Condition, Appearance & Maintainance'] : null,
                        'dementia'                          => !empty($item['% Dementia Domain']) ? $item['% Dementia Domain'] : null,
                        'disability'                        => !empty($item['% Disability Domain']) ? $item['% Disability Domain'] : null,
                    ]);
                    $this->returnedData[] = $place;
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
