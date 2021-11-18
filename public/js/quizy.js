console.log('hello');


// 解答クリック時の処理
// question_id：問題番号、1問目の場合は[1]を受け取る
// selection_id：回答番号、選択された選択肢の番号を受け取る
// is_correct_choice：正解だったら1,不正解だったら0を受け取る
function check(event) {
    console.log(event.currentTarget.className);
    const selectedChoice = event.currentTarget
    const selectionList = document.querySelectorAll("." + event.currentTarget.className);
    console.log(selectionList);
    // selectedChoice　が正解かどうか
    // 不正解をクリックしたらオレンジになって、answerbox_invalidがつく、さらにどれが正解か引っ張り出して、青くしてあげる

    // console.log(question_id);
    // console.log(selection_id);
    // console.log(is_correct_choice);
    // // クリック無効化
    // var answerlists = document.getElementsByName('answerlist_' + question_id);
    // answerlists.forEach(answerlist => {
    //     answerlist.style.pointerEvents = 'none';
    // });
    
    // // 選択項目のスタイル設定処理
    // // 選択された選択肢の背景色をオレンジ、正解の選択肢を水色に設定
    // // 選択された選択肢が正解だった場合は水色で上書きする
    // var selectiontext = document.getElementById('answerlist_' + question_id + '_' + selection_id);
    // var validtext = document.getElementById('answerlist_' + question_id + '_' + is_correct_choice);
    // selectiontext.className = 'answer_invalid';
    // validtext.className = 'answer_valid';
    
    // // 正解・不正解の表示設定処理
    // var answerbox = document.getElementById('answerbox_' + question_id);
    // var answertext = document.getElementById('answertext_' + question_id);
    // if (is_correct_choice) {
    //     answertext.className = 'answerbox_valid';
    //     answertext.innerText = '正解！';
    // } else {
    //     answertext.className = 'answerbox_invalid';
    //     answertext.innerText = '不正解！';
    // }
    // answerbox.display.block;
}