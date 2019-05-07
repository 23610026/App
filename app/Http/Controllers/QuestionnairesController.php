<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaires;

class QuestionnairesController extends Controller
{
  public function index()
      {
          $questionnaires = questionnaires::all();
          return view('questionnaires.index',compact('questionnaires',$questionnaires));

      }


  public function create()
  {
      return view('questionnaires.create');
  }

  public function store(Request $request)
  {
      questionnaires::create($request->all());

      return redirect('/questionnaires');
  }

  public function delete($id)
  {
    questionnaires::destroy('questionnaires')->where('id', $id)->delete();
    return redirect('/questionnaires');
  }


}
