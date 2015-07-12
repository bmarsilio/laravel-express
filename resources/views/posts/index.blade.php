@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }} <small>{{ $post->created_at }}</small></h2>
        <p>{{ $post->content }}</p>
        <ul>
            @foreach($post->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>

        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <strong>Name: </strong>{{ $comment->name  }}
            <strong>Comment: </strong>{{ $comment->comment  }}
            <br />
        @endforeach

        <hr />
    @endforeach
@endsection