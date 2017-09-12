@extends('layouts.master')

@section('title')
<title>Update Your Account Info</title>
@stop



@section('content')
<style>

h1 {
    margin-bottom: 40px;
    text-align: center;
}
.col-md-6  {
    margin-right: 50px;

}
.btn {
    margin-bottom: 20px;
}

</style>

<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title">Update Your Profile Here</h1>
            <br>
            <div class="col-md-6 col-md-offset-3">
                <form method="POST" action="{{ action('EmployerController@update', $user->id) }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_group" value="employee">
                    <div class="form-group">
                    Company Name    <input type="text" class="form-control" id="nameOfCompany" name="nameOfCompany" placeholder="NameOfCompany"
                        data-required> {{ old('organization_name') }}
                    </div>
                     {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                    Password    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required> {{ old('password') }}
                    </div>
                    {!! $errors->first('confirmPassword', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                    Confirm Password   Password  <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="form-group">
                    Admin Name    <input type="admin" class="form-control" id="" name="admin"> {{ old('admin') }}
                    </div>
                    <div class="form-group">
                    Username   <input type="username" class="form-control" id="" name="username"> {{ old('username') }}
                    </div>
                    <div class="form-group">
                    Company Website Link    <input type="websiteLink" class="form-control" id="" name="websiteLink">{{ old('website_link') }}
                    </div>
                    <div class="form-group">
                    Tax I.D.  <input type="taxId" class="form-control" id="" name="taxId"> {{ old('tax_id') }}
                    </div>
                    <div class="form-group">
                        About Your Company <textarea name="bio" rows="3" cols="64">{{ old('bio') }}</textarea>
                    </div>

                    <div class="form-group">
                    Are you a corporate sponsor?  <input type="corporateSponsor" class="form-control" id="corporateSponsor" name="corporateSponsor">{{ old('corporate_sponsor') }}
                    </div>
                    <div class="form-group">
                    Aditional Resources   <textarea type="additionalResources" class="form-control" id="" name="additionalResources"> {{ old('additional_resources') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            Photo   <input type="image" class="form-control" id="image" name="image">
                            <br>
                            {{ method_field('PUT') }}
                            <button type="update" class="btn btn-primary">Update</button>
                        </div>
                    <br>
                    <div class="form-group">
                        <!-- <div class="col-sm-6 text-right">
                            <a href="/auth/register" class="btn btn-success">Go To Signup</a>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
