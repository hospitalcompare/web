<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    public $table = 'procedures';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specialty_id', 'name', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'specialty_id'  => 'integer',
        'name'          => 'string',
        'status'        => 'string'
    ];

    /**
     * specialty() belongs to Specialty
     * @return mixed
     */
    public function hospital() {
        return $this->belongsTo( '\App\Models\Specialty', 'specialty_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $specialty
     * @return mixed
     */
    public function scopeBySpecialty($query, $specialty) {
        return $query->where('specialty_id', $specialty);
    }
}