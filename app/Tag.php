<?php

namespace LaravelExpress;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->belongsToMany('LaravelExpress\Post', 'posts_tags');
    }
}
