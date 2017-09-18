@extends('layouts.master')

@section('title')
<title>Submit Feedback</title>
@stop


@section('content')
<style>
body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
.btn{
    background-color: #10D0AB;
    color: white;
}
.container{
	background-color:white;
	margin-top:40px;
	border: 3px solid #10D0AB;
	border-radius: 25px;
	height:680px;
	width:650px;
}
h3{
    font-size: 20px;
    font-style: italic;
    margin-top: 20px;
}

</style>
    <div class="container">
        <form method="POST" action="{{ action('FeedbackController@store') }}">
            {!! csrf_field() !!}
            <div class="row">
            <h1 class="section-title text-center"> Submit Feedback on a Nonprofit  </h1>
            <h3 class="section-title text-center"> We want to hear about your experience! </h3>
            <br>
            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Your Name: <input type="text" class="form-control" id="name" name="name" placeholder="" data-required>
            </div>
            <div class="form-group">
                Point of Contact Name: <input type="text" class="form-control" id="employee_name" name="employee_name" placeholder="" data-required>
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
                <textarea name="comments" rows="3" cols="50"></textarea>
            </div>
            <button class="btn btn-success"> Submit </button>
        </form>
    </div>
@stop
