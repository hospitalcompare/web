<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public $table = 'hospitals';

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
}