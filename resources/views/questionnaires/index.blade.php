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
                <td><button class="addbtn">Add</button></td>
                <td><button class="editbtn">Edit</button></td>
                <td><button class="deletebtn">Delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
