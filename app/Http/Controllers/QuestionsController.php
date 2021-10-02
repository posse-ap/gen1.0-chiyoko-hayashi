<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class QuestionsController extends Controller
{
    public function index(Request $request)
    {
    $questions =DB::table('questions')->get();
    return view('quizy.index', ['questions' => $questions]);
    }

    public function show(Request $request)
    {
    $id = $request->id;
    $choices =DB::table('choices')->where('question_id', $id)->get();
    $answer =DB::table('choices')->where('question_id', $id)->where('valid', 1)->get(['name']);
    return view('quizy.shows', ['choices' => $choices, 'answer' => $answer]);
    }
}