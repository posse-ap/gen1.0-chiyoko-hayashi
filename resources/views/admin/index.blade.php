@extends('layouts.quizyList')

@section('title','問題一覧')
<a href="http://localhost/admin/add/question">追加</a>

@section('content')
    <ul class="sortable">
        @foreach ($questions as $question)
            <li id="{{$question->id}}">
                <p style="display: inline-block;">{{$question->name}}</p>
                <a href="http://localhost/admin/edit/title/{{$question->id}}">問題タイトル編集</a>
                <a href="http://localhost/admin/edit/{{$question->id}}">編集</a>
                <a href="http://localhost/admin/delete/question/{{$question->id}}">削除</a>
            </li>
        @endforeach
    </ul>
    <form action="admin/big_question/savesort" method="post">
        @csrf
        <input type="hidden" id="listids" name="listids">
        <button id="submit">順序を更新</button>
    </form>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/sort.js') }}"></script>
@endsection
@section('footer')
copyright 2020 tuyano..
@endsection