<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalCorporateContent extends Model
{
    public $table = 'hospital_corporate_content';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'profile', 'start_date', 'end_date', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'           => 'integer',
        'profile'               => 'string',
        'start_date'            => 'integer',
        'end_date'              => 'string',
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
