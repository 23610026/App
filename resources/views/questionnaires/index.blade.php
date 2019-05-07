@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <tr>
            <th bgcolor="lightgrey" scope="col">#</th>
            <th bgcolor="lightgrey" scope="col" style="font-weight: bold";>Current Questionnaires</th>
            <th bgcolor="lightgrey" scope="col"></th>
            <th bgcolor="lightgrey" scope="col"></th>
            <th bgcolor="lightgrey" scope="col"></th>

        </tr>
        <tbody>
        @foreach($questionnaires as $questionnaires)
            <tr>
                <th scope="row">{{$questionnaires->id}}</th>
                <td>{{$questionnaires->Title}}</td>
                <td><button onclick="location.href='/questions/create';" id="add">Add</button></td>
                <td><button class="editbtn">Edit</button></td>
                <td>
                <a href="/delete/{{ $questionnaires->id }}">
                    <button> Delete </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

<div style="text-align:right; padding-right:10px;">
        <button onclick="location.href='/home';" id="View Respondents">Home</button>
    <button onclick="location.href='/questions';" id="Answers">View Questions</button>
</div>



@endsection
