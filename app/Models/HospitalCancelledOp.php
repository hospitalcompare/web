<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalCancelledOp extends Model
{
    public $table = 'hospital_cancelled_ops';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'total_cancelled_ops', 'total_treated_last_month', 'admissions', 'perc_cancelled_ops', 'perc_not_treated_last_month', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'               => 'integer',
        'total_cancelled_ops'       => 'integer',
        'total_treated_last_month'  => 'integer',
        'admissions'                => 'integer',
        'perc_cancelled_ops'        => 'double',
        'perc_not_recommended'      => 'double',
        'status'                    => 'string'
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