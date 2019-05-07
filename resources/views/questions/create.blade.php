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
          <p>To what extent do you agree with the following statements:</p>
            <label for="question_1">
            1) Questionnires with close-ended questions are more likely to be completed, than questionnaires made up of open-ended questions.</label>
            <select class="form-control" name="Question1">
                <option>Stongly Agree</option>
                <option>Agree</option>
                <option>Neither</option>
                <option>Disagree</option>
                <option>Strongly Disagree</option>
            </select>
        </div>
        <div class="form-group">
            <label for="question_1"> 2) If the wording of a question is unclear, you would make a guess anyways.</label>
            <select class="form-control" name="Question2">
              <option>Stongly Agree</option>
              <option>Agree</option>
              <option>Neither</option>
              <option>Disagree</option>
              <option>Strongly Disagree</option>
            </select>
        </div>
        <div class="form-group">
            <label for="question_1"> 3) The type of method used to distribute the questionnaire determines whether or not you will complete it, i.e on a webpage pop-up, email, etc.</label>
            <select class="form-control" name="Question3">
              <option>Stongly Agree</option>
              <option>Agree</option>
              <option>Neither</option>
              <option>Disagree</option>
              <option>Strongly Disagree</option>
            </select>
        </div>
        <div class="form-group">
            <label for="question_1"> 4) </label>
            <select class="form-control" name="Question4">
              <option>Stongly Agree</option>
              <option>Agree</option>
              <option>Neither</option>
              <option>Disagree</option>
              <option>Strongly Disagree</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Question 5</label>
            <textarea type="text" class="form-control" id="productDescription" name="Question5"></textarea>
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
