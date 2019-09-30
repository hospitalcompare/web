<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    public $table = 'insurances';
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

    /**
     * category() belongs to FaqCategory
     * @return mixed
     */
    public function policies() {
        return $this->hasMany( '\App\Models\Policy', 'insurance_id');
    }
}
