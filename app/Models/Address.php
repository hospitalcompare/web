<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'addresses';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_1', 'address_2', 'city', 'county', 'postcode', 'local_authority', 'region', 'latitude', 'longitude', 'status', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'address_1'         => 'string',
        'address_2'         => 'string',
        'city'              => 'string',
        'county'            => 'string',
        'postcode'          => 'string',
        'local_authority'   => 'string',
        'region'            => 'string',
        'latitude'          => 'string',
        'longitude'         => 'string',
        'status'            => 'string',
        'created_at'        => 'string',
        'updated_at'        => 'string'
    ];

}