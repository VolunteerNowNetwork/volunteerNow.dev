@extends('layouts.master')

@section('title')
<title>Update Your Account</title>
<html>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('AWfpMt9vqSzalYlBfIu2tz');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded));
            var handle = result.filesUploaded[0].handle;
            console.log(handle);
            $("#filestack").attr('src', 'https://process.filestackapi.com/' + handle);
            $("input[id=image]").val(handle);
        });
    }
</script>
@stop

@section('content')
<!DOCTYPE html>

<style>

body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
h1 {
    text-align: center;
}
.container{
	background-color:white;
	margin-top:20px;
	border: 3px solid #ff0000;
	border-radius: 25px;
	height:90%;
	width:50%;
}
</style>
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title"> Update Your Profile </h1>
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
                        About Your Company <textarea name="bio" id="bio" rows="2" cols="40" placeholder="Tell us About Your Company" value="{{ $user->bio }}"></textarea>
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
                        <div class="col-sm-6">
                                <input type="button" class="btn btn-primary" value="Upload Photo" onclick="showPicker()" ></input>
                                <input type="hidden" id="image" name="image" value="{{ $user->image }}"></input>
                                <img id='filestack' src="" name="image" ></img>
                            {{ method_field('PUT') }}
                            <br>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success" value="edit user"> Update </button>
                        </div>
             </form>
            <form method="POST" action="{{ action('EmployeeController@destroy', $user->id) }}">
                              {!! csrf_field() !!}
                        <div class="col-sm-6">
                              <button class="btn btn-danger" value="delete user">DELETE </button>
                              {{ method_field('DELETE') }}
                        </div>
            </form>
                </div>
             <br>
    </section>
</div>
@stop
