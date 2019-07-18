<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Procedure;
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
        //At the moment retrieve the Specialties because we don't have the Procedures //TODO: implement the list of Procedures as a list of array/objects to populate the dropdown
        $procedures = Procedure::all()->sortBy('name')->toArray();

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

        $hospitals = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius);

        $this->returnedData['success']  = true;
        $this->returnedData['data']     = $hospitals;

        return view('pages.resultspage', $this->returnedData);
    }
}
