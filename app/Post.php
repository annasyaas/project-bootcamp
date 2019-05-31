<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // menyatakan field-field yang akan di input 
    // ke suatu tabel
    protected $fillable = [
        'author_id',
        'title',
        'content',
        'image_cover',
        'is_draft'
    ];

    /**
     * Get the user record associated with the post.
     */
    public function author()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }

    /**
     * The category that belong to the post.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'post_categories', 'post_id', 'category_id');
    }
}
