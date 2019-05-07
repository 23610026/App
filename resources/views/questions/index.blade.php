@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Questions</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        @foreach($questions as $questions)
            <tr>
                <th scope="row">{{$questions->id}}</th>
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
@endsection
