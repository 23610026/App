@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1 style="font-weight: bold; padding: 10px;"> New Questionnaire </h1> </div>  <!-- Styling applied to H1 to format it into a suitable heading -->




<p style="padding: 10px 10px 0px 10px;"> Please enter the name you wish to assign to your Questionnaire. </p> <!-- Styling applied to create space between the text and surrounding elements -->

<form action="/questionnaires" method="post" style="padding: 10px;"> <!-- Styling helps create space between the form and surrounding elements -->
        {{ csrf_field() }}
        <div class="form-group"><!-- Div that holds forum fields -->
            <label for="title">Questionnaire Name</label> <!-- Label to indicate what forum is collecting -->
            <input type="text" class="form-control" id="QuestionnaireName"  name="Title"> <!-- Forum input type is set to text nd the 'name' calls on 'Title' field from database. -->
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
        <button type="submit" class="btn btn-primary">Submit</button> <!-- submit button that is set up to redirect user and submit forum once clicked -->
    </form>

<div>


        </div>
    </div>
</div>
@endsection
