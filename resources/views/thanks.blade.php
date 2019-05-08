@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1 style="font-weight: bold; padding: 10px;"> New Questionnaire </h1> </div>



<!-- Simple design to help respondent acknowledge they have completed a questionnaire -->
<p style="padding: 10px 10px 0px 10px;"> Thank you for taking part in the questionnaire. </p>

<button onclick="location.href='/home';" id="Home">Done</button>

<div>


        </div>
    </div>
</div>
@endsection
