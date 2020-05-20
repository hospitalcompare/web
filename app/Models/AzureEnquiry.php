<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AzureEnquiry extends Model {
    public $table = 'enquiries';
    public $timestamps = true;
    public $connection = 'azure';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specialty_id',
        'hospital_id',
        'title', '
        first_name',
        'last_name',
        'email',
        'phone_number',
        'postcode',
        'reason',
        'additional_information',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'specialty_id'              => 'integer',
        'hospital_id'               => 'integer',
        'title'                     => 'string',
        'first_name'                => 'string',
        'last_name'                 => 'string',
        'email'                     => 'string',
        'phone_number'              => 'string',
        'postcode'                  => 'string',
        'reason'                    => 'string',
        'additional_information'    => 'string',
        'status'                    => 'string',
        'created_at'                => 'string',
        'updated_at'                => 'string'
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

    /**
     * specialty() belongs to Hospital
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
    public function scopeBySpecialty($query, $hospital){
        return $query->where('specialty_id', $hospital);
    }
}
