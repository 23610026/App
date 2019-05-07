@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

<h1> New Question </h1>

<form action="/questions" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="1">Question 1</label>
            <input type="text" class="form-control" id="1" name="Question1"></textarea>
        </div>
        <div class="form-group">
            <label for="2">Question 2</label>
            <input type="text" class="form-control" id="2" name="Question2"></textarea>
        </div>
        <div class="form-group">
            <label for="3">Question 3</label>
            <input type="text" class="form-control" id="3" name="Question3"></textarea>
        </div>
        <div class="form-group">
            <label for="4">Question 4</label>
            <input type="text" class="form-control" id="4" name="Question4"></textarea>
        </div>
        <div class="form-group">
            <label for="5">Question 5</label>
            <input type="text" class="form-control" id="5" name="Question5"></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<div>


        </div>
    </div>
</div>
@endsection
