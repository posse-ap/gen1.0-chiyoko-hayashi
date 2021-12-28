<form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
    </form>