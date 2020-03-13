<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalCancelledOp;
use App\Models\Trust;

/**
 * Populates the Hospitals with the related Rating
 */
class CancelledOps extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {

                $hospitals = [];
                //First we check if we can find the Hospital based on the given code
                $hospitals[] = Hospital::where('location_id', $item['Location ID'])->orWhere('organisation_id', $item['Location ID'])->first();
                //If we still don't have the hospital, try to get all the hospitals within the Trust
                if(empty($hospitals[0])) {
                    $trust = Trust::where('trust_id', $item['Organisation Code'])->orWhere('provider_id', $item['Organisation Code'])->first();
                    //If we don't have the trust then exclude the item and move on to the next one
                    if(empty($trust)) {
                        $this->excludedData[] = $item;
                        continue;
                    }
                    $hospitals = $trust->hospitals()->get();
                }

                //If we have the Hospital we can update the User Ratings
                if(!empty($hospitals)) {
                    foreach($hospitals as $hospital) {
                        $cancelledOps = HospitalCancelledOp::updateOrCreate([
                            'hospital_id'                   => $hospital->id
                        ], [
                            'total_cancelled_ops'           => $item['Cancelled Elective Operations'] ?? 0,
                            'total_treated_last_month'      => empty($item['Number Not Treated Within 28 Days']) ? 0 : $item['Number Not Treated Within 28 Days'],
                            'admissions'                    => $item['Admissions'] ?? 0,
                            'perc_cancelled_ops'            => rtrim($item['% Cancelled Ops'], '%') ?? 0,
                            'perc_not_treated_last_month'   => rtrim($item['% Not treated within 28 Days'], '%') ?? 0
                        ]);
                        $this->returnedData[] = $cancelledOps;
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
