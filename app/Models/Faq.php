<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = 'faqs';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'faq_category_id', 'question', 'answer', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'faq_category_id'   => 'integer',
        'question'          => 'string',
        'answer'            => 'string',
        'status'            => 'string'
    ];

    /**
     * category() belongs to FaqCategory
     * @return mixed
     */
    public function category() {
        return $this->belongsTo( '\App\Models\FaqCategory', 'category_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $category
     * @return mixed
     */
    public function scopeByCategory($query, $category){
        return $query->where('category_id', $category);
    }
}
