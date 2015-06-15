<?php

namespace LaravelExpress\Http\Controllers;

use Illuminate\Http\Request;

use LaravelExpress\Http\Requests;
use LaravelExpress\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog.index');
    }

    public function posts()
    {
        $posts = [
            0 => 'Post 0',
            1 => 'Post 1',
            2 => 'Post 2',
            3 => 'Post 3'
        ];


        return view('blog.posts', compact('posts'));
    }
}
