<?php


namespace App\Imports;

use App\Models\Procedure;
use App\Models\Specialty;

/**
 * Populates the Procedures table with the related Specialty relation
 */
class Procedures extends DefaultImport {

    public function handle() {
        //Check if we have data
        if(!empty($this->data) && is_array($this->data)) {
            //Loop through the data
            foreach($this->data as $item) {
                //Check if we have the Specialty based on the name of it
                $specialty = Specialty::firstOrCreate(['name' => $item['Specialty']]);
                //Check if we have the Specialty ( or add it to the excluded item )
                if(!empty($specialty)) {
                    //Check if we already have a Procedure for that Specialty and update it
                    $procedure = Procedure::updateOrCreate([
                        'name'       => $item['Surgical Procedures']
                    ], [
                        'specialty_id'           => $specialty->id,
                    ]);

                    $this->returnedData[] = $procedure;
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