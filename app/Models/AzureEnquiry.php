<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AzureEnquiry extends Model {
    public $table = 'secure.enquiries';
    public $timestamps = true;
    public $connection = 'azure';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Location_ID',
        'Hospital',
        'Specialty',
        'Title',
        'First_Name',
        'Last_Name',
        'Email',
        'Phone_Number',
        'Postcode',
        'Additional_Information',
        'datestamp'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'Location_ID'               => 'string',
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
}
