@extends('layouts.frontend')
@section('content')
    @foreach($articles as $article)
        标题:<a href="{{url('article/'.$article->id)}}">{{$article->title}}</a> <br>
    @endforeach
@endsection