@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Questionnaire</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
        </thead>
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

    <td><button onclick="location.href='/questions';" id="Answers">View Reponses</button></td>
@endsection
