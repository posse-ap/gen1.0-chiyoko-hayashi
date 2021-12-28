<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\BigQuestion;
use App\Models\Choice;

class QuizyController extends Controller
{
    public function index(Request $request)
    {
    $questions = question::all();
    return view('admin.index',compact('questions'));
    }

    public function edit($question_id)
    {
    $questions = Question::find($question_id);
    return view('admin.edit',compact('questions'));
    }

    public function editpost(Request $request)
    {
    // dd($request);
    $choices = BigQuestion::find($request->big_question_id)->choices;
    foreach ($choices as $index => $choice) {
        $choice->name = $request->{'name'.$index};
        if ($index === intval($request->valid)) {
            $choice->valid = 1;
        } else {
            $choice->valid = 0;
        }
        $choice->save();
    }
    return redirect('/admin');
    }

    public function addquestion(){
        return view('admin.addquestion');
    }

    public function addquestionpost(Request $request){
        $name = $request->name;
        $question = new Question;
        $question->save();

    }
    
    public function addbigquestion($big_question_id){
        $question_name = Question::find($big_question_id)->name;
        return view('admin.addbigquestion',compact('question_name'));
    }

    public function addbigquestionpost(Request $request, $id){
        // dd($request);
        $file = $request->file;
        $fileName = $request->{'name'.$request->valid} . '.png';
        $path = public_path('img/');
        $file->move($path, $fileName);
        $sentence = $request->sentence;
        $explanation = $request->explanation;
        $bigQuestion = new BigQuestion;
        $bigQuestion->question_id = $id;
        $bigQuestion->image = $fileName;
        $bigQuestion->sentence = $sentence;
        $bigQuestion->explanation = $explanation;
        $bigQuestion->save();
        $bigQuestion->choices()->saveMany([
            new Choice([
                'name' => $request->name1,
                'valid' => intval($request->valid) === 1,
            ]),
            new Choice([
                'name' => $request->name2,
                'valid' => intval($request->valid) === 2,
            ]),
            new Choice([
                'name' => $request->name3,
                'valid' => intval($request->valid) === 3,
            ]),
        ]);
        

        return redirect('/admin');
    }
}
