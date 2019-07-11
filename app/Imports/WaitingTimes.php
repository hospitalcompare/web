<?php


namespace App\Imports;


use App\Models\Hospital;
use App\Models\HospitalWaitingTime;
use App\Models\Specialty;
use App\Models\Trust;

/**
 * Populates the Waiting times of Hospitals or Trusts based on a CSV File called WaitingTimes.csv
 */
class WaitingTimes extends DefaultImport {

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
                $hospitals[] = Hospital::where('location_id', $item['Provider Code'])->orWhere('organisation_id', $item['Provider Code'])->first();
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
                        $waitingTime = HospitalWaitingTime::updateOrCreate([
                            'hospital_id'           => $hospital->id,
                            'specialty_id'          => $specialty->id
                        ], [
                            'total_within_18_weeks' => empty($item['Total within 18 weeks']) ? 0 : $item['Total within 18 weeks'],
                            'total_incomplete'      => empty($item['Total number of incomplete pathways']) ? 0 : $item['Total number of incomplete pathways'],
                            'avg_waiting_weeks'     => empty($item['Average (median) waiting time (in weeks)']) ? null : $item['Average (median) waiting time (in weeks)'],
                            'perc_waiting_weeks'    => empty($item['92nd percentile waiting time (in weeks)']) ? null : $item['92nd percentile waiting time (in weeks)'],
                        ]);

                        $this->returnedData[] = $waitingTime;
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