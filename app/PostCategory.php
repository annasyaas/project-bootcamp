<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    
    public function posts()
    {
        return $this->hasOne('App\Post','id', 'post_id');
    }

    public function categories()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

}
