@extends('layouts.quizyList')

@section('title','Quizy問題')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<a href="http://localhost/quiz/1">ガチで東京の人しか解けない！ #東京の難読地名クイズ</a><br>
<a href="http://localhost/quiz/2">広島県民なら解けて当然？ #広島県の難読地名クイズ</a>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection