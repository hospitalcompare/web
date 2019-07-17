<?php

namespace App\Http\Controllers;

use App\Helpers\Errors;
use App\Models\Hospital;
use App\Models\Specialty;
use App\Services\Location;
use Illuminate\Routing\Controller as BaseController;

class WebController extends BaseController
{
    protected $returnedData = [
        'success'   => false,
        'data'      => []
    ];

    /**
     * Returns a list of Procedures ( at the moment these will be specialties because we don't have the actual list of Procedures)
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homepage() {
//        $procedures = []; //TODO: implement the list of Procedures as a list of array/objects to populate the dropdown
//        return view('pages.homepage', compact('procedures'));

        $procedures = Specialty::all()->toArray(); //At the moment retrieve the Specialties because we don't have the Procedures

        $this->returnedData['success']              = true;
        $this->returnedData['data']['procedures']   = $procedures;

        return view('pages.homepage', $this->returnedData);
    }

    /**
     * Retrieves a list of hospitals based on the given inputs ( procedure_id, postcode and radius )
     * Also applies the filters and sorting (if provided)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resultsPage() {
        //Get the request and load it as variables
        $request        = \Request::all();
        $postcode       = $request['postcode'] ?? '';
        $procedureId    = $request['procedure_id'] ?? ''; //For the moment, send the procedure as Specialty ( as we don't have the Procedures ) //TODO: update this with the id of procedures
        $radius         = $request['radius'] ?? 10; //10 miles as default

        $hospitals = Hospital::with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'outpatient', 'rating']);
        //Check if we have the `postcode` and `procedure_id`
        if(!empty($request['postcode'])) {
            //Retrieve the latitude and longitude from the postcode
            $location = new Location($postcode);
            $location = $location->getLocation();
            $latitude = (string)$location['data']->result->latitude;
            $longitude = (string)$location['data']->result->longitude;

            //If we don't have data for the Latitude or Longitude, throw an Error. We should always have the right postcode (we need Fronend Validations to make sure that this is the case)
            if(empty($latitude) || empty($longitude))
                Errors::generateError(['Please supply a valid Postcode']);

            $hospitals = $hospitals->whereHas('address', function($q) use($latitude, $longitude, $radius) {
                $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
                $q->having('radius', '<', $radius);
                $q->orderBy('radius', 'ASC');
            })->with(['address'=> function($query) use($latitude, $longitude) {
                $query->selectRaw(\DB::raw("id, address_1, address_2, city, county, postcode, local_authority, region, latitude, longitude, status, created_at, updated_at, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
            }, ]);

        }

        //Check if we have the `procedure_id` and retrieve the relation Waiting Times
        if(!empty($request['procedure_id'])) {
            $hospitals->with(['waitingTime' => function($q) use($procedureId){
                $q->where('specialty_id', $procedureId);
            }]);
        }

        $hospitals = $hospitals->get()->toArray();

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $hospitals;

        return view('pages.resultspage', $this->returnedData);
    }
}
