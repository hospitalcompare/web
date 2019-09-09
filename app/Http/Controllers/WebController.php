<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
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
        //Retrieve the list of Procedures sorted by name ASC
        $procedures = Utils::getProceduresForDropdown();

        $this->returnedData['success']              = true;
        $this->returnedData['data']['procedures']   = $procedures;

        //For Live environment just show the work in progress page
        if(env('APP_ENV') == 'live')
            return view('pages.workInProgress', $this->returnedData);
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
        $procedureId    = $request['procedure_id'] ?? '';
        $radius         = $request['radius'] ?? 10; //10 miles as default
        $waitingTime    = $request['waiting_time'] ?? '';
        $userRating     = $request['user_rating'] ?? '';
        $qualityRating  = $request['quality_rating'] ?? '';
        $hospitalType   = $request['hospital_type'] ?? '';
        $sortBy         = $request['sort_by'] ?? '';

        //Set procedure_id to 0 if it's -1
        if($procedureId == '-1')
            $procedureId = 0;

        $hospitals  = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius, $waitingTime, $userRating, $qualityRating, $hospitalType, $sortBy);
//        dd($hospitals->toArray()['data']);
        $sortBys    = Utils::sortBys;
        $procedures = Utils::getProceduresForDropdown();

        $this->returnedData['success']                              = true;
        $this->returnedData['data']['hospitals']                    = $hospitals;
        $this->returnedData['data']['filters']['procedures']        = $procedures;
        $this->returnedData['data']['filters']['waitingTimes']      = Utils::waitingTimes;
        $this->returnedData['data']['filters']['userRatings']       = Utils::userRatings;
        $this->returnedData['data']['filters']['qualityRatings']    = Utils::qualityRatings;
        $this->returnedData['data']['filters']['hospitalTypes']     = Utils::hospitalTypes;
        $this->returnedData['data']['sortBy']                       = $sortBys;

        //For Live environment just show the work in progress page
        if(env('APP_ENV') == 'live')
            return view('pages.workInProgress', $this->returnedData);
        return view('pages.resultspage', $this->returnedData);
    }

    // Return generic view for pages without specific route
    public function contentPage($slug) {
        return view('pages.contentpage')->with(['slug' => $slug]);
    }

    // Stacking page for components etc
    public function testPage() {
        $procedures = Utils::getProceduresForDropdown();

        $this->returnedData['success']              = true;
        $this->returnedData['data']['procedures']   = $procedures;

        return view('pages.testpage', $this->returnedData);
    }

    // Cookie policy
    public function cookiePage() {
        return view('pages.cookiepage');
    }

    // Privacy policy
    public function privacyPage() {
        return view('pages.privacypage');
    }

    // Terms and Conditions
    public function termsAndConditionsPage() {
        return view('pages.termsandconditionspage');
    }

    // Your rights
    public function yourRightsPage() {
        return view('pages.yourrightspage');
    }

    // How to use Page
    public function howToUsePage() {
        return view('pages.howtousepage');
    }

    // FAQS Page
    public function faqsPage() {
        return view('pages.faqspage');
    }

    // Downloads
    public function download($file_name) {
        $file_path = public_path('downloads/'.$file_name);
        return response()->download($file_path);
    }
}
