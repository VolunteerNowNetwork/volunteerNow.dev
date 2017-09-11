@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h1>All Events</h1>
		@foreach($posts as $post)
			<ul class = "list-group">
				<li class= "list-group-item">Event Id: {{$post->id}}</li>
				<li class= "list-group-item list-group-item-info" style="font-weight: bold;">Title: {{$post->title}}</li>
				<li class= "list-group-item">Organization Name: {{$post->organization_name}}</li>
				<li class= "list-group-item">Location: {{$post->location}}</li>
				<li class= "list-group-item">Start: {{$post->start}}</li>
				<li class= "list-group-item">End: {{$post->end}}</li>
				<li class= "list-group-item">Age Restrictions: {{$post->age_restriction}}</li>
				<a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $post->id) }}">See Details</a>
			</ul>
		@endforeach
	</div>
</div>
</div>
@endsection