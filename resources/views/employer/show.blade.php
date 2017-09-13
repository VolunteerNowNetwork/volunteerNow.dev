@extends('layouts.master')

@section('title')
<title>Employer Profile</title>
@stop

@section('content')
<style>

h1 {
    margin-bottom: 40px;
    text-align: center;
}
.col-md-6  {
    margin-right: 50px;

}
.btn {
    margin-bottom: 20px;
}

</style>

    <div class="container">
        <h1>  EMPLOYER DASHBOARD  </h1>
        <br>
        <a href="{{ action('EmployerController@show') }}">
        <input type="hidden" name="user_group" value="employer">
        <div class="row">
            <div class="col-md-6 col-md-3">
                <div class="account-section">
                    <ul class = "list-group">
                       <li class= "list-group-item list-group-item-info" style="font-weight: bold;">Company Name: {{$user->organization_name}}</li>
                       <li class= "list-group-item">Employer ID: {{$user->employer_id}}</li>
                       <li class= "list-group-item">Admin Name: {{$user->admin}}</li>
                       <li class= "list-group-item">Username: {{$user->username}}</li>
                       <li class= "list-group-item">Email: {{$user->email}}</li>
                       <li class= "list-group-item">Tax ID: {{$user->tax_id}}</li>
                       <li class= "list-group-item" style="color: #4a9bd9;">Bio: {{$user->bio}}</li>
                       <li class= "list-group-item">Resources: {{$user->additional_resources}}</li>

                       <br>
                       <a class= "list-group-item btn btn-primary" href= "{{ action('EmployerController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                   </ul>
                </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="participation-section">
                        <h4> Total Employee Signups: </h4> <div> [Total Employee Signups Placeholder] </div>
                        <br>
                        <h4> Total Employee Completion: </h4> <div> [Total Employee Completion Placeholder]  </div>
                        <br>
                        <h4> See Nonprofit Feedback </h4>
                        <br>
                        <h4> See Employee Feedback </h4>
                        <br>
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="scheduled-events-section">
                        <h4> Validated Attendance </h4>
                         @foreach($attendees as $attendee)
                        <h5 style="font-weight: bold;">Name: {{$attendee->name}}</h5>
                        <h5>Title: {{$attendee->title}}</h5>
                        <h5>Did they attend? {{$attendee->did_they_attend}}</h5>
                        <h5>Hours completed: {{$attendee->hours_completed}}</h5>
                        @endforeach
                        <br>
                        <h4> Participation Data </h4>
                        <br>
                        <img src="/../resources/assets/img/pie-chart.png" alt="Image Placeholder"></img>
                    </div>
            </div>
        </div>
    </div>


@stop