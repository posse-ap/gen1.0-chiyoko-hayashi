<?php

namespace App\Http\Controllers;

use App\Question;
use App\Choice;
use Illuminate\Http\Request;


class QuestionsController extends Controller
{
    public function index(Request $request)
    {
        $questions = question::all();
        return view('quizy.index',['questions' => $questions]);
    }

    public function show($id)
    {
        $question_name = question::find($id)->name;
        $choices = question::find($id)->choices;
        return view('quizy.shows',compact('question_name','choices'));
    }
}