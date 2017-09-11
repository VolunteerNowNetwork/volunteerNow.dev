@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 style="font-weight: bold;"> Event: {{$post->title}}</h1>
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
				@if (count($events) >0 || $events='')
				<a class= "btn btn-primary center-block" href= "{{ action('AttendanceController@show', $post->id) }}">Signup For This Event</a>
				@else
				@endif
				<br>
				<a class= "btn btn-primary center-block" href= "/allevents">Go Back to All Events</a>
			</ul>
	</div>
</div>
</div>
@endsection
