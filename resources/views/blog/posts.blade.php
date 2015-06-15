@extends('blog')
@section('content')
    <ul>
        @foreach($posts as $post)
            <li>{{ $post  }}</li>
        @endforeach
    </ul>
@stop