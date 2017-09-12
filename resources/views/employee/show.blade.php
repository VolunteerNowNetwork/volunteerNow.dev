@extends('layouts.master')

@section('title')
<title>Employee Dashboard</title>
@stop


@section('content')
<style>

h1 {
    margin-bottom: 40px;
    text-align: center;
}
.col-md-6  {
    margin-left: 70px;
    padding-right: 30px;

}
.btn {
    margin-bottom: 20px;
}


</style>
    <div class="container">
        <h1>Volunteer Dashboard</h1>
        <br>
        <a href="{{ action ('EmployeeController@show') }}">
        <div class="row">
            <div class="col-md-6 col-md-3">
                <div class="contact-section">
                    <h4 class="my-account">My Account</h4>
                    <br>
                    <ul class = "list-group">
                        <li class= "list-group-item list-group-item-info" style="font-weight: bold;">Name: {{$user->name}}</li>
                        <li class= "list-group-item"> Contact Number: {{$user->contact_number}}</li>
                        <li class= "list-group-item"> Email: {{$user->email}}</li>
                        <li class= "list-group-item"> Employer ID: {{$user->employer_id}}</li>
                        <li class= "list-group-item" style="color: #4a9bd9;">Bio: {{$user->bio}}</li>
                        <a class= "list-group-item btn btn-success"  value=" edit employee" href= "{{ action('EmployeeController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-md-3">
                <div class="event-section">
                    <h4> Hours Available: </h4> <div> {{ $user->available_hours }} </div>
                    <br>
                    <h4> Hours Completed: </h4> <div> {{ $user->completed_hours }}</div>
                    <br>
                    <h4 class="my-events"> Events </h4>
                    <br>
                    <a class="btn btn-primary" name="seeAll" href= "/allevents"> See All Events </a>
                    <br>
                    <a class= "btn btn-primary" href= "/masterCalendar">Search By Date</a>
                    <br>
                    <h4> Submit Feedback On a Nonprofit </h4>
                    <a href="/feedback/feedback" class="btn btn-success" name="feedback" > Submit Feedback </a>
                </div>
            </div>
            <br>
<!--             <div class="col-md-6 col-md-3">
                    <div class="participation-section">
                        <h4> Hours Available: </h4> <div> {{ $user->available_hours }} </div>
                        <br>
                        <h4> Hours Completed: </h4> <div> {{ $user->completed_hours }}</div>
                        <br>
                        <a href="feedback/feedback" class="btn btn-success" name="feedback" > Submit Feedback </a>
                        <br>
                        <a href="feedback/feedback"  class="btn btn-secondary" name="go-feedback" > View Feedback </a>
                    </div>
            </div>
            <br> -->
            <div class="col-md-6 col-md-3">
                    <div class="scheduled-events-section">
                        <h4> Your Events </h4>
                        @foreach($events as $event)
                        <h5 style="font-weight: bold;">Title: {{$event->title}}</h5>
                        <h5>Location: {{$event->location}}</h5>
                        <h5>Start Time: {{$event->start}}</h5>
                        <a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $event->event_id) }}">See Details</a>
                        </ul>
                        @endforeach
                        <br>
                        <h4> Participation Data </h4>
                        <img src="../img/pie-chart.png" alt="Image Placeholder" width=300px height=250px ></img>
                    </div>
            </div>
        </div>
    </div>


@stop
