@extends('layouts.master')

@section('content')
	<div class="container">
	    <form method="POST" action="{{ action('AttendanceController@store') }}">
        {!! csrf_field() !!}
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<input type="hidden" id="title" name="title" value="{{$post->title}}">
				<h1> Signup for This Event:</h1>
				<h4> {{$post->title}}</h4>
				<h4>Event Id: {{$post->id}}</h4>
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
@endsection

