@extends('layouts.master')

@section('title')
<title>Sign Up For An Event</title>
@stop

@section('content')
	<div class="container">
		<h1>  EVENT SIGN UP</h1>
		<br>
		<a href="{{ action('EmployeeController@show') }}"></a>
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
						</div>
				</div>
	</div>
