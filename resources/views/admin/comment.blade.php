@extends('layouts.app')
@section('content')
    @foreach($comments as $comment)
        {{$comment->article_id}}:{{$comment->body}}  <br>
        <form action="{{url('admin/comment/'.$comment->id)}}" method="post">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            <button type="submit">删除</button>
        </form>
    @endforeach
@endsection