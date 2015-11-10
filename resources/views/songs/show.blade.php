@extends("master")

@section("content")
    <h1>{{$song->title}}</h1>
    <p>{{$song->lyrics}}</p>
@stop