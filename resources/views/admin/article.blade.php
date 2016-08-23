@extends('layouts.app')
@section('content')
    <a href="/admin/article/create">新增文章</a> <br>
    @foreach($articles as $article)
        标题{{$article->title}} <br>
        内容{{$article->body}}  <br>
        <button><a href="{{url('admin/article/'.$article->id.'/edit')}}">编辑</a></button>
        <form action="{{url('admin/article/'.$article->id)}}" method="post">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            <button type="submit">删除</button>
        </form>
        <br>
    @endforeach
@endsection