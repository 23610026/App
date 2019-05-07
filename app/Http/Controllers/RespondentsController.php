<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\respondents;

class RespondentsController extends Controller
{
  public function index()
      {
          $respondents = respondents::all();
          return view('respondents.index',compact('respondents',$respondents));
      }


  public function create()
  {
      return view('respondents.create');
  }

  public function store(Request $request)
  {
      respondents::create($request->all());

      return redirect('/responses/create');
  }

  public function delete($id)
  {
    questions::destroy('respondents')->where('id', $id)->delete();
    return redirect('/respondents');
  }
}
