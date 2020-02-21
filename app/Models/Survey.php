<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    public $table = 'surveys';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rating', 'feedback', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'rating'            => 'double',
        'feedback'          => 'string',
        'status'            => 'string'
    ];
}
