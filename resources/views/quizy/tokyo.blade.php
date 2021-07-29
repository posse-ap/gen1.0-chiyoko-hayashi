@extends('layouts.quizyPage')

@section('title','ガチで東京の人しか解けない！ #東京の難読地名クイズ')

@section('content')
<div class="main">
    <!-- ここから1問目 -->
    <div class="quiz">
        <h1>1. この地名はなんて読む？</h1>
        <img src="img/1.png">
        <ul>
            <li id="answerlist_1_1" name="answerlist_1" class="answerlist" onclick="check(1, 1, 2)">こうわ</li>
            <li id="answerlist_1_2" name="answerlist_1" class="answerlist" onclick="check(1, 2, 2)">たかなわ</li>
            <li id="answerlist_1_3" name="answerlist_1" class="answerlist" onclick="check(1, 3, 2)">たかわ</li>
            <li id="answerbox_1" class="answerbox">
                <span id="answertext_1"></span><br>
                <span>正解は「たかなわ」です！</span>
            </li>
        </ul>
    </div>
<script src="{{ asset('js/quizy.js') }}"></script>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection