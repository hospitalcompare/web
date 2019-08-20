<?php


namespace App\Models;

use App\Helpers\Errors;
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
        'location_id', 'organisation_id','hospital_type_id', 'address_id', 'trust_id', 'ods_code', 'name', 'tel_number', 'url', 'special_offers', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'location_id'       => 'string',
        'organisation_id'   => 'string',
        'hospital_type_id'  => 'integer',
        'address_id'        => 'integer',
        'trust_id'          => 'integer',
        'ods_code'          => 'string',
        'name'              => 'string',
        'tel_number'        => 'string',
        'url'               => 'string',
        'special_offers'    => 'boolean',
        'status'            => 'string'
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
     * waitingTime() belongs to HospitalWaitingTime
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function waitingTime() {
        return $this->hasMany( '\App\Models\HospitalWaitingTime', 'hospital_id');
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
     * @param string $sortBy
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getHospitalsWithParams($postcode = '', $procedureId = '', $radius = 600, $waitingTime = '', $userRating = '', $qualityRating = '', $hospitalType = '', $sortBy = '') {
        $hospitals = Hospital::with(['trust', 'hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'outpatient', 'rating', 'address']);
        //$userRatings    = HospitalRating::selectRaw(\DB::raw("MIN(id) as id, avg_user_rating AS name"))->groupBy(['avg_user_rating'])->whereNotNull('avg_user_rating')->get()->toArray();

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
                Errors::generateError(['postcode' => 'Please supply a valid Postcode']);
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

        $hospitals = $hospitals->with(['waitingTime' => function($q) use($specialtyId) {
            $q->where('specialty_id', '=', $specialtyId);
        }]);

        //Filter by the Waiting Time
        if(!empty($waitingTime)) {
            $hospitals = $hospitals->whereHas('waitingTime', function($q) use($waitingTime, $specialtyId) {
                $q->where('perc_waiting_weeks', '<=', $waitingTime);
                $q->where('specialty_id', '=', $specialtyId);
            });
        }

        //Filter by the User Rating
        if(!empty($userRating)) {
            $hospitals = $hospitals->whereHas('rating', function($q) use($userRating) {
                $q->where('avg_user_rating', '>=', $userRating);
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
                    $q->whereIn('latest_rating', ['Outstanding', 'Good', 'Inadequate']);
                elseif($qualityRating == 4)
                    $q->whereIn('latest_rating', ['Outstanding', 'Good', 'Inadequate', 'Requires improvement']);
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
        if(empty($sortBy))
            $sortBy = 0; //default use ascending by radius ( only in case we have the postcode provided and it's a valid one )

        if(in_array($sortBy, [0, 1])) {
            if(!empty($postcode) && !empty($latitude) && !empty($longitude)) {
                if($sortBy == 0)
                    $hospitals = $hospitals->orderBy('radius', 'ASC');
                else
                    $hospitals = $hospitals->orderBy('radius', 'DESC');
            }
        } elseif (in_array($sortBy, [2, 3])) {
            $hospitals = $hospitals->join('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
            $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
            if($sortBy == 2)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_waiting_time.perc_waiting_weeks), hospital_waiting_time.perc_waiting_weeks DESC');

        } elseif (in_array($sortBy, [4, 5])) {
            $hospitals = $hospitals->join('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 4)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.avg_user_rating), hospital_ratings.avg_user_rating ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.avg_user_rating), hospital_ratings.avg_user_rating DESC');
        } elseif (in_array($sortBy, [6, 7])) {
            $hospitals = $hospitals->join('hospital_cancelled_ops', 'hospitals.id', '=', 'hospital_cancelled_ops.hospital_id');
            if($sortBy == 6)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_cancelled_ops.perc_cancelled_ops), hospital_cancelled_ops.perc_cancelled_ops ASC');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_cancelled_ops.perc_cancelled_ops), hospital_cancelled_ops.perc_cancelled_ops DESC');
        } elseif (in_array($sortBy, [8, 9])) {
            $hospitals = $hospitals->join('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 8)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 4 when hospital_ratings.latest_rating = "Good" then 3 when hospital_ratings.latest_rating = "Inadequate" then 2 when hospital_ratings.latest_rating = "Requires improvement" then 1 end');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.latest_rating), case when hospital_ratings.latest_rating = "Outstanding" then 1 when hospital_ratings.latest_rating = "Good" then 2 when hospital_ratings.latest_rating = "Inadequate" then 3 when hospital_ratings.latest_rating = "Requires improvement" then 4 end');
        } elseif (in_array($sortBy, [10, 11])) {
            $hospitals = $hospitals->join('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 10)
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.provider_rating), case when hospital_ratings.provider_rating = "Outstanding" then 4 when hospital_ratings.provider_rating = "Good" then 3 when hospital_ratings.provider_rating = "Inadequate" then 2 when hospital_ratings.provider_rating = "Requires improvement" then 1 end');
            else
                $hospitals = $hospitals->orderByRaw('ISNULL(hospital_ratings.provider_rating), case when hospital_ratings.provider_rating = "Outstanding" then 1 when hospital_ratings.provider_rating = "Good" then 2 when hospital_ratings.provider_rating = "Inadequate" then 3 when hospital_ratings.provider_rating = "Requires improvement" then 4 end');
        } elseif (in_array($sortBy, [12, 13])) {
            if(!empty($specialtyId)) {
                $hospitals = $hospitals->join('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                if ($sortBy == 12)
                    $hospitals = $hospitals->orderByRaw(' hospital_waiting_time.perc_waiting_weeks IS NOT NULL ASC, hospital_waiting_time.perc_waiting_weeks ASC');
                else
                    $hospitals = $hospitals->orderByRaw(' hospital_waiting_time.perc_waiting_weeks IS NULL ASC, hospital_waiting_time.perc_waiting_weeks ASC');
            }
        } elseif (in_array($sortBy, [14, 15])) {
            if($sortBy == 14)
                $hospitals = $hospitals->orderByRaw('hospitals.hospital_type_id DESC');
            else
                $hospitals = $hospitals->orderByRaw('hospitals.hospital_type_id ASC');
        }

        $hospitals = $hospitals->paginate(10);

        return $hospitals;
    }
}
