<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">  
@extends('layouts.master')

@section('title')
<title>Employer Profile</title>
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
.col-md-6  {
    margin-left: 50px;

}
.btn {
    margin-bottom: 20px;
    display:block; 
    margin:0 auto;
    color:black;
    background-color:white; 
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
.topicon{
    float:left;
    display:block; 
    margin:0 auto;
}
.dashboard{
    color:#ff0000;
}
.twocolumns {
    border-radius: 25px;
    background-color:#ff0000;
    color:white;
    border: 5px solid #D3D3D3;
}
.center {
    border-radius: 25px;
    background-color:white;
    border: 2px solid #ff0000;
    color:#ff0000;
}
.header{
    color:white;
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
.validate{
    color:white;
}

</style>

    <div class="container">
        <div class="container topheader">
           <img class="topicon" src="/img/android-icon-72x72.png"/>
           <h1 class="text-center dashboard">Employer Dashboard</h1>
        </div>
        <a href="{{ action('EmployerController@show') }}">
        <input type="hidden" name="user_group" value="employer">
        <br>
        <br>
        <div class="row">
            <div class="col-md-4 twocolumns">
                <div class="account-section">
                    <br>
                    <img class="calendar" src="/img/setting-tool.png" height:"27" width="27" />  
                    <h4 class="header">My Account</h4>
                       <div>
                        <img src="{{$user->image}}">
                       </div>
                    <ul class = "list-group">
                       <li class= "list-group-item list-group-item-info" style="font-weight: bold; background-color: #D3D3D3">Company Name: {{$user->organization_name}}</li>
                       <li class= "list-group-item">Employer ID: {{$user->employer_id}}</li>
                       <li class= "list-group-item">Admin Name: {{$user->admin}}</li>
                       <li class= "list-group-item">Username: {{$user->username}}</li>
                       <li class= "list-group-item">Email: {{$user->email}}</li>
                       <li class= "list-group-item">Tax ID: {{$user->tax_id}}</li>
                       <li class= "list-group-item">Bio: {{$user->bio}}</li>
                       <li class= "list-group-item">Resources: {{$user->additional_resources}}</li>
                       <a class= "list-group-item btn btn-primary" href= "{{ action('EmployerController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                   </ul>
                </div>
            </div>
            <div class="col-md-4 center">
                    <div class="participation-section">
                        <br>
                        <img class="calendar" src="/img/red-newspaper.png" height:"27" width="27" />
                        <h4> Employee Signups </h4>
                        <br>
                         @foreach($signedUpemployees as $employee)
                        <h5 style="font-weight: bold; color:black">Name: {{$employee->name}}</h5>
                        <h5 style="color:black">Title: {{$employee->title}}</h5>
                        <br>
                        @endforeach
                        <br>
                        <h4> See Nonprofit Feedback </h4>
                        <br>
                        @foreach($feedback as $employee)
                        <h5 style="font-weight: bold;">Name: {{$employee->name}}</h5>
                        <h5 style="color:black">Nonprofit Name: {{$employee->organization_name}}</h5>
                        <h5 style="color:black">Title {{$employee->title}}</h5>
                        <h5 style="color:black">Date: {{$employee->event_date}}</h5>
                        <h5 style="color:black">Comments: {{$employee->comments}}</h5>
                        <br>
                        @endforeach
                    </div>
            </div>
            <div class="col-md-4 twocolumns">
                    <div class="scheduled-events-section">
                        <br>
                        <img class="calendar" src="/img/paper-plane.png" height:"27" width="27" />
                        <h4 class="validate"> Validated Attendance </h4>
                         @foreach($attendees as $attendee)
                        <h5 style="font-weight: bold; color:black">Name: {{$attendee->name}}</h5>
                        <h5 style="color:black">Title: {{$attendee->title}}</h5>
                        <h5 style="color:black">Did they attend? {{$attendee->did_they_attend}}</h5>
                        <h5 style="color:black">Hours completed: {{$attendee->hours_completed}}</h5>
                        <h5 style="color:black">Comments: {{$attendee->comments}}</h5>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
@stop

