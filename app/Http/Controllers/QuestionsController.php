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
        $question = Question::with('big_questions.choices')->find($id);
        return view('quizy.shows',compact('question'));
    }
}