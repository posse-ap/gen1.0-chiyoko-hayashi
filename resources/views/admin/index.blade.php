@extends('layouts.quizyList')

@section('title','問題一覧')
<a href="http://localhost/admin/add/question">追加</a>

@section('content')
@foreach ($questions as $question)
<a href="http://localhost/admin/edit/{{$question->id}}">{{$question->name}}</a>
<a href="http://localhost/admin/edit/">編集</a>
<a href="http://localhost/admin/edit/">削除</a>
<br>
@endforeach
@endsection
@section('footer')
copyright 2020 tuyano..
@endsection