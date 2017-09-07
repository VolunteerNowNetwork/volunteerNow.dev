@extends('layouts.master')

@section('title')
<title>Register Your Nonprofit</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Please Enter Your Event</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                UserGroup: <input type="text" class="form-control" id="user_group" name="user_group" placeholder="" data-required>
            </div>
            <div class="form-group">
                Organization Name: <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event I.D.: <input type="text" class="form-control" id="event-id" name="event_id" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event Title: <input type="text" class="form-control" id="event_title" name="event_title" placeholder="" data-required>
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
                Point of Contact: <input type="text" class="form-control" id="point_of_contact" name="point_of_contact" placeholder="">
            </div>
            <div class="form-group">
                Supplies to Bring: <textarea name="supplies_to_bring" rows="3" cols="64">{{ old('supplies_to_bring') }}</textarea>
            </div>
            <div class="form-group">
                Appropriate Attire <textarea name="appropriate_attire" rows="3" cols="64">{{ old('appropriate_attire') }}</textarea>
            </div>
        <!-- File Photo Input -->
            <div class="form-group">
                Category: <input type="text" class="form-control" id="category" name="category" placeholder="">
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
            <button>Register</button>
        </form>
    </div>
@stop


