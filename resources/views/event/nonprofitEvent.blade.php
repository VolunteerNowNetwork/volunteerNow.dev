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
                UserGroup: <input type="text" class="form-control" id="userGroup" name="userGroup" placeholder="" data-required>
            </div>
            <div class="form-group">
                Organization Name: <input type="text" class="form-control" id="organizationName" name="organizationName" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event I.D.: <input type="text" class="form-control" id="eventId" name="eventId" placeholder="" data-required>
            </div>
            <div class="form-group">
                Event Title: <input type="text" class="form-control" id="eventTitle" name="eventTitle" placeholder="" data-required>
            </div>
            <div class="form-group">
                Location: <input type="text" class="form-control" id="location" name="location" placeholder="" data-required>
            </div>
            <div class="form-group">
                Number of Hours: <input type="integer" class="form-control" id="numberOfHours" name="numberOfHours" placeholder="">
            </div>
            <div class="form-group">
                Number of Volunteers Needed: <input type="text" class="form-control" id="numberOfVolunteers" name="numberOfVolunteers" placeholder="">
            </div>
            <div class="form-group">
                Age Restrictions: <input type="text" class="form-control" id="ageRestriction" name="ageRestriction" placeholder="">
            </div>
            <div class="form-group">
                Point of Contact: <input type="text" class="form-control" id="pointOfContact" name="pointOfContact" placeholder="">
            </div>
            <div class="form-group">
                Supplies to Bring: <textarea name="suppliesToBring" rows="3" cols="64">{{ old('suppliesToBring') }}</textarea>
            </div>
            <div class="form-group">
                Appropriate Attire <textarea name="appropriateAttire" rows="3" cols="64">{{ old('appropriateAttire') }}</textarea>
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


