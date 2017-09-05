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
                Title of Event: <input type="text" class="form-control" id="titleOfEvent" name="titleOfEvent" placeholder="" data-required>
            </div>
            <div class="form-group">
                Organization Name: <input type="text" class="form-control" id="organizationName" name="organizationName" placeholder="" data-required>
            </div>
            <div class="form-group">
                Location: <input type="varchar" class="form-control" id="location" name="location" placeholder="" data-required>
            </div>
            <div class="form-group">
                TimeBlock: <input type="varchar" class="form-control" id="timeblock" name="timeblock" placeholder="">
            </div>
            <div class="form-group">
                Number of Actual Hours: <input type="double" class="form-control" id="numberOfActualHours" name="numberOfActualHours" placeholder="">
            </div>
            <div class="form-group">
                Number of Volunteers Needed: <input type="varchar" class="form-control" id="numberOfVolunteers" name="numberOfVolunteers" placeholder="">
            </div>
            <div class="form-group">
                Age Restrictions: <input type="varchar" class="form-control" id="ageRestrictions" name="ageRestrictions" placeholder="">
            </div>
            <div class="form-group">
                Point of Contact: <input type="varchar" class="form-control" id="pointOfContact" name="pointOfContact" placeholder="">
            </div>
            <div class="form-group">
                Category: <input type="varchar" class="form-control" id="category" name="category" placeholder="">
            </div>
            <div class="form-group">
                Supplies to Bring: <textarea name="suppliesToBring" rows="3" cols="64">{{ old('suppliesToBring') }}</textarea>
            </div>
            <div class="form-group">
                Appropriate Attire <textarea name="appropriateAttire" rows="3" cols="64">{{ old('appropriateAttire') }}</textarea>
            </div>
        <!-- File Photo Input -->
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
            <button>Register</button>
        </form>
    </div>
@stop


