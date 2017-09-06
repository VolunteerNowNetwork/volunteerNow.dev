@extends('layouts.master')

@section('title')
<title>Update Your Account</title>
@stop



@section('content')
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title">Update Your Profile Here</h1>
            <div class="col-md-6 col-md-offset-3">

                <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
                    {!! csrf_field() !!}
                     {!! $errors->first('name', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        data-required>
                    </div>
                   <div class="form-group">
                       <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id"
                       data-required> 
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" id="user_name" name="user_name"> User Name
                   </div>
                   <div class="form-group">
                       <input type="emil" class="form-control" id="email" name="email" > Email
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
                        <input type="contact_number" class="form-control" id="contact_number" name="contact_number"> Contact Number
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="" name="employee_bio">  Bio About Yourself - Special Skills </textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="available_hours" name="available_hours" > Available Hours
                    </div>
                    <div class="form-group">
                        <label for="image"> Upload Image </label>
                        <input type="file" name="employee_image" id="employee_image">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
