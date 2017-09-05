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
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                    data-required>
                </div>
               <div class="form-group">
                   <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id"
                   data-required placeholder="Employer ID">
               </div>
               <div class="form-group">
                   <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name">
               </div>
               <div class="form-group">
                   <input type="emil" class="form-control" id="email" name="email" placeholder="Email" >
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
                    <input type="textarea" class="form-control" id="" name="employee_bio" placeholder="Bio About Yourself - Special Skills"<
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="available_hours" name="available_hours" placeholder="Available Hours">
                </div>
                <div class="form-group">
                    <label for="image"> Upload Image </label>
                    <input type="file" name="employee_image" id="employee_image">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary"> Register </button>
                    </div>
                </div>
        </form>
    </div>
@stop
