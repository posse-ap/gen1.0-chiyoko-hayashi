<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
    public function index(Request $request)
    {
    $questions = question::all();
    return view('quizy.index',['questions' => $questions]);
    }

    public function shows(Request $request)
    {
        
    }
}
