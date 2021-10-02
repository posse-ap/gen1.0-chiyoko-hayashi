@extends('layouts.quizyPage')

@section('title','ガチで東京の人しか解けない！ #東京の難読地名クイズ')

@section('content')
<div class="main">
    <!-- ここから1問目 -->
    <div class="quiz">
        <h1>1. この地名はなんて読む？</h1>
        <img src="img/1.png">
        <ul>
            @foreach ($choices as $choice)
            <li id="answerlist_1_1" name="answerlist_{{$choice->question_id}}" class="answerlist" onclick="check({{$choice->question_id}}, 1, {{$choice->valid}})">{{$choice->name}}</li>
            @endforeach

            <li id="answerbox_1" class="answerbox">
            <span id="answertext_1"></span><br>
            <span>正解は「{{$answer}}」です！</span>
            </li>
        </ul>
    </div>
<script src="{{ asset('js/quizy.js') }}"></script>
@endsection