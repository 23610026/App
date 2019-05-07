@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">

        <tr>
          <th bgcolor="lightgrey" scope="col">#</th>
          <th bgcolor="lightgrey" scope="col" style="font-weight: bold";>Responses</th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>

        </tr>

        <tbody>
        @foreach($responses as $responses)
            <tr>
                <th scope="row">{{$responses->id}}</th>
                <td>{{$responses->Title}}</td>
                <td>{{$responses->Question1}}</td>
                <td>{{$responses->Question2}}</td>
                <td>{{$responses->Question3}}</td>
                <td>{{$responses->Question4}}</td>
                <td>{{$responses->Question5}}</td>
                <td><button class="editbtn">Edit</button></td>
                <td>
                  <a href="/delete/{{ $responses->id }}">
                      <button> Delete </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="text-align:right; padding-right:10px;">
      <button onclick="location.href='/home';" id="View Respondents">Home</button>
    <button onclick="location.href='/respondents';" id="View Respondents">Return</button>
</div>

@endsection
