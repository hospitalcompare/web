<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    public $table = 'policies';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'insurance_id', 'name', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'insurance_id'           => 'integer',
        'name'                  => 'string',
        'status'                => 'string'
    ];

    /**
     * insurance() belongs to Insurance
     * @return mixed
     */
    public function insurance() {
        return $this->belongsTo( '\App\Models\Insurance', 'insurance_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $insurance
     * @return mixed
     */
    public function scopeByInsurance($query, $insurance){
        return $query->where('insurance_id', $insurance);
    }
}
