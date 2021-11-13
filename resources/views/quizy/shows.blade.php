@extends('layouts.quizyPage')

@section('title',$question_name)

@section('content')
<div class="main">
    @foreach ($questions->big_questions as $big_question)
    <!-- ここから1問目 -->
    <div class="quiz">
        <h1>{{$big_question->id}}. この地名はなんて読む？</h1>
        <img src="img/1.png">
        <ul>
            @foreach ($shuffled as $choice)
            <li id="answerlist_{{$big_question->id}}_{{$loop->iteration}}" name="answerlist_{{$big_question->question_id}}" class="answerlist" onclick="check({{$big_question->question_id}}, {{$loop->iteration}}, {{$choice->valid+1}})">{{$choice->name}}</li>
            @endforeach
            <li id="answerbox_{{$big_question->id}}" class="answerbox">
            <span id="answertext_{{$big_question->id}}"></span><br>
            <span>{{$big_question->explanation}}</span>
        </li>
        </ul>
    </div>
    @endforeach
<script src="{{ asset('js/quizy.js') }}"></script>
@endsection