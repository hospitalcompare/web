<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class HospitalType extends Model
{
    public $table = 'hospital_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'          => 'string',
        'status'        => 'string'
    ];


}