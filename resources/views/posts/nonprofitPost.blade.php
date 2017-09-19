<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet"> 
@extends('layouts.master')

@section('title')
<title>Add An Event</title>
@stop


@section('content')
<style>
body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
.btn{
    background-color: #10D0AB;
    color:white;
}
</style>
    <div class="container">
        <form method="POST" action="{{ action('PostsController@store') }}">
            {!! csrf_field() !!}
            <div class="row">
            <input type="hidden" name="user_group" value="nonprofit">
            <h1 class="section-title text-center">Please Enter Your Event Below</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Organization Name: <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event Title: <input type="text" class="form-control" id="title" name="title" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event Start: <input type="text" class="form-control" id="start" name="start" placeholder=" YYYY-MM-DD HH:MM:SS" data-required>
            </div>
            <div class="form-group">
                Event End: <input type="text" class="form-control" id="end" name="end" placeholder=" YYYY-MM-DD HH:MM:SS" data-required>
            </div>
            <div class="form-group">
                Location: <input type="text" class="form-control" id="location" name="location" placeholder="" data-required>
            </div>
            <div class="form-group">
                Number of Hours: <input type="integer" class="form-control" id="number_of_hours" name="number_of_hours" placeholder="">
            </div>
            <div class="form-group">
                Number of Volunteers Needed: <input type="text" class="form-control" id="number_of_volunteers" name="number_of_volunteers" placeholder="">
            </div>
            <div class="form-group">
                Age Restrictions: <input type="text" class="form-control" id="age_restriction" name="age_restriction" placeholder="">
            </div>
            <div class="form-group">
                Point of Contact Name: <input type="text" class="form-control" id="point_of_contact_name" name="point_of_contact_name" placeholder="">
            </div>
            <div class="form-group">
                Point of Contact Number: <input type="text" class="form-control" id="point_of_contact_number" name="point_of_contact_number" placeholder="">
            </div>
            <div class="form-group">
                Supplies to Bring: <textarea name="supplies_needed" rows="3" cols="64">{{ old('supplies_needed') }}</textarea>
            </div>
            <div class="form-group">
                Appropriate Attire <textarea name="appropriate_attire" rows="3" cols="64">{{ old('appropriate_attire') }}</textarea>
            </div>
            <div class="form-group">
                Category 
                <br>
                <textarea name="categories" rows="3" cols="64">{{ old('categories') }}</textarea>
            </div>
        <!-- File Photo Input -->
<!--             <div class="form-group">
                Category: <input type="text" class="form-control" id="category" name="category" placeholder="">
            </div> -->
            <button type="submit" class="btn">Add the Event</button>
        </form>
    </div>
@stop


