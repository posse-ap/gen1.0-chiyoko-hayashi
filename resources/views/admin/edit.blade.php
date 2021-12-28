@foreach ($questions->big_questions as $big_question)
        <div class="quiz">
            <h2>{{$big_question->id}}. {{$big_question->sentence}}</h2>
            <img src="/img/{{ ($big_question->image) }}" style="height: 100px; width: 100px;">
            <form action="/{{ request()->path() }}" method="POST">
                @csrf
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
                <input type="submit" value="更新">
                <input type="hidden" value="{{ $big_question->id }}" name="big_question_id">
            </form>
        </div>
        @endforeach
        <a href="http://localhost/admin/add/big_question/{{$questions->id}}">追加</a>