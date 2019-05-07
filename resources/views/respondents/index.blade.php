@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">

        <tr>
          <th bgcolor="lightgrey" scope="col">#</th>
          <th bgcolor="lightgrey" scope="col" style="font-weight: bold";>Respondents</th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>
          <th bgcolor="lightgrey" scope="col"></th>

        </tr>

        <tbody>
        @foreach($respondents as $respondents)
            <tr>
                <th scope="row">{{$respondents->id}}</th>
                <td>{{$respondents->Name}}</td>
                <td>{{$respondents->Gender}}</td>
                <td>{{$respondents->EmailAddress}}</td>
                <td>{{$respondents->Consent}}</td>
                <td><button class="editbtn">Edit</button></td>
                <td>
                  <a href="/delete/{{ $respondents->id }}">
                      <button> Delete </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<div style="text-align:right; padding-right:10px;">
        <button onclick="location.href='/home';" id="View Respondents">Home</button>
    <button onclick="location.href='/responses';" id="View Responses">View Responses</button>
  </div>
@endsection
