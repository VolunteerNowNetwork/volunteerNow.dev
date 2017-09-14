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
                    Company Name    <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Company Name"
                        data-required value="{{ $user->organization_name }}">
                    </div>
                     {!! $errors->first('password', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                    Password    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required value="{{ $user->password }}">
                    </div>
                    {!! $errors->first('confirmPassword', '<div class="alert alert-danger">:message</div>') !!}
                    <div class="form-group">
                    Confirm Password   Password  <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="form-group">
                    Admin Name    <input type="text" class="form-control" id="" name="admin" placeholder="Admin name" value="{{ $user->admin }}">
                    </div>
                    <div class="form-group">
                    Username   <input type="text" class="form-control" id="" name="username" placeholder="Username" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                    Contact Number  <input type="text" class="form-control" id="" name="contact_number" placeholder="Username" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                    Company Website Link    <input type="text" class="form-control" id="website_link" name="website_link" placeholder="website url" value="{{ $user->website_link }}">
                    </div>
                    <div class="form-group">
                    Tax I.D.  <input type="text" class="form-control" id="tax_id" name="tax_id" placeholder="taxid" value="{{ $user->tax_id }}">
                    </div>
                    <div class="form-group">
                        About Your Company <textarea name="bio" id="bio" rows="3" cols="64" placeholder="Tell us About Your Company" value="{{ $user->bio }}"></textarea>
                    </div>
                    <div class="form-group">
                        Are you a corporate sponsor?  <input type="text" class="form-control" id="corporate_sponsor" name="corporate_sponsor" placeholder="Corporate Sponsor?" value="{{ $user->corporate_sponsor }}">
                    </div>
                    <div class="form-group">
                        If yes, with who?  <input type="text" class="form-control" id="with_who" name="with_who" placeholder="Sponsored Organization Name" value="{{ $user->with_who }}">
                    </div>
                    <div class="form-group">
                        Email:  <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        Additional Resources   <textarea type="textarea" class="form-control" id="" name="additional_resources" placeholder="Additional Resources" value="{{ $user->additional_resources }}"></textarea>
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
@stop
