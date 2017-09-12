@extends('layouts.master')

@section('content')
	<div class="container">
		<h1> Employee Volunteer </h1>
		@foreach($users as $user)
			<ul class = "list-group">
				<li class= "list-group-item">Id: {{$user->id}}</li>
                <li class= "list-group-item"> Contact Number: {{$user->contact_number}}</li>
                <li class= "list-group-item"> Email: {{$user->email}}</li>
                <li class= "list-group-item"> Employer ID: {{$user->employer_id}}</li>
                <li class- = "list-group-item"> Employer ID: {{ $user->organization }}</li>
                <li class= "list-group-item" style="color: #4a9bd9;">Bio: {{$user->bio}}</li>
			</ul>
		@endforeach
	</div>
@endsection
