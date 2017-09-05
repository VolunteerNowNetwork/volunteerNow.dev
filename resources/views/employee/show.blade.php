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
    margin-right: 50px;

}
.btn {
    margin-bottom: 20px;
}


</style>
    <div class="container">
        <h1>  EMPLOYEE DASHBOARD </h1>
        <br>
        <a href="{{ action('EmployeeController@show') }}">
        <div class="row">
            <div class="col-md-6 col-md-3">
                <div class="event-section">
                    <button class="btn btn-primary" name="choose" > Choose An Event </button>
                    <br>
                    <div class="calendar" > Calendar Placeholder </div>
                    <img src="/resources/assets/img/septemeber2017.jpg" ></img>
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
                        <h4> Hours Available: </h4> <div> [Hours Available Placeholder] </div>
                        <br>
                        <h4> Hours Completed: </h4> <div> [Hours Completed Placeholder]  </div>
                        <br>
                        <button class="btn btn-success" name="feedback" > Submit Feedback </button>
                        <br>
                        <button class="btn btn-secondary" name="go-feedback" > View Feedback </button>
                    </div>
            </div>
            <div class="col-md-6 col-md-3">
                    <div class="scheduled-events-section">
                        <h4> Your Events </h4>
                        <br>
                        <div> Event List Placeholder </div>
                        <br>
                        <h4> Participation Data </h4>
                        <img src="/../resources/assets/img/pie-chart.png" alt="Image Placeholder"></img>
                    </div>
            </div>
        </div>
    </div>


@stop
