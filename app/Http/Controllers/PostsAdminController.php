<?php

namespace LaravelExpress\Http\Controllers;

use LaravelExpress\Http\Requests\PostRequest;
use LaravelExpress\Post;

class PostsAdminController extends Controller
{
    /*
     * @var post
     * **/
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $this->post->create($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('admin.posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();

        return redirect()->route('admin.posts.index');
    }
}
