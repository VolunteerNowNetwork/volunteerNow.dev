@extends('layouts.master')

@section('title')
<title>Master Calendar</title>
@stop

@section('content')
<!DOCTYPE html>
<html>

    <body>
        <div>
            <h1 class="text-center">Master Calendar</h1>
            	 <div class="container">
            <div id='calendar'></div>
        </div>
        </div>
    </body>
    <script type="text/javascript">
    
	$(document).ready(function() {

        $('#calendar').fullCalendar({
            default: 'standard',
            selectable: true,
            editable: false,

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
        	events: '/posts',

			// defaultDate: '2017-09-01',
			// navLinks: true,
			// editable: true,
			// eventLimit: true,
		 //    events: BASEURL + '/posts'
	});
});

    </script>



</html>
@stop
