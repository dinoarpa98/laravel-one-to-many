<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'image', 'slug'
    ];

        public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
}