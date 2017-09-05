@extends('layouts.master')

@section('title')
<title>This is your company's profile page</title>
@stop

@section('content')
<div class="container">
    <h1>Company Dashboard</h1>

   
        <ul class = 'list-group'>

            <li class = 'list-group-item'>Employee Participation by Event: {{$dashboard->participationByEvent}}</li>
                <a href="{{ action('EmployerController@edit', $dashboard->id) }}">
                    <span class="glyphicon glyphicon-pencil"></span>Dashboard
                </a>

            <!-- <li class = 'list-group-item' style = 'font-weight:bold;'> Email: {{$user->email}}</li>
            <li class = 'list-group-item'>Id: {{$user->id}}</li>
            <li class = 'list-group-item'>Content: {{$post->content}}</li>

            <li class = 'list-group-item' style = 'color: ff47d4;'>Created At: {{$user->created_at}}</li>
            <li class = 'list-group-item'>Updated AT: {{$user->updated_at}}</li>
         </ul>
   
 -->
</div>
@endsection