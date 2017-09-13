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
                    <input type="hidden" name="user_group" value="employer">
                    <div class="form-group">
                    Company Name    <input type="text" class="form-control" id="nameOfCompany" name="nameOfCompany" placeholder="Company Name"
                        data-required value="{{ old('organization_name') }}">
                    </div>
                     {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                    Password    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required value="{{ old('password') }}">
                    </div>
                    {!! $errors->first('confirmPassword', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                    Confirm Password   Password  <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="form-group">
                    Admin Name    <input type="text" class="form-control" id="" name="admin" placeholder="Admin name" value="{{ old('admin') }}">
                    </div>
                    <div class="form-group">
                    Username   <input type="text" class="form-control" id="" name="username" placeholder="Username" value="{{ old('username') }}">
                    </div>
                    <div class="form-group">
                    Company Website Link    <input type="text" class="form-control" id="" name="websiteLink" placeholder="website url" value="{{ old('website_link') }}">
                    </div>
                    <div class="form-group">
                    Tax I.D.  <input type="text" class="form-control" id="" name="taxId" placeholder="taxid" value="{{ old('tax_id') }}">
                    </div>
                    <div class="form-group">
                        About Your Company <textarea name="bio" rows="3" cols="64" placeholder="Tell us About Your Company" value="{{ old('bio') }}"></textarea>
                    </div>
                    <div class="form-group">
                        Are you a corporate sponsor?  <input type="text" class="form-control" id="corporateSponsor" name="corporateSponsor" placeholder="Corporate Sponsor?" value="{{ old('corporate_sponsor') }}">
                    </div>
                    <div class="form-group">
                        If yes, with who?  <input type="text" class="form-control" id="with_who" name="with_who" placeholder="Sponsored Organization Name" value="{{ old('with_who') }}">
                    </div>
                    <div class="form-group">
                        Additional Resources   <textarea type="textarea" class="form-control" id="" name="additionalResources" placeholder="Additional Resources" value="{{ old('additional_resources') }}"></textarea>
                    </div>
                    <br>
                    <div class="row">
                        <!-- <div class="col-sm-6">
                            Photo   <input type="image" class="form-control" id="image" name="image"></input>
                        </div> -->
                    </div>
                        <br>
                        {{ method_field('PUT') }}
                        <!-- <div class="form-group">
                            <label for="image"> Upload Image </label>
                            <input type="file" name="image" id="image">
                        </div> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" value="edit user"> Update </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
