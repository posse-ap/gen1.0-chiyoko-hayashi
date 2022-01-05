@extends('layouts.quizyList')

@section('title','問題一覧')
<a href="http://localhost/admin/add/question">追加</a>

@section('content')
@foreach ($questions as $question)
<p style="display: inline-block;">{{$question->name}}</p>
<a href="http://localhost/admin/edit/title/{{$question->id}}">問題タイトル編集</a>
<a href="http://localhost/admin/edit/{{$question->id}}">編集</a>
<a href="http://localhost/admin/delete/question/{{$question->id}}">削除</a>
<br>
@endforeach
@endsection
@section('footer')
copyright 2020 tuyano..
@endsection