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
        <div class="row">
            <div class="col-md-6 col-md-3">
                <div class="event-section">
                    <button class="btn btn-primary" name="choose" > Views An Event </button>
                    <br>
                    <div class="calendar" > Calendar Placeholder </div>
                    <img src="/resources/assets/img/septemeber2017.jpg" ></img>
                    <br>
                    <button class="btn btn-secondary" name="search-date" > Search By Date </button>
                    <br>
                    <button class="btn btn-secondary" name="search-nonprofit" > Search by Non-Profit </button>
                    <br>
                    <button class="btn btn-secondary" name="search-employerCode" > Search by Employer Code </button>
                    <br>
                    <button class="btn btn-secondary" name="calendar-synch" > Calendar Synch </button>
                </div>
            </div>
                     <ul class = "list-group">
                        <li class= "list-group-item list-group-item-info" style="font-weight: bold;">Name: {{$user->organization_name}}</li>
                        <li class= "list-group-item">Admin Name: {{$user->admin}}</li>
                        <li class= "list-group-item">Username: {{$user->username}}</li>
                        <li class= "list-group-item" style="color: #4a9bd9;">Bio: {{$user->bio}}</li>
                        <a class= "list-group-item btn btn-primary" href= "{{ action('NonprofitController@edit', $user->id) }}"><span class="glyphicon glyphicon-pencil"></span>  Edit My Account</a>
                    </ul>
                    <br>
            <div class="col-md-6 col-md-3">
                    <div class="participation-section">
                        <h4> Total Employee Signups: </h4> <div> [Total Employee Signups Placeholder] </div>
                        <br>
                        <h4> Total Employee Completion: </h4> <div> [Total Employee Completion Placeholder]  </div>
                        <br>
                        <textarea class="" name="displayNonprofitFeedback" > Display NonProfit Feedback </textarea>
                        <br>
                        <textarea class="" name="displayEmployeeFeedback" > Display Employee Feedback </textarea>
                        <
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="scheduled-events-section">
                        <h4> Validated Attendance </h4>
                        <br>
                        <button class"btn btn-secondary" name="print"> Print </button>
                        <div> Event Blocker Placeholder </div>
                        <div> Total Employee Participation By Event</div>
                        <div> Top 5 Events</div>
                        <br>
                        <h4> Participation Data </h4>
                        <img src="/../resources/assets/img/pie-chart.png" alt="Image Placeholder"></img>
                    </div>
            </div>
        </div>
    </div>


@stop
