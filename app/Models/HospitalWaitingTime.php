<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalWaitingTime extends Model
{
    public $table = 'hospital_waiting_time';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'specialty_id', 'total_within_18_weeks', 'total_incomplete', 'avg_waiting_weeks', 'perc_waiting_weeks', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'           => 'integer',
        'specialty_id'          => 'integer',
        'total_within_18_weeks' => 'integer',
        'total_incomplete'      => 'integer',
        'avg_waiting_weeks'     => 'double',
        'perc_waiting_weeks'    => 'double',
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
     * specialty() belongs to Specialty
     * @return mixed
     */
    public function specialty() {
        return $this->belongsTo( '\App\Models\Specialty', 'specialty_id');
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
     * @param $specialty
     * @return mixed
     */
    public function scopeBySpecialty($query, $specialty) {
        return $query->where('specialty_id', $specialty);
    }
}