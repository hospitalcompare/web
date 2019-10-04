<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    public $table = 'faq_categories';
    public $timestamps = true;

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
        'name'      => 'string',
        'status'    => 'string'
    ];
}
