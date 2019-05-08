@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <tr>
          <!-- Code for the formatting of the header of the table -->
            <th bgcolor="lightgrey" scope="col">#</th>
            <th bgcolor="lightgrey" scope="col" style="font-weight: bold";>Current Questionnaires</th>
            <th bgcolor="lightgrey" scope="col"></th>
            <th bgcolor="lightgrey" scope="col"></th>
            <th bgcolor="lightgrey" scope="col"></th>

        </tr>
        <tbody>
        @foreach($questionnaires as $questionnaires)
            <tr>
                <th scope="row">{{$questionnaires->id}}</th> <!-- Calls for specific field from Questionnire and inputs it into the table -->
                <td>{{$questionnaires->Title}}</td>
                <td><button onclick="location.href='/questions/create';" id="add">Add</button></td> <!-- Button redirects user once clicked -->
                <td><button class="editbtn">Edit</button></td>
                <td>
                <a href="/delete/{{ $questionnaires->id }}"> <!-- Broken feature -->
                    <button> Delete </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

<div style="text-align:right; padding-right:10px;">
        <button onclick="location.href='/home';" id="View Respondents">Home</button> <!-- Buttons to enforce navigation -->
    <button onclick="location.href='/questions';" id="Answers">View Questions</button>
</div>



@endsection
