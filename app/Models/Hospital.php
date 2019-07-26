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
        'location_id', 'organisation_id','hospital_type_id', 'address_id', 'trust_id', 'ods_code', 'name', 'tel_number', 'url', 'status'
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
     * Used to build Queries
     *
     * @param $query
     * @param $hospitalType
     * @return mixed
     */
    public function scopeByHospitalType($query, $hospitalType){
        return $query->where('hospital_type_id', $hospitalType);
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $address
     * @return mixed
     */
    public function scopeByAddress($query, $address){
        return $query->where('address_id', $address);
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $trust
     * @return mixed
     */
    public function scopeByTrust($query, $trust){
        return $query->where('trust_id', $trust);
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
        return $this->hasMany( '\App\Models\HospitalWaitingTime', 'hospital_id', 'id');
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
     *
     * @return Hospital|array|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder
     */
    public static function getHospitalsWithParams($postcode = '', $procedureId = '', $radius = 10, $waitingTime = '', $userRating = '', $qualityRating = '', $hospitalType = '', $sortBy = '') {
        $hospitals = Hospital::with(['trust','hospitalType', 'admitted', 'cancelledOp', 'emergency', 'maternity', 'outpatient', 'rating', 'address', 'waitingTime']);
        //$userRatings    = HospitalRating::selectRaw(\DB::raw("MIN(id) as id, avg_user_rating AS name"))->groupBy(['avg_user_rating'])->whereNotNull('avg_user_rating')->get()->toArray();

        //Check if we have the `postcode` and `procedure_id`
        if(!empty($postcode)) {
            //Retrieve the latitude and longitude from the postcode
            $location = new Location($postcode);
            $location = $location->getLocation();
            $latitude = (string)$location['data']->result->latitude;
            $longitude = (string)$location['data']->result->longitude;

            //If we don't have data for the Latitude or Longitude, throw an Error. We should always have the right postcode (we need Fronend Validations to make sure that this is the case)
            if(empty($latitude) || empty($longitude))
                Errors::generateError(['Please supply a valid Postcode']);

            //Left Join the address so we can sort by radius
            $hospitals = $hospitals->whereHas('address', function($q) use($latitude, $longitude, $radius) {
                $q->selectRaw(\DB::raw("get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
                $q->having('radius', '<', $radius);
            })->join('addresses', 'hospitals.address_id', '=', 'addresses.id')
                ->selectRaw(\DB::raw("hospitals.*, get_distance({$latitude}, {$longitude}, latitude, longitude) AS radius"));
        }

        //Check if we have the `procedure_id` and retrieve the relation Waiting Times
        if(!empty($procedureId)) {
            $procedure = Procedure::where('id', $procedureId)->first();
            $specialtyId = $procedure->specialty_id;
            $hospitals->with(['waitingTime' => function($q) use($specialtyId) {
                $q->where('specialty_id', '=', $specialtyId);
            }]);
        }

        //Filter by the Waiting Time
        if(!empty($waitingTime)) {
            if(empty($specialtyId))
                $specialtyId = 0;
            $hospitals = $hospitals->whereHas('waitingTime', function($q) use($waitingTime, $specialtyId) {
                    $q->where('avg_waiting_weeks', '<=', $waitingTime);
                    if(!empty($specialtyId))
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
                    $q->whereIn('latest_rating', ['Good', 'Outstanding']);
                elseif($qualityRating == 3)
                    $q->whereIn('latest_rating', ['Good', 'Outstanding', 'Inadequate']);
                elseif($qualityRating == 4)
                    $q->whereIn('latest_rating', ['Good', 'Outstanding', 'Inadequate', 'Requires improvement']);
            });
        }

        //Filter by Hospital Type ( if we have the input )
        if(!empty($hospitalType))
            $hospitals = $hospitals->where('hospital_type_id', $hospitalType);

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
            if(!empty($specialtyId)) {
                $hospitals = $hospitals->join('hospital_waiting_time', 'hospitals.id', '=', 'hospital_waiting_time.hospital_id');
                $hospitals = $hospitals->where('hospital_waiting_time.specialty_id', $specialtyId);
                if($sortBy == 2)
                    $hospitals = $hospitals->orderBy('hospital_waiting_time.avg_waiting_weeks', 'ASC');
                else
                    $hospitals = $hospitals->orderBy('hospital_waiting_time.avg_waiting_weeks', 'DESC');
            }
        } elseif (in_array($sortBy, [4, 5])) {
            $hospitals = $hospitals->join('hospital_ratings', 'hospitals.id', '=', 'hospital_ratings.hospital_id');
            if($sortBy == 4)
                $hospitals = $hospitals->orderBy('hospital_ratings.avg_user_rating', 'ASC');
            else
                $hospitals = $hospitals->orderBy('hospital_ratings.avg_user_rating', 'DESC');
        }

        $hospitals = $hospitals->get()->toArray();

        return $hospitals;
    }
}
