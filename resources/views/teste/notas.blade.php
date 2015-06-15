@extends('template')

@section('content')
    <ul>
    @foreach($notas as $nota)
        <li>{{$nota}}</li>
    @endforeach
    </ul>
@stop