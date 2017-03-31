@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="top-right links">
                  
                        <a href="{{ url('/addTask') }}">Add Task</a>
                        <a href="{{ url('/getTasks') }}">Get All Tasks</a>
                        
                  
                </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
