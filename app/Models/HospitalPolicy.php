<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalPolicy extends Model
{
    public $table = 'hospital_policies';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'policy_id', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'           => 'integer',
        'policy_id'             => 'integer',
        'status'                => 'string'
    ];

    /**
     * hospital() belongs to Hospital
     * @return mixed
     */
    public function hospital() {
        return $this->belongsTo( '\App\Models\Hospital', 'hospital_id');
    }

    /**
     * policy() belongs to Policy
     * @return mixed
     */
    public function policy() {
        return $this->belongsTo( '\App\Models\Policy', 'policy_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $hospital
     * @return mixed
     */
    public function scopeByHospital($query, $hospital) {
        return $query->where('hospital_id', $hospital);
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $policy
     * @return mixed
     */
    public function scopeByPolicy($query, $policy) {
        return $query->where('specialty_id', $policy);
    }
}
