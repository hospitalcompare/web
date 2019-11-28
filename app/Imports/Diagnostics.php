<?php


namespace App\Imports;

use App\Models\Hospital;
use App\Models\HospitalWaitingTime;
use App\Models\Specialty;
use App\Models\Trust;

/**
 * Populates the HospitalWaitingTimes with the related Diagnostics
 */
class Diagnostics extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {

                $hospitals = [];
                //Check if we have the `Total` Diagnostic
                if(!empty($item['Diagnostic Test Name']) && strtolower($item['Diagnostic Test Name']) == 'total') {
                    //First we check if we can find the Hospital based on the given code
                    $hospitals[] = Hospital::where('location_id', $item['Location ID'])->orWhere('organisation_id', $item['Location ID'])->first();
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
                            //Get all the waiting times of the Hospital and update the total Diagnostic
                            $waitingTimes = HospitalWaitingTime::where('hospital_id', $hospital->id)->get();
                            if(!empty($waitingTimes)) {
                                foreach($waitingTimes as $waitingTime) {
                                    $waitingTime->diagnostics_perc_6 = !empty($item['% waiting 6+ weeks']) ? $item['% waiting 6+ weeks'] : null;
                                    $waitingTime->diagnostics_total = !empty($item['Total Waiting List']) ? $item['Total Waiting List'] : 0;
                                    $waitingTime->save();
                                }
                            }
                            $this->returnedData[] = $waitingTime ?? [];
                        }
                    } else {
                        //Add the item as excluded and skip the record
                        $this->excludedData[] = $item;
                        continue;
                    }
                } else {
                    continue;
                }
            }
        }
        return ['excludedData' => $this->excludedData, 'returnedData' => $this->returnedData];
    }
}
