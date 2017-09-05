@extends('layouts.master')

@section('title')
<title>Employee Profile</title>
@stop


@section('content')
<style>
.event-section {
    margin-left: 10px;
}
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
        <h1>  EMPLOYEE PROFILE  </h1>
        <br>
        <a href="{{ action('EmployeeController@show') }}">
        <div class="row">
            <div class="col-md-6 col-md-3">
                <div class="event-section">
                    <button class="btn btn-primary" name="choose" > Choose An Event </button>
                    <br>
                    <div class="calendar" > Calendar Placeholder </div>
                    <img src="/../septemeber2017.jpg" ></img>
                    <br>
                    <button class="btn btn-secondary" name="search-date" > Search By Date </button>
                    <br>
                    <button class="btn btn-secondary" name="search-nonprofit" > Search by Non-Profit </button>
                    <br>
                    <button class="btn btn-secondary" name="search-category" > Search by Category </button>
                    <br>
                    <button class="btn btn-secondary" name="calendar-synch" > Calendar Synch </button>
                </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="participation-section">
                        <div> Hours Available: </div>
                        <br>
                        <div> Hours Completed: </div>
                        <br>
                        <button class="btn btn-success" name="feedback" > Submit Feedback </button>
                        <br>
                        <button class="btn btn-secondary" name="go-feedback" > View Feedback </button>
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="scheduled-events-section">
                        <h3> Your Events </h3>
                        <br>
                        <div> Event List Placeholder </div>
                        <br>
                        <h4> Participation Data </h4>

                    </div>
            </div>
        </div>
    </div>


@stop
