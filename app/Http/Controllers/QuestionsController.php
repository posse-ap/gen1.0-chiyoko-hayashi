<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Choice;
use App\Models\BigQuestion;
use Illuminate\Http\Request;


class QuestionsController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::all();
        return view('quizy.index',['questions' => $questions]);
    }

    public function show($id)
    {
        $questions = Question::find($id);
        $question_name = Question::find($id)->name;
        $choices = BigQuestion::find($id)->choices;
        // dd($choices);
        $answer = $choices[0]->name;
        $shuffled = $choices->shuffle();
        // dd($shuffled);
        // shuffledからnameがたかなわ（answer）のものを探して、その配列のインデックス番号をとってきて、それをvalidに置き換える
        // validカラムをシャッフルする前は正解は1個目です
        // 高輪が2番目だったら、validの値を2にするようにする
        foreach($shuffled as $index => $answer){
            if($answer->name == $choices[0]->name){
                $valid = $index;
            }
        }

        foreach($shuffled as $answer){
            $answer->valid = $valid;
        }
        
        return view('quizy.shows',compact('questions','question_name','shuffled'));
    }
}