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
        // $choices = BigQuestion::find($id)->choices;
        return view('quizy.shows',compact('questions','question_name'));
    }
}