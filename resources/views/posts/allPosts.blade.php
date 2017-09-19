<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> 
@extends('layouts.master')

@section('content')
<style>
body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
</style>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
        	<h2>Search Here By Nonprofit Name, Category or Title</h2>
       	    	<form class="navbar-form navbar-left" action="{{ action('PostsController@all') }}" role="search">
            	<div class="form-group">
                <input type="q" class="form-control" name="q" id="q" placeholder="Search Events">
            	</div>
            	<button type="submit" class="btn btn-default">
                <i class="glyphicon glyphicon-search"></i>
            	</button>
        		</form>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h1>All Events</h1>
		@foreach($posts as $post)
			<ul class = "list-group">
				<li class= "list-group-item" style="font-weight: bold; background-color:#ff0000; color:white">Title: {{$post->title}}</li>
				<li class= "list-group-item">Organization Name: {{$post->organization_name}}</li>
				<li class= "list-group-item">Location: {{$post->location}}</li>
				<li class= "list-group-item">Start: {{$post->start->setTimezone('America/Chicago')->format('l jS \\of F Y h:i A') }}</li>
				<li class= "list-group-item">End: {{$post->end->setTimezone('America/Chicago')->format('l jS \\of F Y h:i A') }}</li>
				<li class= "list-group-item">Age Restrictions: {{$post->age_restriction}}</li>
				<a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $post->id) }}">See Details</a>
			</ul>
		@endforeach
	</div>
</div>
</div>
</body>
@endsection