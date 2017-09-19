<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> 
@extends('layouts.master')

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
	height:560px;
	width:600px;
}

</style>
	<div class="container">
	    <form method="POST" action="{{ action('AttendanceController@store') }}">
        {!! csrf_field() !!}
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<input type="hidden" id="title" name="title" value="{{$post->title}}">
				<h1> Signup for This Event:</h1>
				<h4> {{$post->title}}</h4>
				<div class="form-group">
				<input type="hidden" id="event_id" name="event_id" value="{{$post->id}}">
	                How Many People are Attending? 
	                <br>
	                <select name="num_of_people" style="width: 150px;">
						<option>Choose one</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					</div>
					<input type="hidden" id="location" name="location" value="{{$post->location}}">
					<div class="form-group">
				<input type="hidden" id="location" name="organization_name" value="{{$post->organization_name}}">
	                	How many hours do you need to complete?
	                	<br>
	                	<select name="hrs_to_complete" style="width: 150px;">
							<option>Choose one</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					<input type="hidden" id="start" name="start" value="{{$post->start}}">
            		<button type="submit" class="btn btn-primary">Signup</button>
					<h6>By clicking 'Signup' you are agreeing to show up at the time/date of this event. Should you not be able to attend, please call the Nonprofit contact and let them know you will not be able to make it.</h6>
            		<h6>After signing up this event will appear on your dashboard!</h6>
			</div>
		</div>
		</form>
	</div>
	<br>
	<br>
@endsection

