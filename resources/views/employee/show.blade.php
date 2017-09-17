<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">   
@extends('layouts.master')

@section('title')
<title>Employee Dashboard</title>
<script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>

<script>
    var client = filestack.init('AWfpMt9vqSzalYlBfIu2tz');
    function showPicker() {
        client.pick({
            maxFiles: 1,
            imageMax: [300,300],
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded));
            var handle = result.filesUploaded[0].handle;
            console.log(handle);
            $("#filestack").attr('src', 'https://process.filestackapi.com/' + handle);
            $("#editIcon").attr('src', "https://process.filestackapi.com/resize=w:300,h:300/circle/" + handle);
            $("input[id=image]").val(handle);
        });
    }
</script>
@stop


@section('content')
<!DOCTYPE html>
<html>
  
<style>

body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}

.btn {
    margin-bottom: 20px;
}
.topicon{
    float:left;
    display:block; 
    margin:0 auto;
}
.topheader{
    margin-top:13px;
    height:80px;
    width:100%;
    background-color:white;
    border-radius: 25px;
    padding:0px;
    border: 2px solid black;
}
.twocolumns {
    border-radius: 25px;
    background-color:orange;
    color:white;
    border: 5px solid #D3D3D3;
}
.center {
    border-radius: 25px;
    background-color:white;
    border: 2px solid orange;
    color:orange;
}
.list-group{
    color:black;
    background-color: white;
    border-radius: 25px;
}
.list-group-item{
    color:black;
    background-color: white;
}
.header{
    color:black;
}
.button{
    width:150px; 
    margin:0 auto;
    color:black;
    background-color:orange; 
}
.dashboard{
    color:orange;
}
</style>

    <div class="container">
        <div class="container topheader">
           <img class="topicon" src="/img/android-icon-72x72.png"/>
           <h1 class="text-center dashboard">Volunteer Dashboard</h1>
        </div>
        <br>
        <br>
        <a href="{{ action ('EmployeeController@show') }}">
            <input type="hidden" name="user_group" value="employee">
        <div class="row">
            <div class="col-md-4 twocolumns">
                <div>
                    <br>
                    <img class="calendar" src="/img/setting-tool.png" height:"27" width="27" />  
                    <h4 class="header">My Account</h4>
                <div>
                    <img src="{{$user->image}}">
                </div>
                    <br>
                    <ul class = "list-group">
                        <li class= "list-group-item" style="font-weight: bold; background-color:#D3D3D3">Name: {{$user->name}}</li>
                        <li class= "list-group-item"> Contact Number: {{$user->contact_number}}</li>
                        <li class= "list-group-item"> Email: {{$user->email}}</li>
                        <li class= "list-group-item"> Employer ID: {{$user->employer_id}}</li>
                        <li class= "list-group-item"> Employer Name: {{ $user->organization_name }}</li>
                        <li class= "list-group-item">Bio: {{$user->bio}}</li>
                    </ul>
                    <br>
                        <a class= "list-group-item btn btn-success"  value=" edit employee" href= "{{ action('EmployeeController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                        <br>
                        <br>
                </div>
            </div>
            <div class="col-md-4 center">
                <div class="event-section">
                    <h4 class="header"> Hours Available: </h4> <div> {{ $user->available_hours }} </div>
                    <br>
                    <h4 class="header"> Hours Completed: </h4> <div> {{ $user->completed_hours }}</div>
                    <br>
                    <img class="calendar" src="/img/orange-calendar.png" height:"27" width="27" />  
                    <h4 class="header"> Events </h4>
                    <br>
                    <a class="btn text-center button" name="seeAll" href= "/allevents"> See All Events </a>
                    <br>
                    <br>
                    <a class= "btn text-center button" href= "/masterCalendar">Search By Date</a>
                    <br>
                    <h4 class="header"> Submit Feedback On a Nonprofit </h4>
                    <a href="/feedback/feedback" class="btn text-cetner button" name="feedback" > Submit Feedback </a>
                    <br>
                    <br>
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
            <div class="col-md-4 twocolumns">
                <div class="attendance">
                    <br>
                    <img class="calendar" src="/img/locationgps.png" height:"27" width="27" />  
                    <h4 class="header"> Your Events </h4>
                    @foreach($events as $event)
                    <h5 style="font-weight: bold;">Title: {{$event->title}}</h5>
                    <h6>Location: {{$event->location}}</h6>
                    <h6>Start Time: {{$event->start}}</h6>
                    <a class= "list-group-item btn text-center" href= "{{ action('PostsController@show', $event->event_id) }}">See Details</a>
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
    </div>


@stop
