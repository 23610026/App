<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questions;
use App\questionnaires;

class QuestionsController extends Controller
{
  public function index()
      { //calls the data from the database tables and allows them to be accessed in the view being returned.
          $questions = questions::all();
          return view('questions.index',compact('questions',$questions));

      }

  public function create()
  {
      return view('questions.create');//directs the user to the specific view

  }

  public function store(Request $request) //stores the input data into the desired table
  {
      questions::create($request->all());

      return redirect('/questions');
  }

  public function delete($id) //broken feature 
  {
    questions::destroy('questions')->where('id', $id)->delete();
    return redirect('/questions');
  }

public function show() {

}


}
