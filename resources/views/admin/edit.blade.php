@extends('layouts.app')
@section('content')
    <form action="{{url('admin/article/'.$article->id)}}" method="post">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input type="text" value="{{$article->title}}" name="title"> <br>
        <textarea name="body">{{$article->body}}</textarea> <br>
        <input type="submit">
    </form>
@endsection