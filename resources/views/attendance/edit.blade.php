@extends('layouts.master')

@section('title')
<title>Validate Attendance</title>
@stop

@section('content')
    <div class="container">
        <form method="POST" action="{{ action('AttendanceController@update', $attendance->id) }}">
            {!! csrf_field() !!}
            <div class="row">
            <input type="hidden" name="user_group" value="nonprofit">
            <h1 class="section-title text-center">Validate This Employee</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Did They Attend?: <input type="text" class="form-control" id="did_they_attend" name="did_they_attend" placeholder="Yes or No" data-required>
            </div>
            <div class="form-group">
                How many hours did they complete? <input type="text" class="form-control" id="hours_completed" name="hours_completed" placeholder="" data-required>
            </div>
            <div class="form-group">
                Please provide any feedback or input about this employee's performance here: <input type="text" class="form-control" id="comments" name="comments" placeholder="" data-required>
            </div>
            {{ method_field('PUT') }}
            <button type="submit" class="btn btn-primary">Submit Validate</button>
        </form>
    </div>
@stop