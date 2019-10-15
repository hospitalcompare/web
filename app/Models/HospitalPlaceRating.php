<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalPlaceRating extends Model
{
    public $table = 'hospital_place_ratings';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hospital_id', 'cleanliness', 'food_hydration', 'privacy_dignity_wellbeing', 'condition_appearance_maintenance', 'dementia', 'disability', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'hospital_id'                       => 'integer',
        'cleanliness'                       => 'double',
        'food_hydration'                    => 'double',
        'privacy_dignity_wellbeing'         => 'double',
        'condition_appearance_maintenance'  => 'double',
        'dementia'                          => 'double',
        'disability'                        => 'double',
        'status'                            => 'string'
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
