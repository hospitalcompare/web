<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    public $table = 'consultants';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gmc_code',
        'licenced',
        'years_registered',
        'first_name',
        'last_name',
        'initials',
        'gender',
        'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'gmc_code'          => 'string',
        'licenced'          => 'boolean',
        'years_registered'  => 'integer',
        'first_name'        => 'string',
        'last_name'         => 'string',
        'initials'          => 'string',
        'gender'            => 'string',
        'status'            => 'string'
    ];

}
