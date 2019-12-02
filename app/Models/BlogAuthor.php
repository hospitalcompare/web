<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogAuthor extends Model
{
    public $table = 'blog_authors';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'          => 'string',
        'description'   => 'string',
        'image'         => 'string',
        'status'        => 'string'
    ];

    /**
     * blogs() belongs to Blog
     * @return mixed
     */
    public function blogs() {
        return $this->hasMany( '\App\Models\Blog', 'blog_author_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $author
     * @return mixed
     */
    public function scopeByAuthor($query, $author) {
        return $query->where('blog_author_id', $author);
    }
}
