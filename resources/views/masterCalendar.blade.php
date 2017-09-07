@extends('layouts.master')

@section('title')
<title>Master Calendar</title>
<script>
    $(document).ready(function() {

    // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
              header: {
              	left: 'prev,next today ',
              	center:'title',
              }      // put your options and callbacks here
        })
    });
</script>
@stop

@section('content')
<!DOCTYPE html>
<html>

    <body>
        <div class="container">
            <h1 class="text-center">Master Calendar</h1>
            	 <div class="container">
            <div id='calendar'></div>
        </div>
        </div>
    </body>
</html>
@stop
