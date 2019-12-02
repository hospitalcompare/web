<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public $table = 'blog_categories';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'icon', 'colour', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'      => 'string',
        'icon'      => 'string',
        'colour'    => 'string',
        'status'    => 'string'
    ];

    /**
     * blogs() belongs to Blog
     * @return mixed
     */
    public function blogs() {
        return $this->hasMany( '\App\Models\Blog', 'blog_category_id');
    }

    /**
     * Used to build Queries
     *
     * @param $query
     * @param $category
     * @return mixed
     */
    public function scopeByCategory($query, $category) {
        return $query->where('blog_category_id', $category);
    }
}
