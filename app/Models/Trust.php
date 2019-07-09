<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trust extends Model
{
    public $table = 'trusts';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_id', 'trust_id', 'organisation_id', 'provider_id', 'name', 'tel_number', 'url', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'trust_id'          => 'string',
        'address_id'        => 'integer',
        'organisation_id'   => 'string',
        'provider_id'       => 'string',
        'name'              => 'string',
        'tel_number'        => 'string',
        'url'               => 'string',
        'status'            => 'string'
    ];

    /**
     * address() belongs to Address
     * @return mixed
     */
    public function address() {
        return $this->belongsTo( '\App\Models\Address', 'address_id');
    }

    public function hospitals() {
        return $this->hasMany('\App\Models\Hospital', 'trust_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $address
     * @return mixed
     */
    public function scopeByAddress($query, $address){
        return $query->where('address_id', $address);
    }
}