<?php

namespace LaravelExpress;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany('LaravelExpress\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('LaravelExpress\Tag', 'posts_tags');
    }
}
