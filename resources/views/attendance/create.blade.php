@extends('layouts.master')

@section('title')
<title>Sign Up For An Event</title>
@stop


@section('content')
	<div class="container">
		<form method="POST" action="{{ action('AttendanceController@store') }}">
{!! csrf_field() !!}
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
	            <input type="hidden" name="user_group" value="employee">
				<h1>Event Sign Up</h1>
				<br>
					<div class="form-group">
					Select An Event Below:
					<br>
					</div>

					<div class="form-group">
					<select style="width: 150px;">
					<option>Choose one</option>
					<?php
					foreach($posts as $post) { ?>
					<option name="title" value="<?php echo $post['title'] ?>"><?php echo $post['title'] ?></option>
					<?php
					} ?>
					</select>
					</div>

					<div class="form-group">
	                	How Many People are Attending? 
	                	<br>
	                	<select style="width: 150px;">
							<option>Choose one</option>
							<option name="num_of_people" value="1">1</option>
							<option name="num_of_people" value="2">2</option>
							<option name="num_of_people" value="3">3</option>
							<option name="num_of_people" value="4">4</option>
						</select>
					</div>
					<div class="form-group">
	                	How many hours do you need to complete?
	                	<br>
	                	<select style="width: 150px;">
							<option>Choose one</option>
							<option name="hrs_to_complete" value="1">1</option>
							<option name="hrs_to_complete" value="2">2</option>
							<option name="hrs_to_complete" value="3">3</option>
							<option name="hrs_to_complete" value="4">4</option>
							<option name="hrs_to_complete" value="5">5</option>
							<option name="hrs_to_complete" value="6">6</option>
						</select>
					</div>
            		<button type="submit" class="btn btn-primary">Signup</button>
					<h6>By clicking 'Signup' you are agreeing to show up at the time/date of this event. Should you not be able to attend, please call the Nonprofit contact and let them know you will not be able to make it.</h6>
            		<h6>After signing up this event will appear on your dashboard!</h6>
				</div>
			</div>
		</form>
	</div>
@stop

