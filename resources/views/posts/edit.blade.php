<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
@extends('layouts.master')

@section('title')
<title>Edit An Event</title>
@stop

@section('content')
<style>
body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
}
button {
    align-items: center;
}
.container{
	background-color:white;
	margin-top:20px;
	border: 3px solid #10D0AB;
	border-radius: 25px;
	height:1000px;
	width:50%;
}
</style>

    <div class="container">
        <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
            {!! csrf_field() !!}
            <div class="row">
            <input type="hidden" name="user_group" value="nonprofit">
            <h1 class="section-title text-center">Edit Your Event</h1>
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    Event Title: <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{ $post->title }}" data-required>
                </div>
                <div class="form-group">
                    Event Start: <input type="text" class="form-control" id="start" name="start" placeholder=" YYYY-MM-DD HH:MM:SS" value="{{ $post->start }}" data-required>
                </div>
                <div class="form-group">
                    Event End: <input type="text" class="form-control" id="end" name="end" placeholder=" YYYY-MM-DD HH:MM:SS" value="{{ $post->end }}" data-required>
                </div>
                <div class="form-group">
                    Location: <input type="text" class="form-control" id="location" name="location" placeholder="" value="{{ $post->location }}" data-required>
                </div>
                <div class="form-group">
                    Number of Hours: <input type="integer" class="form-control" id="number_of_hours" name="number_of_hours" placeholder="" value="{{ $post->number_of_hours }}">
                </div>
                <div class="form-group">
                    Number of Volunteers Needed: <input type="text" class="form-control" id="number_of_volunteers" name="number_of_volunteers" placeholder="" value="{{ $post->number_of_volunteers }}">
                </div>
                <div class="form-group">
                    Age Restrictions: <input type="text" class="form-control" id="age_restriction" name="age_restriction" placeholder="" value="{{ $post->age_restriction }}">
                </div>
                <div class="form-group">
                    Point of Contact: <input type="text" class="form-control" id="point_of_contact" name="point_of_contact" placeholder="" value="{{ $post->point_of_contact }}">
                </div>
                <div class="form-group">
                    <div> Supplies to Bring:  </div>
                    <textarea name="supplies_needed" rows="2" cols="20" value="{{ $post->supplies_needed }}"></textarea>
                </div>
                <div class="form-group">
                    <div> Appropriate Attire: </div>
                    <textarea name="appropriate_attire" rows="2" cols="20" value="{{ $post->appropriate_attire }}"></textarea>
                </div>
                <div class="form-group">
                    Category: <input type="text" name="categories" value="{{ $post->categories }}"></input>
                </div>
                <br>
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success" value="edit user"> Update Event </button>
                </div>
        </form>
    </div>
@stop
