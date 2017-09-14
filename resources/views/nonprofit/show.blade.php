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
    margin-right: 10px;
    margin-left: 60px;

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
                        <a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@edit', $event->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit This Event</a>
<!--                         <a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $event->event_id) }}">See Details</a> -->
                        </ul>
                        @endforeach
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="signupByEvent">
                        <h4 class="section-title">Total Signup By Event</h4>
                        @if (!empty($nonprofitEvents))
                            @foreach($nonprofitEvents as $nonprofitEvent)
                                <br>
                                @if(!empty($attendanceArray))
                                <h4> Signup Count: {{ $attendanceArray[$nonprofitEvent->id]}}</h4>
                                @else
                                <h4> Signup Count: 0</h4>
                                @endif
                                <h5 style="font-weight: bold;">Title: {{$nonprofitEvent->title}}</h5>
                                <h5>Start Time: {{$nonprofitEvent->start}}</h5>
                                </ul>
                            @endforeach
                        @else
                            <h4> No events have been added.</h4>
                        @endif
                        <br>
                        <h4> Feedback </h4>
                        <br>
                        <a class= "list-group-item btn btn-primary" href="{{ action('FeedbackController@show') }}"><span class="glyphicon glyphicon-envelope"></span>    Submit Feedback</a>
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="attendance">
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
                        <h4 class="section-title"> Validate Attendance </h4>
                        @foreach($attendees as $attendee)
                        <h5 style="font-weight: bold;">Name: {{$attendee->name}}</h5>
                        <h5>Event Id: {{$attendee->event_id}}</h5>
                        <h5>Title: {{$attendee->title}}</h5>
                        <a class= "list-group-item btn btn-primary" href= "{{ action('AttendanceController@edit', $attendee->id) }}"><span class="glyphicon glyphicon-pencil"></span> Validate</a>
                        @endforeach
                        <br>
                        <br>
                    </div>
            </div>
        </div>

    </div>
@stop


                       