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
</style>

	<div class="container">
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 style="font-weight: bold; color: #ff0000"> Event: {{$post->title}}</h1>
			<ul class = "list-group">
				<li class= "list-group-item">Event Id: {{$post->id}}</li>
				<li class= "list-group-item">Nonprofit Name: {{$post->organization_name}}</li>
				<li class= "list-group-item">Location: {{$post->location}}</li>
				<li class= "list-group-item">Start Time: {{$post->start}}</li>
				<li class= "list-group-item">End Time: {{$post->end}}</li>
				<li class= "list-group-item">Number of Volunteers Needed: {{$post->number_of_volunteers}}</li>
				<li class= "list-group-item">Point of Contact: {{$post->point_of_contact}}</li>
				<li class= "list-group-item">Supplies Needed: {{$post->supplies_needed}}</li>
				<li class= "list-group-item">Appropriate Attire: {{$post->appropriate_attire}}</li>
				<li class= "list-group-item">Age Restrictions: {{$post->age_restriction}}</li>
				<li class= "list-group-item">Category: {{$post->categories}}</li>
				<br>
				<a class= "btn center-block" href= "{{ action('AttendanceController@show', $post->id) }}">Signup For This Event</a>
				<br>
				<a class= "btn center-block" href= "/allevents">Go Back to All Events</a>
			</ul>
	</div>
</div>
</div>
@endsection
