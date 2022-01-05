<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input
        type="text"
        name="question_name"
        value="{{$question->name}}"
    >
</form>