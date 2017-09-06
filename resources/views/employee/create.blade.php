@extends('layouts.master')

@section('title')
<title>Employee Registration</title>
@stop


@section('content')
    <div class="container">
        <h1 class="section-title text-center"> Register to Volunteer! </h1>
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="row">
            <input type=“hidden” name=“user_group” value=“employee”>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Name" value="{{ old('username') }}"
                    data-required>
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" id="employerID" name="employerID" placeholder="employer id"
                    data-required>
               </div>
               <div class="form-group">
                   <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
               </div>
                 {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
                <div class="form-group">
                    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required>
                </div>
                {!! $errors->first('confirmPassword', '<div class="alert alert-danger">:message</div>') !!}
                <div class="form-group">
                    <input type="confirmPassword" class="form-control" id="" name="confirmPassword" placeholder="Password" data-required>
                </div>
                <div class="form-group">
                    <input type="contact_number" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number">
                </div>
                <div class="form-group">
                    <label for="bio" > Tell Us About Yourself - Special Skills </label>
                    <input type="textarea" class="form-control" id="" name="bio" placeholder="Bio About Yourself - Special Skills">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" id="available_hours" name="available_hours" placeholder="Available Hours">
                </div>
                <br>
                <div class="form-group">
                    <label for="image"> Upload Image </label>
                    <input type="file" name="employee_image" id="employee_image">
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </div>
                </div>
        </form>
    </div>
@stop
