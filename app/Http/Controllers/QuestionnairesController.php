<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaires;

class QuestionnairesController extends Controller
{
  public function index()
      { //calls the data from the database tables and allows them to be accessed in the view being returned.
          $questionnaires = questionnaires::all();
          return view('questionnaires.index',compact('questionnaires',$questionnaires));

      }


  public function create()
  {
      return view('questionnaires.create'); //directs the user to the specific view
  }

  public function store(Request $request) //stores the input data into the desired table
  {
      questionnaires::create($request->all());

      return redirect('/questionnaires');
  }

  public function delete($id) //broken feature 
  {
    questionnaires::destroy('questionnaires')->where('id', $id)->delete();
    return redirect('/questionnaires');
  }


}
