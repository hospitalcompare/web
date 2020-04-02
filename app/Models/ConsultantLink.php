<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultantLink extends Model
{
    public $table = 'consultant_links';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'consultant_id',
        'hospital_id',
        'specialty_id',
        'email',
        'email_secondary',
        'phone_number',
        'phone_number_2',
        'data_01_description',
        'data_02_description',
        'data_03_description',
        'data_04_description',
        'data_05_description',
        'data_06_description',
        'data_07_description',
        'data_08_description',
        'data_09_description',
        'data_10_description',
        'data_11_description',
        'data_12_description',
        'data_13_description',
        'data_14_description',
        'data_15_description',
        'data_16_description',
        'data_17_description',
        'data_18_description',
        'data_19_description',
        'data_20_description',
        'data_21_description',
        'data_22_description',
        'data_23_description',
        'data_24_description',
        'data_01',
        'data_02',
        'data_03',
        'data_04',
        'data_05',
        'data_06',
        'data_07',
        'data_08',
        'data_09',
        'data_10',
        'data_11',
        'data_12',
        'data_13',
        'data_14',
        'data_15',
        'data_16',
        'data_17',
        'data_18',
        'data_19',
        'data_20',
        'data_21',
        'data_22',
        'data_23',
        'data_24',
        'data_source',
        'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'consultant_id'         => 'integer',
        'hospital_id'           => 'integer',
        'specialty_id'          => 'integer',
        'email'                 => 'string',
        'email_secondary'       => 'string',
        'phone_number'          => 'string',
        'phone_number_2'        => 'string',
        'data_01_description'   => 'string',
        'data_02_description'   => 'string',
        'data_03_description'   => 'string',
        'data_04_description'   => 'string',
        'data_05_description'   => 'string',
        'data_06_description'   => 'string',
        'data_07_description'   => 'string',
        'data_08_description'   => 'string',
        'data_09_description'   => 'string',
        'data_10_description'   => 'string',
        'data_11_description'   => 'string',
        'data_12_description'   => 'string',
        'data_13_description'   => 'string',
        'data_14_description'   => 'string',
        'data_15_description'   => 'string',
        'data_16_description'   => 'string',
        'data_17_description'   => 'string',
        'data_18_description'   => 'string',
        'data_19_description'   => 'string',
        'data_20_description'   => 'string',
        'data_21_description'   => 'string',
        'data_22_description'   => 'string',
        'data_23_description'   => 'string',
        'data_24_description'   => 'string',
        'data_01'               => 'integer',
        'data_02'               => 'integer',
        'data_03'               => 'integer',
        'data_04'               => 'integer',
        'data_05'               => 'integer',
        'data_06'               => 'integer',
        'data_07'               => 'integer',
        'data_08'               => 'integer',
        'data_09'               => 'double',
        'data_10'               => 'double',
        'data_11'               => 'double',
        'data_12'               => 'double',
        'data_13'               => 'double',
        'data_14'               => 'double',
        'data_15'               => 'double',
        'data_16'               => 'double',
        'data_17'               => 'double',
        'data_18'               => 'double',
        'data_19'               => 'double',
        'data_20'               => 'double',
        'data_21'               => 'double',
        'data_22'               => 'double',
        'data_23'               => 'double',
        'data_24'               => 'double',
        'data_source'           => 'string',
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
     * specialty() belongs to Consultant
     * @return mixed
     */
    public function consultant() {
        return $this->belongsTo( '\App\Models\Consultant', 'consultant_id');
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

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $consultant
     * @return mixed
     */
    public function scopeByConsultant($query, $consultant) {
        return $query->where('consultant_id', $consultant);
    }
}
