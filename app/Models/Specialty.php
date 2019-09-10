<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public $table = 'specialties';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'      => 'string',
        'code'      => 'string',
        'status'    => 'string'
    ];
}