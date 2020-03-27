<?php


namespace App\Models;

use App\Helpers\Errors;
use App\Helpers\Utils;
use App\Services\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Hospital extends Model
{
    public $table = 'hospitals';
    public $timestamps = true;

    protected $fillable = [
        'location_id', 'organisation_id','hospital_type_id', 'address_id', 'trust_id', 'location_specialism', 'ods_code', 'name', 'display_name', 'url', 'nhs_private_url', 'email', 'private_self_pay', 'phone_number', 'phone_number_2', 'phone_number_3', 'special_offers', 'status'
    ];

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
        'phone_number'          => 'string',
        'phone_number_2'        => 'string',
        'phone_number_3'        => 'string',
        'url'                   => 'string',
        'nhs_private_url'       => 'string',
        'email'                 => 'string',
        'private_self_pay'      => 'boolean',
        'special_offers'        => 'boolean',
        'status'                => 'string'
    ];

    public function hospitalType() {
        return $this->belongsTo( '\App\Models\HospitalType', 'hospital_type_id');
    }

    public function address() {
        return $this->belongsTo( '\App\Models\Address', 'address_id');
    }

    public function trust() {
        return $this->belongsTo( '\App\Models\Trust', 'trust_id');
    }

    public function admitted() {
        return $this->belongsTo( '\App\Models\HospitalAdmitted', 'id', 'hospital_id');
    }

    public function cancelledOp() {
        return $this->belongsTo( '\App\Models\HospitalCancelledOp', 'id', 'hospital_id');
    }

    public function emergency() {
        return $this->belongsTo( '\App\Models\HospitalEmergency', 'id', 'hospital_id');
    }

    public function maternity() {
        return $this->belongsTo( '\App\Models\HospitalMaternity', 'id', 'hospital_id');
    }

    public function outpatient() {
        return $this->belongsTo( '\App\Models\HospitalOutpatient', 'id', 'hospital_id');
    }

    public function rating() {
        return $this->belongsTo( '\App\Models\HospitalRating', 'id', 'hospital_id');
    }

    public function corporateContent() {
        return $this->belongsTo( '\App\Models\HospitalCorporateContent', 'id', 'hospital_id');
    }

    public function placeRating() {
        return $this->belongsTo( '\App\Models\HospitalPlaceRating', 'id', 'hospital_id');
    }

    public function waitingTime() {
        return $this->hasMany( '\App\Models\HospitalWaitingTime', 'hospital_id');
    }

    public function policies() {
        return $this->hasMany( '\App\Models\HospitalPolicy', 'hospital_id');
    }

    public static function getHospitalsWithParams($postcode = '', $procedureId = '', $radius = 50, $waitingTime = '', $userRating = '', $qualityRating = '', $hospitalType = '', $policyId = '', $sortBy = '', $page = '') {
        $hospitals = Hospital::with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'rating', 'address', 'policies', 'outpatient', 'placeRating'])->where('hospitals.status', 'active');
        $errors = [];
        $latitude = '';
        $longitude = '';

        if(!empty($postcode)) {
            $location = new Location($postcode);
            try {
                $location = $location->getLocation();
                $latitude = (string)$location['data']->result->latitude;
                $longitude = (string)$location['data']->result->longitude;
            } catch (\GuzzleHttp\Exception\ClientException $e) {
                try {
                    $location = $location->getLocationsByIncompletePostcode();
                    $latitude = (string)$location['data']->result[0]->latitude;
                    $longitude = (string)$location['data']->result[0]->longitude;
                } catch (\Exception $exception) {
                    $latitude = '';
                    $longitude = '';
                }
            }

            if(empty($latitude) || empty($longitude))
                $errors[] = ['postcode' => 'Please supply a valid Postcode'];
        }

        if(!empty($latitude) && !empty($longitude)) {
            $hospitals = $hospitals->whereHas('address', function($q) use($latitude, $longitude, $radius) {
                $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
                $q->having('radius', '<', $radius);
            })->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
        } else {
            $hospitals = $hospitals->with('address')->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*"));
        }

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

        if(!empty($waitingTime)) {
            $hospitals = $hospitals->whereHas('waitingTime', function($q) use($waitingTime, $specialtyId) {
                $q->bySpecialty($specialtyId);
                $q->where('perc_waiting_weeks', '<=', $waitingTime);
            });
        }

        if(!empty($userRating)) {
            $hospitals = $hospitals->whereHas('rating', function($q) use($userRating) {
                $q->where('avg_user_rating', '>=', $userRating);
            });
        }

        if(!empty($policyId)) {
            $hospitals = $hospitals->whereHas('policies', function($q) use($policyId) {
                $q->where('policy_id', $policyId);
            });
        }

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

        if(empty($sortBy)) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Requires improvement" then 3 when hospital_ratings.latest_rating = "Inadequate" then 4 when hospital_ratings.latest_rating = "Not Yet Rated" then 5 end');
            if(empty($postcode) || empty($latitude) || empty($longitude)) {
                $hospitals = $hospitals->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks ASC');
            }
        }

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
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), ROUND(hospital_waiting_time.perc_waiting_weeks, 1) DESC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), ROUND(hospital_waiting_time.perc_waiting_weeks, 1) ASC');

        } elseif (in_array($sortBy, [5, 6])) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 5)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.avg_user_rating), ROUND(hospital_ratings.avg_user_rating, 1) ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.avg_user_rating), ROUND(hospital_ratings.avg_user_rating, 1) DESC');
        } elseif (in_array($sortBy, [7, 8])) {
            $hospitals = $hospitals->leftJoin('hospital_cancelled_ops', 'hospitals.id', '=', 'hospital_cancelled_ops.hospital_id');
            if($sortBy == 7)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_cancelled_ops.perc_cancelled_ops), ROUND(hospital_cancelled_ops.perc_cancelled_ops, 1) DESC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_cancelled_ops.perc_cancelled_ops), ROUND(hospital_cancelled_ops.perc_cancelled_ops, 1) ASC');

        } elseif (in_array($sortBy, [9, 10])) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 9) {
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 5 when hospital_ratings.latest_rating = "Good" then 4 when hospital_ratings.latest_rating = "Requires improvement" then 3 when hospital_ratings.latest_rating = "Inadequate" then 2 when hospital_ratings.latest_rating = "Not Yet Rated" then 1 end');
            } else {
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Requires improvement" then 3 when hospital_ratings.latest_rating = "Inadequate" then 4 when hospital_ratings.latest_rating = "Not Yet Rated" then 5 end');
            }
            if(empty($postcode) || empty($latitude) || empty($longitude)) {
                $hospitals = $hospitals->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), ROUND(hospital_waiting_time.perc_waiting_weeks, 1) ASC');
            }
        } elseif (in_array($sortBy, [11, 12])) {
            $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 11)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.friends_family_rating), ROUND(hospital_ratings.friends_family_rating, 1) ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.friends_family_rating), ROUND(hospital_ratings.friends_family_rating, 1) DESC');
        } elseif (in_array($sortBy, [13, 14])) {
            if(!empty($specialtyId)) {
                $hospitals = $hospitals->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                if ($sortBy == 13)
                    $hospitals = $hospitals->orderByRaw(' hospital_waiting_time.perc_waiting_weeks IS NOT NULL ASC, ROUND(hospital_waiting_time.perc_waiting_weeks, 1) ASC');
                else
                    $hospitals = $hospitals->orderByRaw(' hospital_waiting_time.perc_waiting_weeks IS NULL ASC, ROUND(hospital_waiting_time.perc_waiting_weeks, 1) ASC');
            }
        } elseif (in_array($sortBy, [15, 16])) {
            if($sortBy == 15)
                $hospitals = $hospitals->orderByRaw('hospitals.hospital_type_id DESC');
            else
                $hospitals = $hospitals->orderByRaw('hospitals.hospital_type_id ASC');
        }

        if(!empty($postcode) && !empty($latitude) && !empty($longitude)) {
            $hospitals = $hospitals->orderBy('radius', 'ASC');
        } else {
            if(in_array($sortBy, [1, 2, 3, 4, 7, 8]))
                $hospitals = $hospitals->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');

            if(in_array($sortBy, [1, 2, 3, 4, 5, 6, 7, 8, 11, 12]))
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Requires improvement" then 3 when hospital_ratings.latest_rating = "Inadequate" then 4 when hospital_ratings.latest_rating = "Not Yet Rated" then 5 end');
        }

        $hospitals = $hospitals->with(['waitingTime' => function ($query) use($specialtyId) {
            $query->bySpecialty($specialtyId);
        }]);

        $hospitals = $hospitals->limit(50)->get();
        $preHospitals =  $hospitals->toArray();
        if(empty($page))
            $page = 1;

        $page -= 1;

        $perPage = 10;
        $currentPageSearchResults = $hospitals->slice($page * $perPage, $perPage)->all();
        $hospitals = new LengthAwarePaginator($currentPageSearchResults, $hospitals->count(), $perPage);
        $hospitals->setPath(env('APP_URL').'/results-page');

        $page += 1;
        $outpatientRankings = $inpatientRankings = $waitingTimeRankings = $diagnosticRankings = [];
        if(!empty($preHospitals)) {
            foreach($preHospitals as $preHospital) {
                if(!empty($preHospital['waiting_time'][0]['outpatient_perc_95'])) {
                    $outpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => $preHospital['waiting_time'][0]['outpatient_perc_95']];
                } else {
                    $outpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => 50];
                }

                if(!empty($preHospital['waiting_time'][0]['inpatient_perc_95'])) {
                    $inpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => $preHospital['waiting_time'][0]['inpatient_perc_95']];
                } else {
                    $inpatientRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => 50];
                }

                if(!empty($preHospital['waiting_time'][0]['perc_waiting_weeks'])) {
                    $waitingTimeRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => $preHospital['waiting_time'][0]['perc_waiting_weeks']];
                } else {
                    $waitingTimeRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => 50];
                }

                if(!empty($preHospital['waiting_time'][0]['diagnostics_perc_6'])) {
                    $diagnosticRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => $preHospital['waiting_time'][0]['diagnostics_perc_6']];
                } else {
                    $diagnosticRankings[$preHospital['id']] = ['hospital_id' => $preHospital['id'], 'ranking' => 50];
                }
            }
        }


        usort($outpatientRankings, function($a, $b) {
            return $a['ranking'] <=> $b['ranking'];
        });

        usort($inpatientRankings, function($a, $b) {
            return $a['ranking'] <=> $b['ranking'];
        });

        usort($waitingTimeRankings, function($a, $b) {
            return $a['ranking'] <=> $b['ranking'];
        });

        usort($diagnosticRankings, function($a, $b) {
            return $a['ranking'] >= $b['ranking'];
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

        if(!empty($waitingTimeRankings)) {
            foreach($waitingTimeRankings as $wtKey => &$waitingTimeRanking) {
                $waitingTimeRanking['position'] = $wtKey+1;
            }
        }

        if(!empty($diagnosticRankings)) {
            foreach($diagnosticRankings as $dtKey => &$diagnosticRanking) {
                $diagnosticRanking['position'] = $dtKey+1;
            }
        }

        $radius = 50;
        $hospitalType = 'Independent';
        do {
            if($radius > 200)
                $hospitalType = 'NHS';
            $specialOffers = self::getSpecialOffers($latitude, $longitude, $radius, $specialtyId, $preHospitals, $hospitalType);
            $radius += 20;
        } while (empty($specialOffers['items']['purple']) || empty($specialOffers['items']['pink']));

        $doctor = "To get the best results, why don't you use the sort by feature and/or filter the results by what is most important to you";
        $delay = 5000; //Delay for popup, in miliseconds ( 5 seconds )

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

        return [
            'data'              => [
                'hospitals'             => $hospitals,
                'special_offers'        => $specialOffers,
                'outpatientRankings'    => $outpatientRankings,
                'inpatientRankings'     => $inpatientRankings,
                'waitingTimeRanking'    => $waitingTimeRankings,
                'diagnosticRankings'    => $diagnosticRankings
            ],
            'doctor'            => [
                'text'          => $doctor,
                'delay'         => $delay
            ],
            'errors'            => $errors
        ];
    }

    public static function getSpecialOffers($latitude = '', $longitude = '', $radius = 50, $specialtyId = 0, $hospitals = [], $hospitalType = 'Independent') {
        $specialOffers = Hospital::with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'rating', 'outpatient', 'address', 'policies'])->where('hospitals.status', 'active');
        $outstandingFlag = 0;

        if(!empty($hospitals)) {
            foreach($hospitals as $hospital) {
                if($hospital['rating']['latest_rating'] == 'Outstanding') {
                    $outstandingFlag = 1;
                    break;
                }
            }
        }

        if(!empty($latitude) && !empty($longitude)) {
            $specialOffers = $specialOffers->whereHas('address', function($q) use($latitude, $longitude, $radius) {
                $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
                $q->having('radius', '<=', $radius);
            })->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));

        }  else {
            $specialOffers = $specialOffers->with('address')->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*"));
        }

        $specialOffers = $specialOffers->whereHas('waitingTime', function($q) use($specialtyId) {
            $q->bySpecialty($specialtyId);
        });
        $specialOffers = $specialOffers->with(['waitingTime' => function ($query) use($specialtyId) {
            $query->bySpecialty($specialtyId);
        }]);

        if($outstandingFlag == 1) { // Retrieve the lowest waiting time
            $specialOffers = $specialOffers->leftJoin('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
            $specialOffers = $specialOffers->where('hospital_waiting_time.specialty_id', $specialtyId);
            $specialOffers = $specialOffers->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks ASC');
        }

        $specialOffers = $specialOffers->leftJoin('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
        $specialOffers = $specialOffers->whereIn('latest_rating', ['Outstanding', 'Good']);
        $specialOffers = $specialOffers->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Requires improvement" then 3 when hospital_ratings.latest_rating = "Inadequate" then 4 end');

        if(!empty($latitude) && !empty($longitude)) {
            $specialOffers = $specialOffers->orderBy('radius', 'ASC');
        }

        $purple = $specialOffers->first();
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
