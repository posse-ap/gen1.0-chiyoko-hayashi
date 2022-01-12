<h1>{{$questions->name}}</h1>
@foreach ($questions->big_questions as $big_question)
<form action="/{{ request()->path() }}" method="POST">
    @csrf
        <div class="quiz">
            <p style="display:inline-block;">{{$big_question->id}}.</p>
            <input
                    type="text"
                    name="sentence"
                    value="{{ $big_question->sentence }}"
                >
            <br>
            <img src="/img/{{ ($big_question->image) }}" style="height: 100px; width: 100px;">
                <ul>
                    @foreach ($big_question->choices as $choice)
                        <tr>
                            <td>
                                <input
                                type="text"
                                name="name{{ $loop->index }}"
                                value="{{ $choice->name }}"
                                >
                            </td>
                            <td>
                                <input 
                                type="radio" 
                                name="valid"
                                value="{{ $loop->index }}"
                                @if($choice->valid) checked @endif
                                >
                            </td>
                        </tr>
                    @endforeach
                </ul>
                <h3 style="margin-bottom: 0; font-size: 16px;">解説文</h3>
                <input type="text" name="explanation" value="{{$big_question->explanation}}">
                <br>
                <input type="submit" value="更新">
                <a href="http://localhost/admin/delete/big_question/{{$big_question->id}}">削除</a>
                <input type="hidden" value="{{ $big_question->id }}" name="big_question_id">
            </form>
        </div>
        @endforeach
        <a href="http://localhost/admin/add/big_question/{{$questions->id}}">追加</a>