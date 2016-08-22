@extends('layouts.app')
@section('content')
    <form action="/admin/article" method="post">
        {!! csrf_field() !!}
        标题:<input type="text" name="title"> <br>
        内容: <textarea name="body"></textarea>
        <input type="submit">
    </form>
@endsection