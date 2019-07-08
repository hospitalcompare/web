<?php


namespace App\Imports;


use App\Helpers\Utils;
use App\Imports\DefaultImport;
use App\Models\Address;
use App\Models\Hospital;
use App\Models\HospitalType;
use App\Models\Trust;

/**
 * Populates the Hospitals OR Trusts with the related Rating
 */
class LocationRating extends DefaultImport {

    public $requestedTypes = ['Independent', 'NHS', 'NHS*'];

    public function handle() {
        //Check if we have data

        return ['excludedData' => $this->excludedData, 'returnedData' => $this->returnedData];
    }
}