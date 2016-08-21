@extends('layouts.frontend')
@section('content')
    {{$article->title}}  <br>
    {{$article->body}}
    <hr>
    <h1>评论</h1>
    <br>
    @foreach($article->hasManyComments as $comment)
        姓名{{$comment->name}} <br>
        邮箱 {{$comment->email}} <br>
        {{$comment->body}}
    @endforeach
    <hr>
    <form action="{{url('comment/'.$article->id)}}" method="post">
        {!! csrf_field() !!}
        文章id <input type="text" value="{{$article->id}}" name="article_id"> <br>
        姓名 <input type="text" name="name"><br>
        邮箱 <input type="text" name="email"><br>
        内容 <textarea name="body"></textarea>
        <input type="submit">
    </form>


@endsection