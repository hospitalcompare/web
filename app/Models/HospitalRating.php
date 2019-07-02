<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalRating extends Model
{
    public $table = 'hospital_ratings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'avg_user_rating', 'total_ratings', 'provider_rating', 'latest_rating', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'       => 'integer',
        'avg_user_rating'   => 'double',
        'total_ratings'     => 'integer',
        'provider_rating'   => 'integer',
        'latest_rating'     => 'string',
        'status'            => 'string'
    ];

    /**
     * hospital() belongs to Hospital
     * @return mixed
     */
    public function hospital() {
        return $this->belongsTo( '\App\Models\Hospital', 'hospital_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $hospital
     * @return mixed
     */
    public function scopeByHospital($query, $hospital){
        return $query->where('hospital_id', $hospital);
    }
}