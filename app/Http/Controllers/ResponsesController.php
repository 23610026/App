<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\responses;

class ResponsesController extends Controller
{
  public function index()
      { //calls the data from the database tables and allows them to be accessed in the view being returned.
          $responses = responses::all();
          return view('responses.index',compact('responses',$responses));
      }


  public function create()
  {
      return view('responses.create'); //directs the user to the specific view
  }

  public function store(Request $request) //stores the input data into the desired table
  {
      responses::create($request->all());

      return redirect('/thanks');
  }

  public function delete($id) //broken feature 
  {
    responses::destroy('responses')->where('id', $id)->delete();
    return redirect('/responses');
  }

}
