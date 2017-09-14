@extends('layouts.master')

@section('title')
<title>Submit Feedback</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="{{ action('FeedbackController@store') }}">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Submit Feedback on a Nonprofit Below!</h1>
            <h3 class="section-title text-center">We want to hear about your experience!</h3>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Your Name: <input type="text" class="form-control" id="name" name="name" placeholder="" data-required>
            </div>
            <div class="form-group">
                Volunteer's Name: <input type="text" class="form-control" id="employee_name" name="employee_name" placeholder="Not Needed" data-required>
            </div>
            <div class="form-group">
                Nonprofit Name <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="">
            </div>
            <div class="form-group">
                Event Name: <input type="text" class="form-control" id="title" name="title" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event Date: <input type="text" class="form-control" id="event_date" name="event_date" placeholder="YYYY-MM-DD" data-required>
            </div>
            <div class="form-group">
                Comments: 
                <br>
                <textarea name="comments" rows="3" cols="77"></textarea>
            </div>
            <button>Submit</button>
        </form>
    </div>
@stop

