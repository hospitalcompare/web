<?php


namespace App\Models;

use App\Helpers\Errors;
use App\Helpers\Utils;
use App\Services\Location;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public $table = 'hospitals';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_id', 'organisation_id','hospital_type_id', 'address_id', 'trust_id', 'location_specialism', 'ods_code', 'name', 'display_name', 'tel_number', 'url', 'special_offers', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'location_id'           => 'string',
        'organisation_id'       => 'string',
        'hospital_type_id'      => 'integer',
        'address_id'            => 'integer',
        'trust_id'              => 'integer',
        'location_specialism'   => 'string',
        'ods_code'              => 'string',
        'name'                  => 'string',
        'display_name'          => 'string',
        'tel_number'            => 'string',
        'url'                   => 'string',
//        'report_url'        => 'string',
        'special_offers'        => 'boolean',
        'status'                => 'string'
    ];

    /**
     * hospitalType() belongs to HospitalType
     * @return mixed
     */
    public function hospitalType() {
        return $this->belongsTo( '\App\Models\HospitalType', 'hospital_type_id');
    }

    /**
     * address() belongs to Address
     * @return mixed
     */
    public function address() {
        return $this->belongsTo( '\App\Models\Address', 'address_id');
    }

    /**
     * Trust() belongs to Trust
     * @return mixed
     */
    public function trust() {
        return $this->belongsTo( '\App\Models\Trust', 'trust_id');
    }

    /**
     * Admitted() belongs to HospitalAdmitted
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admitted() {
        return $this->belongsTo( '\App\Models\HospitalAdmitted', 'id', 'hospital_id');
    }

    /**
     * cancelledOps() belongs to HospitalCancelledOps
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cancelledOp() {
        return $this->belongsTo( '\App\Models\HospitalCancelledOp', 'id', 'hospital_id');
    }

    /**
     * emergency() belongs to HospitalEmergency
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emergency() {
        return $this->belongsTo( '\App\Models\HospitalEmergency', 'id', 'hospital_id');
    }

    /**
     * maternity() belongs to HospitalMaternity
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maternity() {
        return $this->belongsTo( '\App\Models\HospitalMaternity', 'id', 'hospital_id');
    }

    /**
     * outpatient() belongs to HospitalOutpatient
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function outpatient() {
        return $this->belongsTo( '\App\Models\HospitalOutpatient', 'id', 'hospital_id');
    }

    /**
     * rating() belongs to HospitalRating
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rating() {
        return $this->belongsTo( '\App\Models\HospitalRating', 'id', 'hospital_id');
    }

    /**
     * corporateContent() belongs to HospitalCorporateContent
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporateContent() {
        return $this->belongsTo( '\App\Models\HospitalCorporateContent', 'id', 'hospital_id');
    }

    /**
     * rating() belongs to HospitalRating
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function placeRating() {
        return $this->belongsTo( '\App\Models\HospitalPlaceRating', 'id', 'hospital_id');
    }

    /**
     * waitingTime() belongs to HospitalWaitingTime
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function waitingTime() {
        return $this->hasMany( '\App\Models\HospitalWaitingTime', 'hospital_id');
    }

    /**
     * policies() belongs to HospitalPolicy
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function policies() {
        return $this->hasMany( '\App\Models\HospitalPolicy', 'hospital_id');
    }

    /**
     * Retrieves a list of hospitals based on the given inputs ( procedure_id, postcode, radius, waiting_time, user_rating, quality_rating, hospital_type )
     * Also applies the filters and sorting (if provided)
     *
     * @param string $postcode
     * @param string $procedureId
     * @param int $radius
     * @param string $waitingTime
     * @param string $userRating
     * @param string $qualityRating
     * @param string $hospitalType
     * @param string $policyId
     * @param string $sortBy
     * @param string $page
     *
     * @return array
     */
    public static function getHospitalsWithParams($postcode = '', $procedureId = '', $radius = 50, $waitingTime = '', $userRating = '', $qualityRating = '', $hospitalType = '', $policyId = '', $sortBy = '', $page = '') {
//        $startTime = microtime(true);
        $hospitals = Hospital::with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'rating', 'address', 'policies', 'outpatient', 'placeRating']);
        //$userRatings    = HospitalRating::selectRaw(\DB::raw("MIN(id) as id, avg_user_rating AS name"))->groupBy(['avg_user_rating'])->whereNotNull('avg_user_rating')->get()->toArray();
        $errors = [];
        $latitude = '';
        $longitude = '';

        //Check if we have the `postcode` and `procedure_id`
        if(!empty($postcode)) {
            //Retrieve the latitude and longitude from the postcode
            $location = new Location($postcode);
            try {
                $location = $location->getLocation();
                $latitude = (string)$location['data']->result->latitude;
                $longitude = (string)$location['data']->result->longitude;
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                //Try to get the first latitude and longitude of the partial postcode
                try {
                    $location = $location->getLocationsByIncompletePostcode();
                    $latitude = (string)$location['data']->result[0]->latitude;
                    $longitude = (string)$location['data']->result[0]->longitude;
                } catch (\Exception $exception) {
                    $latitude = '';
                    $longitude = '';
                }
            }

            //If we don't have data for the Latitude or Longitude, throw an Error. We should always have the right postcode (we need Fronend Validations to make sure that this is the case)
            if(empty($latitude) || empty($longitude))
                $errors[] = ['postcode' => 'Please supply a valid Postcode'];
        }

        if(!empty($latitude) && !empty($longitude)) {
            //Left Join the address so we can sort by radius
            $hospitals = $hospitals->whereHas('address', function($q) use($latitude, $longitude, $radius) {
                $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
                $q->having('radius', '<', $radius);
            })->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
        } else {
            //Left Join the address
            $hospitals = $hospitals->with('address')->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*"));
        }

        //Check if we have the `procedure_id` and retrieve the relation Waiting Times
        if(!empty($procedureId)) {
            $procedure = Procedure::where('id', $procedureId)->first();
            $specialtyId = $procedure->specialty_id;
        } else {
            $specialty = Specialty::where('name', 'Total')->first();
            $specialtyId = $specialty->id;
        }

        $hospitals = $hospitals->whereHas('waitingTime', function($q) use($specialtyId) {
            $q->bySpecialty($specialtyId);
        });

        //Filter by the Waiting Time
        if(!empty($waitingTime)) {
            $hospitals = $hospitals->whereHas('waitingTime', function($q) use($waitingTime, $specialtyId) {
                $q->bySpecialty($specialtyId);
                $q->where('perc_waiting_weeks', '<=', $waitingTime);
            });
        }

        //Filter by the User Rating
        if(!empty($userRating)) {
            $hospitals = $hospitals->whereHas('rating', function($q) use($userRating) {
                $q->where('avg_user_rating', '>=', $userRating);
            });
        }

        //Filter by the Insurance Policy
        if(!empty($policyId)) {
            $hospitals = $hospitals->whereHas('policies', function($q) use($policyId) {
                $q->where('policy_id', $policyId);
            });
        }

        //Filter by the Quality Rating
        if(!empty($qualityRating)) {
            $hospitals = $hospitals->whereHas('rating', function($q) use($qualityRating) {
                if($qualityRating == 1)
                    $q->whereIn('latest_rating', ['Outstanding']);
                elseif($qualityRating == 2)
                    $q->whereIn('latest_rating', ['Outstanding', 'Good']);
                elseif($qualityRating == 3)
                    $q->whereIn('latest_rating', ['Outstanding', 'Good', 'Requires improvement']);
                elseif($qualityRating == 4)
                    $q->whereIn('latest_rating', ['Outstanding', 'Good', 'Requires improvement', 'Inadequate']);
            });
        }

        //Filter by Hospital Type ( if we have the input )
        if(!empty($hospitalType)) {
            if($hospitalType == 1) {
                $hospitals = $hospitals->whereHas('hospitalType', function($q) {
                    $q->where('name', '=', 'Independent');
                });
            } elseif($hospitalType == 2) {
                $hospitals = $hospitals->whereHas('hospitalType', function($q) {
                    $q->where('name', '=', 'NHS');
                });
            }
        }

//        Sorting the records
//        $doctorSort = '';
        if(empty($sortBy)) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Inadequate" then 3 when hospital_ratings.latest_rating = "Requires improvement" then 4 when hospital_ratings.latest_rating = "Not Yet Rated" then 5 end');
            if(!empty($postcode) && !empty($latitude) && !empty($longitude)) {
                $hospitals = $hospitals->orderBy('radius', 'ASC');
//                $doctorSort = 'Care Quality Rating & Distance';
            } else {
                $hospitals = $hospitals->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks ASC');
//                $doctorSort = 'Care Quality Rating & Waiting Time';
            }
        }
//        else {
//            if(array_key_exists($sortBy, Utils::sortBys))
//                $doctorSort = Utils::sortBys[$sortBy]['name'];
//        }

        if(in_array($sortBy, [1, 2])) {
            if(!empty($postcode) && !empty($latitude) && !empty($longitude)) {
                if($sortBy == 1)
                    $hospitals = $hospitals->orderBy('radius', 'ASC');
                else
                    $hospitals = $hospitals->orderBy('radius', 'DESC');
            }
        } elseif (in_array($sortBy, [3, 4])) {
            $hospitals = $hospitals->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
            $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
            if($sortBy == 3)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks DESC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks ASC');

        } elseif (in_array($sortBy, [5, 6])) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 5)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.avg_user_rating), hospital_ratings.avg_user_rating ASC, id ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.avg_user_rating), hospital_ratings.avg_user_rating DESC, id DESC');
        } elseif (in_array($sortBy, [7, 8])) {
            $hospitals = $hospitals->leftJoin('hospital_cancelled_ops', 'hospitals.id', '=', 'hospital_cancelled_ops.hospital_id');
            if($sortBy == 7)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_cancelled_ops.perc_cancelled_ops), hospital_cancelled_ops.perc_cancelled_ops DESC, id DESC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_cancelled_ops.perc_cancelled_ops), hospital_cancelled_ops.perc_cancelled_ops ASC, id ASC');
        } elseif (in_array($sortBy, [9, 10])) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 9)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 5 when hospital_ratings.latest_rating = "Good" then 4 when hospital_ratings.latest_rating = "Inadequate" then 3 when hospital_ratings.latest_rating = "Requires improvement" then 2 when hospital_ratings.latest_rating = "Not Yet Rated" then 1 end, id ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Inadequate" then 3 when hospital_ratings.latest_rating = "Requires improvement" then 4 when hospital_ratings.latest_rating = "Not Yet Rated" then 5 end, id DESC');
        } elseif (in_array($sortBy, [11, 12])) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 11)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.friends_family_rating), hospital_ratings.friends_family_rating ASC, id ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.friends_family_rating), hospital_ratings.friends_family_rating DESC, id DESC');
        } elseif (in_array($sortBy, [13, 14])) {
            if(!empty($specialtyId)) {
                $hospitals = $hospitals->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                if ($sortBy == 13)
                    $hospitals = $hospitals->orderByRaw(' hospital_waiting_time.perc_waiting_weeks IS NOT NULL ASC, hospital_waiting_time.perc_waiting_weeks ASC');
                else
                    $hospitals = $hospitals->orderByRaw(' hospital_waiting_time.perc_waiting_weeks IS NULL ASC, hospital_waiting_time.perc_waiting_weeks ASC');
            }
        } elseif (in_array($sortBy, [15, 16])) {
            if($sortBy == 15)
                $hospitals = $hospitals->orderByRaw('hospitals.hospital_type_id DESC');
            else
                $hospitals = $hospitals->orderByRaw('hospitals.hospital_type_id ASC');
        }

        $hospitals = $hospitals->with(['waitingTime' => function ($query) use($specialtyId) {
            $query->bySpecialty($specialtyId);
        }]);

        $preHospitals =  $hospitals->get()->toArray();
        $hospitals = $hospitals->paginate(10)->onEachSide(1);

        //Build the Rankings for the Waiting Times tooltip
        $outpatientRankings = $inpatientRankings = [];
        if(!empty($preHospitals)) {
            foreach($preHospitals as $preHospital) {
                //Check if we have Outpatient
                if(!empty($preHospital['waiting_time'][0]['outpatient_perc_95'])) {
                    $outpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => $preHospital['waiting_time'][0]['outpatient_perc_95']];
                } else {
                    $outpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => 100];
                }

                //Check if we have Inpatient
                if(!empty($preHospital['waiting_time'][0]['inpatient_perc_95'])) {
                    $inpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => $preHospital['waiting_time'][0]['inpatient_perc_95']];
                } else {
                    $inpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => 100];
                }
            }
        }


        usort($outpatientRankings, function($a, $b) {
            return $a['ranking'] <=> $b['ranking'];
        });

        usort($inpatientRankings, function($a, $b) {
            return $a['ranking'] <=> $b['ranking'];
        });

        if(!empty($inpatientRankings)) {
            foreach($inpatientRankings as $inpKey => &$inpatient) {
                $inpatient['position'] = $inpKey+1;
            }
        }

        if(!empty($outpatientRankings)) {
            foreach($outpatientRankings as $outKey => &$outpatientRanking) {
                $outpatientRanking['position'] = $outKey+1;
            }
        }

        //Get the special Offers
        $radius = 50;
        $hospitalType = 'Independent';
        do {
            if($radius > 200)
                $hospitalType = 'NHS';
            $specialOffers = self::getSpecialOffers($latitude, $longitude, $radius, $specialtyId, $preHospitals, $hospitalType);
            $radius += 20;
        } while (empty($specialOffers['items']['purple']) || empty($specialOffers['items']['pink']));

        //Generate text for Doctor Stevini
//        $doctor = "<p>Your search returned " . "<strong>" .count($preHospitals). "</strong>" . " hospitals, currently sorted by ".$doctorSort.", with the best at the top.</p>";
        $doctor = "To get the best results, why don't you use the sort by feature and/or filter the results by what is most important to you";
        $delay = 5000; //Delay for popup, in miliseconds ( 5 seconds )

//        if(empty($latitude) || empty($longitude) || empty($postcode) || empty($procedureId))
//            $doctor .= '<p>The most useful results will be achieved if you input a postcode (for postcode) / treatment (for treatment type).</p>';
//
//        $doctor .= '<p>Next, you can either:</p>
//            <ul class="highlight-page-elements">
//                <li><span class="d-none highlight">#show_filters</span><span class="d-none animation">shake
//                </span>Click the “Filter Results” to view all the ways in which you may wish to refine your search.</li>
//                <li><span class="d-none highlight">.sort-arrow</span><span class="d-none animation">shake
//                </span>Click on one of the triangles (arrows?) on the header bar to change the sort order - for example click on the waiting time to view the shortest wait in your search results.</li>
//                <li><span class="d-none highlight">.compare</span><span class="d-none animation">heartbeat
//                </span>Select one or more hospitals to shortlist by clicking the heart / compare logo then click on View shortlist.</li>
//                <li><span class="d-none highlight">.enquiry</span>Make an enquiry of a particular hospital relating to NHS funded or self-pay treatment eg more information about consultants. This won’t cost you a penny and does not commit you to anything.</li>
//                <li><span class="d-none highlight">.compare-hospitals-bar</span><span class="d-none animation">pulse
//                </span>View the various special offers and Hospital Compare selected best alternatives (the solutions bar).</li>
//            </ul>';
        //Generate the doctor when there's no postcode/treatment selected
        if(empty($latitude) || empty($longitude) || empty($postcode) || empty($procedureId)) {
            if(empty($latitude) && empty($longitude) && empty($procedureId)) {
                $doctor = "Why don't you enter your postcode and treatment to refine your search?";
            } else if(empty($latitude) && empty($longitude)) {
                $doctor = "Why don't you enter your postcode to refine your search?";
            } else if(empty($procedureId)) {
                $doctor = "Why don't you enter your treatment to refine your search?";
            }
        }

        if(!empty($latitude) && !empty($longitude) && !empty($procedureId)) {
            //Check if the 10 weeks option has been selected
            if(!empty($waitingTime) && $waitingTime == 10) {
                $doctor = "Need your treatment completed quickly? Have you considered going private. You may be entitled to get this fully funded by the NHS";
            } else if(!empty($preHospitals) && count($preHospitals) <= 5) { //Check how many results are on the page
                $doctor = "Have you considered increasing your radius to see more hospitals?";
            } else if(!empty($hospitalType) && $hospitalType == 2) { //Check if NHS filter has been selected
                $doctor = "Did you know you have the legal right to have most treatments completed in a private hospital (of your choice) and paid for by the NHS? Find out more.";
            } else if(!empty($hospitalType) && $hospitalType == 1) { //Check if Private hospitals have been selected
                $doctor = "If you have insurance, you can use the insurance filter to see where your policy will be accepted";
            } else if(!empty($page) && $page > 1) {
                $doctor = "To get the best results, why don't you use the sort by feature and/or filter the results by what is most important to you";
            } else if((!empty($latitude) && !empty($longitude) && !empty($procedureId) && !empty($sortBy)) && (!empty($waitingTime) || !empty($userRating) || !empty($qualityRating) || !empty($policyId) || !empty($hospitalType)) ) {
                $doctor = "Now you have refined your search, why don't you add them to your shortlist so that you can compare hospitals side-by-side";
            }
        }

        if(!empty($_COOKIE) && !empty($_COOKIE['compareCount']) && $_COOKIE['compareCount'] > 1) {
            $doctor = "Great! You have added your first hospital to your shortlist. You can add up to five hospitals to your shortlist. Why not give it a try?";
        }

//        dd("Time:  " . number_format(( microtime(true) - $startTime), 4) . " Seconds\n");
        return [
            'data'              => [
                'hospitals'             => $hospitals,
                'special_offers'        => $specialOffers,
                'outpatientRanking'     => $outpatientRankings,
                'inpatientRanking'      => $inpatientRankings
            ],
            'doctor'            => [
                'text'          => $doctor,
                'delay'         => $delay
            ],
            'errors'            => $errors
        ];
    }

    /**
     * Special Offers Algorithm
     * PURPLE
     * IF enter postcode and IF no outstanding hospitals come up within search, show in the solutions bar the nearest outstanding hospital.
     * However, if there is one or more outstanding hospitals, then show hospital with the lowest waiting time within 50 miles regardless of CQC rating. If no results show the lowest within 75 miles…..
     * If no postcode entered, the algorithm should be lowest time in country. And if the same cqc and waiting time - ie part of multi site hospital group, choose main (AT flag).
     * PINK
     * Best Private hospital which satisfies the above (if it isn’t already the purple) or the second best private (if the purple offer is a private hospital)
     *
     * @param string $latitude
     * @param string $longitude
     * @param int $radius
     * @param int $specialtyId
     * @param array $hospitals
     *
     * @return array
     */
    public static function getSpecialOffers($latitude = '', $longitude = '', $radius = 50, $specialtyId = 0, $hospitals = [], $hospitalType = 'Independent') {
        $specialOffers = Hospital::with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'rating', 'outpatient', 'address', 'policies']);
        $outstandingFlag = 0;

        //Parse the hospitals to check if there is an outstanding hospital
        if(!empty($hospitals)) {
            foreach($hospitals as $hospital) {
                if($hospital['rating']['latest_rating'] == 'Outstanding') {
                    $outstandingFlag = 1;
                    break;
                }
            }
        }

        //IF enter postcode and IF no outstanding hospitals come up within search, show in the solutions bar the nearest outstanding hospital.
        if(!empty($latitude) && !empty($longitude)) {
            //Get the nearest Hospital
            $specialOffers = $specialOffers->whereHas('address', function($q) use($latitude, $longitude, $radius) {
                $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
                $q->having('radius', '<=', $radius);
            })->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));

        }  else {
            //Left Join the address
            $specialOffers = $specialOffers->with('address')->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*"));
        }

        //Filter the Special offers by Specialty
        $specialOffers = $specialOffers->whereHas('waitingTime', function($q) use($specialtyId) {
            $q->bySpecialty($specialtyId);
        });
        //Add the relationship based on the Specialty
        $specialOffers = $specialOffers->with(['waitingTime' => function ($query) use($specialtyId) {
            $query->bySpecialty($specialtyId);
        }]);

        if($outstandingFlag == 1) { // Retrieve the lowest waiting time
            $specialOffers = $specialOffers->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
            $specialOffers = $specialOffers->where('hospital_waiting_time.specialty_id', $specialtyId);
            $specialOffers = $specialOffers->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks ASC');
        }
//        else {
//            $specialOffers = $specialOffers->whereHas('rating', function($q) {
//                $q->whereIn('latest_rating', ['Outstanding', 'Good']);
//            });
//        }

        $specialOffers = $specialOffers->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
        $specialOffers = $specialOffers->whereIn('latest_rating', ['Outstanding', 'Good']);
        $specialOffers = $specialOffers->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Inadequate" then 3 when hospital_ratings.latest_rating = "Requires improvement" then 4 end');

        if(!empty($latitude) && !empty($longitude)) {
            $specialOffers = $specialOffers->orderBy('radius', 'ASC');
        }

        $purple = $specialOffers->first();
        //Best Private hospital which satisfies the above (if it isn’t already the purple) or the second best private (if the purple offer is a private hospital)
        $prePink = $specialOffers->whereHas('hospitalType', function($q) use($hospitalType) {
            $q->where('name', '=', $hospitalType);
        });
        $pink = $prePink->first();

        if(!empty($purple) && !empty($pink))
            if($purple->count() > 0 && $pink->count() > 0)
                if($purple->id == $pink->id)
                    $pink = $prePink->limit(1)->offset(1)->first();

        return [
            'items' => [
                'purple'        => !empty($purple) ? $purple->toArray() : [] ,
                'pink'          => !empty($pink) ? $pink->toArray() : [],
            ],
            'outstanding'   => $outstandingFlag
        ];
    }
}
