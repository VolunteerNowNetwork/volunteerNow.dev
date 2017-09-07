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
                     {!! $errors->first('nameOfCompany', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                        <input type="text" class="form-control" id="nameOfCompany" name="nameOfCompany" placeholder="NameOfCompany" 
                        data-required>
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
                        <input type="admin" class="form-control" id="" name="admin">Admin Name
                    </div>
                    <div class="form-group">
                        <input type="username" class="form-control" id="" name="username">Username
                    </div>
                    <div class="form-group">
                        <input type="websiteLink" class="form-control" id="" name="websiteLink">Company Website Link
                    </div>
                    <div class="form-group">
                        <input type="taxId" class="form-control" id="" name="taxId">Tax I.D.
                    </div>
                    <div class="form-group">
                        <textarea type="bio" class="form-control" id="" name="bio">Company Bio</textarea>
                    </div>
                    <div class="form-group">
                        <input type="corporateSponsor" class="form-control" id="corporateSponsor" name="corporateSponsor">Are you a corporate sponsor
                    </div>
                    <div class="form-group">
                        <textarea type="additionalResources" class="form-control" id="" name="additionalResources">Aditional Resources</textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="Registar" class="btn btn-primary">Registar</button>
                        </div>
                    <div class="form-group">
                        <input type="image" class="form-control" id="image" name="image">Photo
                    </div>
                        <!-- <div class="col-sm-6 text-right">
                            <a href="/auth/register" class="btn btn-success">Go To Signup</a>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>