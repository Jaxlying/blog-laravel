@extends('layouts.app')
@section('content')
    <a href="/admin/article/create">新增文章</a> <br>
    @foreach($articles as $article)
        标题{{$article->title}} <br>
        内容{{$article->body}}  <br>
        <a href="{{url('admin/article/'.$article->id.'/edit')}}">编辑</a>  <a href="">删除</a>
    @endforeach
@endsection