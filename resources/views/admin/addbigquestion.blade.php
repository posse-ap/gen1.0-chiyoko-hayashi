<!-- /admin/add/big_question/question_id -->
<body>
    <h2>{{$question_name}}問題追加</h2>
    <form action="/{{ request()->path() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 20px">
            <h3 style="margin-bottom: 0; font-size: 16px;">問題の画像</h3>
            <input type="file" name="file">
            <h3 style="margin-bottom: 0; font-size: 16px;">問題文</h3>
            <input type="text" name="sentence">
            <table>
                <tr>
                    <th>選択肢</th>
                    <th>正解の場合チェック</th>
                </tr>
                <tr>
                    <td><input type="text" name="name1"></td>
                    <td><input type="radio" name="valid" value="1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="name2"></td>
                    <td><input type="radio" name="valid" value="2"></td>
                </tr>
                <tr>
                    <td><input type="text" name="name3"></td>
                    <td><input type="radio" name="valid" value="3"></td>
                </tr>
            </table>
            <h3 style="margin-bottom: 0; font-size: 16px;">解説文</h3>
            <input type="text" name="explanation">
            <h3 style="margin-bottom: 0; font-size: 16px;">追加</h3>
            <input type="submit" value="追加">
        </div>
    </form>
</body>