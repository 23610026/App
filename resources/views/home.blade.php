@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1  style="font-weight: bold; padding: 10px;"> Questionnaire System </h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button onclick="location.href='/questionnaires/create';" id="Create">Create New Questionnaire</button>
                    <button onclick="location.href='/questionnaires';" id="Show">View all Questionnaires</button>
                    <button onclick="location.href='/respondents/create';" id="Complete">Complete Questionnaire</button>
                    <button onclick="location.href='/respondents';" id="View">View Respondents</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
