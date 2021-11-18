@extends('layouts.quizyPage')

@section('title',$question->name)


@section('content')
    @foreach ($question->big_questions as $big_question)
        <div class="quiz">
            <h1>{{$big_question->id}}. {{$big_question->sentence}}</h1>
            <img src="/img/{{ ($big_question->image) }}">
            <ul>
                @foreach ($big_question->choices->shuffle() as $choice)
                    <li 
                        id="answerlist_{{$big_question->id}}_{{$loop->iteration}}"
                        class="answerlist_{{$big_question->id}}"
                        data-valid="{{$choice->valid}}"
                        onclick="check(event)"
                    >
                        {{$choice->name}}
                    </li>
                @endforeach
            </ul>
            <div id="answerbox_{{$big_question->id}}" class="answerbox">
                <div id="answertext_{{$big_question->id}}"></div>
                <div>{{$big_question->explanation}}</div>
            </div>
        </div>
    @endforeach
<script src="{{ asset('js/quizy.js') }}"></script>
@endsection