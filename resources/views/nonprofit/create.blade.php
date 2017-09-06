@extends('layouts.master')

@section('title')
<title>Register Your Nonprofit</title>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Register As A Nonprofit</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Name of Nonprofit: <input type="text" class="form-control" id="organizationName" name="organizationName" placeholder="" data-required>
            </div>
            <div class="form-group">
                Admin Name: <input type="text" class="form-control" id="admin" name="admin" placeholder="" data-required>
            </div>
            <div class="form-group">
                Username: <input type="text" class="form-control" id="username" name="username" placeholder="" data-required>
            </div>
            <div class="form-group">
                Password: <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                Password: <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your Password">
            </div>
            <div class="form-group">
                Website Link: <input type="text" class="form-control" id="websiteLink" name="websiteLink" placeholder="" data-required>
            </div>
            <div class="form-group">
                Contact Number: <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="" data-required>
            </div>
            <div class="form-group">
                Contact Email: <input type="text" class="form-control" id="email" name="email" placeholder="" data-required>
            </div>
            <div class="form-group">
                Bio About Your Nonprofit: <textarea name="bio" rows="3" cols="64"></textarea>
            </div>
            <div class="form-group">
                How will you benefit from this service? <textarea name="benefit" rows="3" cols="64"></textarea>
            </div>
        <!-- File Photo Input -->
<!--             <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div> -->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@stop


