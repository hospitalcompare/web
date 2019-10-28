<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image', 'facebook', 'twitter', 'linkedin', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'title'         => 'string',
        'description'   => 'string',
        'image'         => 'string',
        'facebook'      => 'string',
        'twitter'       => 'string',
        'linkedin'      => 'string',
        'status'        => 'string'
    ];

//    /**
//     * category() belongs to BlogCategory
//     * @return mixed
//     */
//    public function category() {
//        return $this->belongsTo( '\App\Models\BlogCategory', 'blog_category_id');
//    }
//
//    /**
//     * Used to build Queries
//     *
//     * @param $query
//     * @param $category
//     * @return mixed
//     */
//    public function scopeByCategory($query, $category){
//        return $query->where('blog_category_id', $category);
//    }
}
