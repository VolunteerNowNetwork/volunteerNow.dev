@extends('layouts.master')

@section('title')
<title>Sign Up For An Event</title>
@stop


@section('content')
				<div class="container">
								<h1>  EVENT SIGN UP</h1>
								<br>
								<a href="{{ action('EmployeeController@show') }}">
												<div class="row">
																<div class="col-md-6 col-md-offset-3">

																			<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
																								{!! csrf_field() !!}
																									{!! $errors->first('name', '<div class="alert alert-danger">:message</div>') !!}
	                  <div class="form-group">
																												Select An Event Below:
																														@foreach($posts as $post)
																																<ul class = "list-group">
																																		<li class= "list-group-item">{{$post->title}}</li>
																																</ul>
																															@endforeach
																			</div>


																							<!-- 	<div class="form-group">
																												<input type="text" class="form-control" id="event_id" name="event_id" placeholder="Event Id"
																												data-required>
																								</div>
																								<div class="form-group">
																												<input type="text" class="form-control" id="nonprofit_id" name="nonprofit_id" placeholder="nonProfitID"
																												data-required>
																								</div>
																							<div class="form-group">
																											<input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id"
																											data-required>
																							</div>
																							<div class="form-group">
																											<input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="employee id"
																											data-required>
																							</div> -->

											</div>
				</div>
