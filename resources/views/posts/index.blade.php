@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{$post->title}} <small>{{$post->created_at}}</small></h2>
        <p>{{$post->content}}</p>
        <hr />
    @endforeach
@endsection