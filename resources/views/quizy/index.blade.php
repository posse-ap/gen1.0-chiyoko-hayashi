@extends('layouts.quizyList')

@section('title','Quizy問題')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
@foreach ($questions as $question)
    <form action="" method="post">
        <ul class="sortable">
            <li id="{{$question->id}}">
                <a href="http://localhost/quiz/{{$question->id}}">{{$question->name}}</a>
            </li>
        </ul>
        <input type="hidden" id="list-ids" name="list-ids" />
        <button id="submit">更新</button>
    </form>
<script src="{{ mix('js/sort.js') }}"></script>
@endforeach
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection