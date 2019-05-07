@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1 style="font-weight: bold; padding: 10px;"> New Questionnaire </h1> </div>




<p style="padding: 10px 10px 0px 10px;"> Please enter the name you wish to assign to your Questionnaire. </p>

<form action="/questionnaires" method="post" style="padding: 10px;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Questionnaire Name</label>
            <input type="text" class="form-control" id="QuestionnaireName"  name="Title">
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
