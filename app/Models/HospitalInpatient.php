<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalInpatient extends Model
{
    public $table = 'hospital_inpatients';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'specialty_id', 'total_admitted', 'perc_95', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'           => 'integer',
        'specialty_id'          => 'integer',
        'total_admitted'        => 'integer',
        'perc_95'               => 'double',
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
