@extends('layouts.master')
@section('title')


<title>Nonprofit Dashboard</title>
@stop


@section('content')
<style>

h1 {
    margin-bottom: 40px;
    text-align: center;
}
.col-md-6  {
    margin-right: 80px;

}
.btn {
    margin-bottom: 20px;
}



</style>
    <div class="container">
    	<h1 class="section-title text-center">Nonprofit Dashboard</h1>
        <br>
        <a href="">
        <div class="row">
            <div class="col-md-6 col-md-3">
                <div class="event-section">
                	<h4 class="section-title">My Events</h4>
                    <a class= "list-group-item btn btn-primary" href= "/posts/create"><span class="glyphicon glyphicon-pencil"></span>  Add A New Event</a>
                    <br>
                    <h4> Your Events </h4>
                    <h5>Events You Have Created Below</h5>
                        @foreach($events as $event)
                        <h5 style="font-weight: bold;">Title: {{$event->title}}</h5>
                        <h5>Location: {{$event->location}}</h5>
                        <h5>Start Time: {{$event->start}}</h5>
                        <a class= "list-group-item btn btn-primary" href= ""><span class="glyphicon glyphicon-pencil"></span>  Edit This Event</a>
<!--                         <a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $event->event_id) }}">See Details</a> -->
                        </ul>
                        @endforeach
                    <br>
                    <br>
                    <br>
                    <h4 class="section-title">My Account</h4>
                    <br>
                    <ul class = "list-group">
                        <li class= "list-group-item list-group-item-info" style="font-weight: bold;">Name: {{$user->organization_name}}</li>
                        <li class= "list-group-item">Admin Name: {{$user->admin}}</li>
                        <li class= "list-group-item">Username: {{$user->username}}</li>
                        <li class= "list-group-item" style="color: #4a9bd9;">Bio: {{$user->bio}}</li>
                        <a class= "list-group-item btn btn-primary" href= "{{ action('NonprofitController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                    </ul>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="signupByEvent">
                    	<h4 class="section-title">Signup By Event</h4>
                        <h4> Event 1 </h4> <div> [Event 1 Placeholder] </div>
                        <br>
                        <h4> Event 2 </h4> <div> [Event 2 Placeholder]  </div>
                        <br>
                        <h4 class="section-title ">Signup By Date</h1>
                        <div class="calendar"> Calendar Placeholder </div>
                    	<br>
                        <a class= "list-group-item btn btn-primary" href="/allevents">Signup For An Event</a>
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="attendance">
                        <h4 class="section-title"> Validate Attendance </h4>
                        <br>
                        <div> Attendance List Placeholder </div>
                        <br>
                        <button class="btn btn-success" name="validate"> Validate</button>
                        <br>
                        <button class="btn btn-success" name="print"> Print</button>
                        <h4> Feedback </h4>
                        <br>
                        <a class= "list-group-item btn btn-primary" href="{{ action('FeedbackController@show') }}"><span class="glyphicon glyphicon-envelope"></span>    Submit Feedback</a>
                    </div>
            </div>
        </div>

    </div>
       


@stop


                       