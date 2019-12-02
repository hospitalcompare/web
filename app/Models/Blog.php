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
        'blog_category_id', 'blog_author_id', 'title', 'description', 'time_to_read', 'image', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'blog_category_id'  => 'integer',
        'blog_author_id'    => 'integer',
        'title'             => 'string',
        'description'       => 'string',
        'image'             => 'string',
        'status'            => 'string'
    ];

    /**
     * category() belongs to BlogCategory
     * @return mixed
     */
    public function category() {
        return $this->belongsTo( '\App\Models\BlogCategory', 'blog_category_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $category
     * @return mixed
     */
    public function scopeByCategory($query, $category){
        return $query->where('blog_category_id', $category);
    }

    /**
     * author() belongs to BlogAuthor
     * @return mixed
     */
    public function author() {
        return $this->belongsTo( '\App\Models\BlogAuthor', 'blog_author_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $author
     * @return mixed
     */
    public function scopeByAuthor($query, $author){
        return $query->where('blog_author_id', $author);
    }
}
