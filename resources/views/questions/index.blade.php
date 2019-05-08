@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
<!-- Styling assigned to design header -->
        <tr>
          <th bgcolor="lightgrey" scope="col">#</th>
          <th bgcolor="lightgrey" scope="col" style="font-weight: bold";>Created Questions</th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>

        </tr>


        <tbody>
        @foreach($questions as $questions)
            <tr>
                <th scope="row">{{$questions->id}}</th> <!-- calls to questions table and pulls whatever field name it is pointing to -->
                <td>{{$questions->Title}}</td>
                <td>{{$questions->Question1}}</td>
                <td>{{$questions->Question2}}</td>
                <td>{{$questions->Question3}}</td>
                <td>{{$questions->Question4}}</td>
                <td>{{$questions->Question5}}</td>
                <td><button class="editbtn">Edit</button></td>
                <td>
                  <a href="/delete/{{ $questions->id }}">
                      <button> Delete </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<div style="text-align:right; padding-right:10px;">
        <button onclick="location.href='/home';" id="Home">Done</button> <!-- Button to encoruage consistent navigation throughout -->
      </div>
@endsection
