@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Employer</h1>
		@foreach($users as $user)
			<ul class = "list-group">
				<li class= "list-group-item">Id: {{$user->id}}</li>
				<li class= "list-group-item list-group-item-info" style="font-weight: bold;">Admin: {{$user->admin}}</li>
				<li class= "list-group-item">Username: {{$user->username}}</li>
			</ul>
		@endforeach
	</div>
@endsection