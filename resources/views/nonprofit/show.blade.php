<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">   
@extends('layouts.master')

@section('title')
<title>Nonprofit Dashboard</title>
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
<style>

body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
h1 {
    margin-bottom: 40px;
    text-align: center;
}
.twocolumns {
    border-radius: 25px;
    background-color:#10D0AB;
    color:white;
    border: 5px solid #D3D3D3;
}
.center {
    border-radius: 25px;
    background-color:white;
    border: 2px solid #10D0AB;
    color:#10D0AB;
}
.btn {
    margin-bottom: 20px;
}
.header{
    color:black;
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
.list-group{
    color:black;
    background-color: white;
    border-radius: 25px;
}
.list-group-item{
    color:black;
    background-color: white;
}
.topicon{
    float:left;
    display:block; 
    margin:0 auto;
}



</style>
    <div class="container">
        <div class="container topheader">
           <img class="topicon" src="/img/android-icon-72x72.png"/>
    	   <h1 class="text-center">Nonprofit Dashboard</h1>
        </div>
        <br>
        <a href="">
        <div class="row">
            <div class="col-md-4 twocolumns">
                <div class>
                    <br>
                    <img class="calendar" src="/img/small-calendar.png" height:"27" width="27">
                    <h4 class="header">My Events</h4>
                    <a class= "list-group-item btn btn-primary" href= "/posts/create"><span class="glyphicon glyphicon-pencil"></span>  Add A New Event</a>
                    <br>
                    <h4 class="header"> Your Events </h4>
                    <h5>Events You Have Created Below</h5>
                        @foreach($events as $event)
                        <h5 style="font-weight: bold;">Title: {{$event->title}}</h5>
                        <h5>Location: {{ $event->location }}</h5>
                        <h5>Start Time: {{ $event->start->setTimezone('America/Chicago')->format('l jS \\of F Y h:i A') }}</h5>
                        <a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@edit', $event->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit This Event</a>
                        </ul>
                        @endforeach
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-4 center">
                    <div class="signupByEvent">
                        <br>
                        <img class="calendar" src="/img/newspaper.png" height:"27" width="27" />
                        <h4 class="section-title header">Total Signup By Event</h4>
                        @if (!empty($nonprofitEvents))
                            @foreach($nonprofitEvents as $nonprofitEvent)
                                <br>
                                @if(!empty($attendanceArray))
                                <h4 class="header"> Signup Count: {{ $attendanceArray[$nonprofitEvent->id]}}</h4>
                                @else
                                <h4 class="header"> Signup Count: 0</h4>
                                @endif
                                <h5 style="font-weight: bold;">Title: {{$nonprofitEvent->title}}</h5>
                                <h5>Start Time: {{$nonprofitEvent->start->setTimezone('America/Chicago')->format('l jS \\of F Y h:i A')}}</h5>
                                </ul>
                            @endforeach
                        @else
                            <h4> No events have been added.</h4>
                        @endif
                        <br>
                    </div>
            </div>
            <div class="col-md-4 twocolumns">
                    <div class="attendance">
                     <br>
                    <img class="calendar" src="/img/setting-tool.png" height:"27" width="27" />   
                    <h4 class="section-title header">My Account</h4>
                    <br>
                    <div>
                        <img src="{{$user->image}}">
                    </div>
                    <ul class = "list-group">
                        <li class= "list-group-item" style="font-weight: bold; background-color:#D3D3D3">Name: {{$user->organization_name}}</li>
                        <li class= "list-group-item">Admin Name: {{$user->admin}}</li>
                        <li class= "list-group-item">Username: {{$user->username}}</li>
                        <li class= "list-group-item">Bio: {{$user->bio}}</li>
                        <a class= "list-group-item" href= "{{ action('NonprofitController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                    </ul>
                    <br>
                        <img class="calendar" src="/img/paper-plane.png" height:"27" width="27" />
                        <h4 class="section-title header"> Validate Attendance </h4>
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
            <br>
            <br>
            <br>

    </div>
@stop


                       