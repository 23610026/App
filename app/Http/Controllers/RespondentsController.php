<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\respondents;

class RespondentsController extends Controller
{
  public function index()
      { //calls the data from the database tables and allows them to be accessed in the view being returned.
          $respondents = respondents::all();
          return view('respondents.index',compact('respondents',$respondents));
      }


  public function create()
  {
      return view('respondents.create'); //directs the user to the specific view
  }

  public function store(Request $request) //stores the input data into the desired table
  {
      respondents::create($request->all());

      return redirect('/responses/create');
  }

  public function delete($id) //broken feature 
  {
    questions::destroy('respondents')->where('id', $id)->delete();
    return redirect('/respondents');
  }
}
