<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\responses;

class ResponsesController extends Controller
{
  public function index()
      {
          $responses = responses::all();
          return view('responses.index',compact('responses',$responses));
      }


  public function create()
  {
      return view('responses.create');
  }

  public function store(Request $request)
  {
      responses::create($request->all());

      return redirect('/thanks');
  }

  public function delete($id)
  {
    responses::destroy('responses')->where('id', $id)->delete();
    return redirect('/responses');
  }

}
