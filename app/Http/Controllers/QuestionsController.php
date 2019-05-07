<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questions;
use App\questionnaires;

class QuestionsController extends Controller
{
  public function index()
      {
          $questions = questions::all();
          return view('questions.index',compact('questions',$questions));

      }

  public function create()
  {
      return view('questions.create');

  }

  public function store(Request $request)
  {
      questions::create($request->all());

      return redirect('/questions');
  }

  public function delete($id)
  {
    questions::destroy('questions')->where('id', $id)->delete();
    return redirect('/questions');
  }

public function show() {

}


}
