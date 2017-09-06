@extends('layouts.master')

@section('title')
<title>Submit Feedback</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Submit Feedback Below!</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Your Name: <input type="text" class="form-control" id="name" name="name" placeholder="" data-required>
            </div>
            <div class="form-group">
                Nonprofit Name <input type="text" class="form-control" id="nonprofitname" name="nonprofitname" placeholder="">
            </div>
            <div class="form-group">
                Event Name: <input type="text" class="form-control" id="eventname" name="eventname" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event Date: <input type="text" class="form-control" id="eventdate" name="eventdate" placeholder="" data-required>
            </div>
            <div class="form-group">
                Comments: 
                <br>
                <textarea name="comments" rows="3" cols="77"></textarea>
            </div>
            <button>Submit</button>
        </form>
    </div>
@stop
