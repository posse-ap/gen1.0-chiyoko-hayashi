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
            @foreach ($big_question->choices as $choice)
            <li id="answerlist_{{$big_question->id}}_{{$choice->id}}" name="answerlist_{{$big_question->question_id}}" class="answerlist" onclick="check({{$big_question->question_id}}, {{$choice->id}}, {{$choice->valid}})">{{$choice->name}}</li>
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