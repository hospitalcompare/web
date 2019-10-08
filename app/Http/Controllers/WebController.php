<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Helpers\Validate;
use App\Models\Faq;
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
        $postcode       = !empty($request['postcode'])          ? Validate::escapeString($request['postcode'])          : '';
        $procedureId    = !empty($request['procedure_id'])      ? Validate::escapeString($request['procedure_id'])      : '';
        $radius         = !empty($request['radius'])            ? Validate::escapeString($request['radius'])            : 4; //50 miles as default
        $waitingTime    = !empty($request['waiting_time'])      ? Validate::escapeString($request['waiting_time'])      : '';
        $userRating     = !empty($request['user_rating'])       ? Validate::escapeString($request['user_rating'])       : '';
        $qualityRating  = !empty($request['quality_rating'])    ? Validate::escapeString($request['quality_rating'])    : '';
        $hospitalType   = !empty($request['hospital_type'])     ? Validate::escapeString($request['hospital_type'])     : '';
        $policyId       = !empty($request['policy_id'])         ? Validate::escapeString($request['policy_id'])         : '';
        $sortBy         = !empty($request['sort_by'])           ? Validate::escapeString($request['sort_by'])           : '';

        //Set procedure_id to 0 if it's -1
        if($procedureId == '-1')
            $procedureId = 0;

        //Set policy_id to 0 if it's -1
        if($policyId == '-1')
            $policyId = 0;

        //Format the radius with the correct distance
        $radiusSelection = Utils::sliderRange;
        if(array_key_exists($radius, $radiusSelection))
            $radius = $radiusSelection[$radius];
        else
            $radius = 50;

        $hospitals      = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius, $waitingTime, $userRating, $qualityRating, $hospitalType, $policyId, $sortBy);
        $errors         = $hospitals['errors'];
        $doctor         = $hospitals['doctor'];
        $specialOffers  = $hospitals['data']['special_offers'];
        $hospitals      = $hospitals['data']['hospitals'];

        $sortBys    = Utils::sortBys;
        $procedures = Utils::getProceduresForDropdown();
        $policies   = Utils::getInsurancePoliciesForDropdown();

        $this->returnedData['success']                              = true;
        $this->returnedData['data']['hospitals']                    = $hospitals;
        $this->returnedData['data']['special_offers']               = $specialOffers;
        $this->returnedData['data']['filters']['procedures']        = $procedures;
        $this->returnedData['data']['filters']['waitingTimes']      = Utils::waitingTimes;
        $this->returnedData['data']['filters']['userRatings']       = Utils::userRatings;
        $this->returnedData['data']['filters']['qualityRatings']    = Utils::qualityRatings;
        $this->returnedData['data']['filters']['hospitalTypes']     = Utils::hospitalTypes;
        $this->returnedData['data']['filters']['policies']          = $policies;
        $this->returnedData['data']['sortBy']                       = $sortBys;
        $this->returnedData['doctor']                               = $doctor;
        $this->returnedData['hc_errors']                            = $errors;

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
        $policies       = Utils::getInsurancePoliciesForDropdown();

        //Get the request and load it as variables
        $request        = \Request::all();
        $postcode       = !empty($request['postcode'])          ? Validate::escapeString($request['postcode'])          : '';
        $procedureId    = !empty($request['procedure_id'])      ? Validate::escapeString($request['procedure_id'])      : '';
        $radius         = !empty($request['radius'])            ? Validate::escapeString($request['radius'])            : 50; //10 miles as default
        $waitingTime    = !empty($request['waiting_time'])      ? Validate::escapeString($request['waiting_time'])      : '';
        $userRating     = !empty($request['user_rating'])       ? Validate::escapeString($request['user_rating'])       : '';
        $qualityRating  = !empty($request['quality_rating'])    ? Validate::escapeString($request['quality_rating'])    : '';
        $hospitalType   = !empty($request['hospital_type'])     ? Validate::escapeString($request['hospital_type'])     : '';
        $policyId       = !empty($request['policy_id'])         ? Validate::escapeString($request['policy_id'])         : '';
        $sortBy         = !empty($request['sort_by'])           ? Validate::escapeString($request['sort_by'])           : '';

        //Set procedure_id to 0 if it's -1
        if($procedureId == '-1')
            $procedureId = 0;

        $hospitals  = Hospital::getHospitalsWithParams($postcode, $procedureId, $radius, $waitingTime, $userRating, $qualityRating, $hospitalType, $policyId, $sortBy);
        $errors     = $hospitals['errors'];
        $hospitals  = $hospitals['data']['hospitals'];
//        dd($hospitals->toArray()['data']);
        $sortBys    = Utils::sortBys;
        $procedures = Utils::getProceduresForDropdown();

        $this->returnedData['success']                              = true;
        $this->returnedData['data']['filters']['policies']          = $policies;
        $this->returnedData['data']['hospitals']                    = $hospitals;
        $this->returnedData['data']['filters']['procedures']        = $procedures;
        $this->returnedData['data']['filters']['waitingTimes']      = Utils::waitingTimes;
        $this->returnedData['data']['filters']['userRatings']       = Utils::userRatings;
        $this->returnedData['data']['filters']['qualityRatings']    = Utils::qualityRatings;
        $this->returnedData['data']['filters']['hospitalTypes']     = Utils::hospitalTypes;
        $this->returnedData['data']['sortBy']                       = $sortBys;
        $this->returnedData['errors']                               = $errors;

        if(env('APP_ENV') != 'live')
            return view('pages.testpage', $this->returnedData);
        return redirect('/');
    }

    // test page just for ajax form
    public function ajaxForm() {
        $procedures = Utils::getProceduresForDropdown();

        $this->returnedData['success']              = true;
        $this->returnedData['data']['procedures']   = $procedures;

        if(env('APP_ENV') != 'live')
            return view('pages.ajaxformpage', $this->returnedData);
        return redirect('/');
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
        //Get all the FAQs from DB
        $faqs  = Faq::with('category')->get();
        $this->returnedData['success']      = true;
        $this->returnedData['data']['faqs'] = $faqs;

        return view('pages.faqspage', $this->returnedData);
    }

    // Downloads

    public function download($file_name) {
        $file_path = public_path('downloads/'.$file_name);
        return response()->download($file_path);
    }

    // About us page
    public function aboutUs() {
        return view('pages.aboutus');
    }
}
