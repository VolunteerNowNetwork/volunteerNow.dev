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

h1 {
    margin-bottom: 40px;
    text-align: center;
}
h6 {
    margin-bottom: 14px;
    font-weight: normal;
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
            <input type="hidden" name="user_group" value="employee">
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
                        <li class= "list-group-item"> Employer Name: {{ $user->organization_name }}</li>
                        <li class= "list-group-item" style="color: #4a9bd9;">Bio: {{$user->bio}}</li>
                    </ul>
                    <br>
                        <a class= "list-group-item btn btn-success"  value=" edit employee" href= "{{ action('EmployeeController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                        <div>
                            <img src="{{$user->image}}">
                        </div>

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
                        <h6>Location: {{$event->location}}</h6>
                        <h6>Start Time: {{$event->start}}</h6>
                        <a class= "list-group-item btn btn-primary" href= "{{ action('PostsController@show', $event->event_id) }}">See Details</a>
                        @endforeach
                        <br>
                    </div>
            </div>
        </div>
    </div>


@stop
