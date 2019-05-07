@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1  style="font-weight: bold; padding: 10px;"> Responses </h1></div>

<form action="/responses" method="post" style= "padding: 10px 10px 10px 10px">
        {{ csrf_field() }}
        <div class="form-group">
          <p>To what extent do you agree with the following statements:</p>
            <label for="question_1">
            1) Questionnaires with close-ended questions are more likely to be completed, than questionnaires made up of open-ended questions.</label>
            <select class="form-control" name="Question1">
                <option>Stongly Agree</option>
                <option>Agree</option>
                <option>Neither</option>
                <option>Disagree</option>
                <option>Strongly Disagree</option>
            </select>
        </div>
        <div class="form-group">
            <label for="question_1"> 2) If the wording of a question was unclear, you would still make an attempt at answering the question.</label>
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
            <label for="question_1"> 4) You would be more likely to complete a survery containing 5 questions, opposed to a questionnaire containing 15 questions. </label>
            <select class="form-control" name="Question4">
              <option>Stongly Agree</option>
              <option>Agree</option>
              <option>Neither</option>
              <option>Disagree</option>
              <option>Strongly Disagree</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title"> 5) List 3 ways in which the interface of this questionnaire system could be improved to boost its response rate. </label>
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
