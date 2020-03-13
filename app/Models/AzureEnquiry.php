<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AzureEnquiry extends Model {
    public $table = 'Enquiries';
    public $timestamps = true;
    public $connection = 'azure';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Hospital',
        'Specialty',
        'Title',
        'First Name',
        'Last Name',
        'Email',
        'Phone Number',
        'Postcode',
        'Additional Information',
        'datestamp'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'Hospital'                  => 'string',
        'Specialty'                 => 'string',
        'Title'                     => 'string',
        'First Name'                => 'string',
        'Last Name'                 => 'string',
        'Email'                     => 'string',
        'Phone Number'              => 'string',
        'Postcode'                  => 'string',
        'Additional Information'    => 'string',
        'datestamp'                 => 'string'

    ];

//    /**
//     * hospital() belongs to Hospital
//     * @return mixed
//     */
//    public function hospital() {
//        return $this->belongsTo( '\App\Models\Hospital', 'hospital_id');
//    }
//
//    /**
//     * Used to build Queries
//     *
//     * @param $query
//     * @param $hospital
//     * @return mixed
//     */
//    public function scopeByHospital($query, $hospital){
//        return $query->where('hospital_id', $hospital);
//    }
//
//    /**
//     * specialty() belongs to Hospital
//     * @return mixed
//     */
//    public function specialty() {
//        return $this->belongsTo( '\App\Models\Specialty', 'specialty_id');
//    }
//
//    /**
//     * Used to build Queries
//     *
//     * @param $query
//     * @param $hospital
//     * @return mixed
//     */
//    public function scopeBySpecialty($query, $hospital){
//        return $query->where('specialty_id', $hospital);
//    }
}
