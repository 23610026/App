@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button onclick="location.href='/questionnaire/create';" id="Create">Create New Questionnaire</button>
                    <button onclick="location.href='/questionnaire/show';" id="Show">View all Questionnaires</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
