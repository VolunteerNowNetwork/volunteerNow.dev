@extends('layouts.master')

@section('title')
<title>Employee Registration</title>
<script>
    var client = filestack.init('AWfpMt9vqSzalYlBfIu2tz');
    function showPicker() {
        client.pick({
            maxFiles: 1,
            imageMax: [300,300],
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded));
            var handle= result.filesUploaded[0].url;
            console.log(handle);
            $("#filestack").attr('src', 'https://process.filestackapi.com/' + handle);
            $("#editIcon").attr('src', "https://process.filestackapi.com/resize=w:300,h:300/circle/" + handle);
            var imagePath = 'https://process.filestackapi.com/' + handle;
            $("#image").val(handle);
        });
    }
 </script>
@stop


@section('content')
<!DOCTYPE html>
<html>

    <div class="container">
        <h1 class="section-title text-center"> Register to Volunteer! </h1>
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="row">
            <input type="hidden" name="user_group" value="employee">
                <div class="form-group">
                Name   <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                    data-required>
                </div>
                <div class="form-group">
                 Employer ID  <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id"
                    data-required>
               </div>
               <div class="form-group">
                Employer Name  <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Employer Name"
                   data-required>
              </div>
               <div class="form-group">
                  Email <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
               </div>
                <div class="form-group">
                Password    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required>
                </div>
                <div class="form-group">
                Confirm Password    <input type="password" class="form-control" id="" name="password_confirmation" placeholder="password_confirmation"  data-required>
                </div>
                <div class="form-group">
                Contact Number    <input type="contact_number" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number">
                </div>
                <div class="form-group">
                    Tell Us About Yourself - Special Skills
                    <input type="textarea" class="form-control" id="" name="bio" placeholder="Bio About Yourself - Special Skills">
                        <p>Upload a Photo/Logo:</p> 
                            <input type="button" value="Upload" onclick="showPicker()"/>
                                <img id="filestack" name="filestack" src="">
                                    <input type="hidden" name="image" id="image">
                </div>
                <br>
                <div class="form-group">
                    Available Hours    <input type="text" class="form-control" id="available_hours" name="available_hours" placeholder="Available Hours">
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary"> REGISTER </button>
                    </div>
                </div>
        </form>
    </div>
@stop
