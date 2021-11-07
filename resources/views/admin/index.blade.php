@extends('layouts.quizyList')

@section('title','Quizy問題')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
@foreach ($questions as $question)
<a href="http://localhost/admin/{{$question->id}}">{{$question->name}}</a>
@endforeach
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection