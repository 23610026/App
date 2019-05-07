@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1  style="font-weight: bold; padding: 10px;"> Respondent Details </h1></div>



<form action="/respondents" method="post" style="padding: 10px 10px 0px 10px;">
        {{ csrf_field() }}
<div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" id="1" name="Name"></textarea>
</div>
<div class="form-group">
            <label for="Gender">Gender</label>
            <select class="form-control" name="Gender">
                <option>Male</option>
                <option>Female</option>
                <option>Prefer not to say</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Email">Email Address</label>
            <input type="text" class="form-control" id="1" name="EmailAddress"></input>
        </div>
<div class="form-group">
            <label for="Consent">Consent</label><br/>
            <p> Do you consent to your information being used for the purpose of research on Questionnaire Design? </p>
            <label class="radio-inline"><input type="radio" name="Consent" value="1"> Yes</label>
            <label class="radio-inline"><input type="radio" name="Conset" value="0"> No</label>
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
<button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Submit</button>

<div>


        </div>
    </div>
</div>
@endsection
