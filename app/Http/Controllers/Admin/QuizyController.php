<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuizyController extends Controller
{
    public function index(Request $request)
    {
    $questions = question::all();
    return view('quizy.index',['questions' => $questions]);
    }

    public function show($id)
    {
    $question_name = Question::find($id)->name;
    $choices = Question::find($id)->choices;
    return view('admin.shows',compact('question_name','big_question','choices'));
    }
}
