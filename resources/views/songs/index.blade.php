@extends("master")

@section("content")
    @foreach($songs as $song)
        <li><a href="/songs/{{$song->id}}">{{$song->title}}</a></li>
    @endforeach
@stop