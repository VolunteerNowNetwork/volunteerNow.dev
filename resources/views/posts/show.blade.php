@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>All Events</h1>
		@foreach($posts as $post)
			<ul class = "list-group">
				<li class= "list-group-item list-group-item-info" style="font-weight: bold;">Title: {{$post->title}}</li>
				<li class= "list-group-item">Organization Name: {{$post->organization_name}}</li>
				<li class= "list-group-item">Start: {{$post->start}}</li>
				<li class= "list-group-item">End: {{$post->end}}</li>
			</ul>
		@endforeach
	</div>
@endsection