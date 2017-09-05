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
                	<h4 class="section-title">My Events Calendar</h4>
                    <br>
                    <div class="calendar" > Calendar Placeholder </div>
<!--                     <img src="/img/september2017.jpg" ></img> -->
					<img src="{{ asset('september2017.jpg') }}">
                    <br>
                    <button class="btn btn-secondary" name="edit-event" > Edit an Event </button>
                    <br>
                    <button class="btn btn-secondary" name="add-event" > Add an Event</button>
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
                    	<img src="/img/september2017.jpg" ></img>
                    	<br>
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="attendance">
                        <h4> Validate Attendance </h4>
                        <br>
                        <div> Attendance List Placeholder </div>
                        <br>
                        <button class="btn btn-success" name="validate"> Validate</button>
                        <br>
                        <button class="btn btn-success" name="print"> Print</button>
                        <h4> Feedback </h4>
                        <button class="btn btn-success" name="submitFeedback"> Submit Feedback on an Employee</button>
                    </div>
            </div>
        </div>
    </div>


@stop


                       