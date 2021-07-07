<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index', ['msg'=>'']);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        return view('hello.index',['msg'=>$request->msg]);
    }
}