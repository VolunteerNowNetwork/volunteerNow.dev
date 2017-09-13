@extends('layouts.master')

@section('title')
<title>Update Your Account</title>
@stop

@section('content')

<!DOCTYPE html>
<html>
  <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('A0rXTGEEfTomsvdCji8lnz');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded));
            var handle= result.filesUploaded[0].handle;
            console.log(handle);
            $("#filestack").attr('src', 'https://process.filestackapi.com/' + handle);
        });
    }
</script>
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title">Update Your Profile Here</h1>
            <div class="col-md-6 col-md-offset-3">

                <form method="POST" action="{{ action('EmployeeController@update', $user->id) }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                    <input type="hidden" name="user_group" value="employee">
                    Name   <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $user->name }}"
                        data-required>
                    </div>
                   <div class="form-group">
                    Employer Id   <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id" value="{{ $user->employer_id }}"
                       data-required>
                   </div>
                   <div class="form-group">
                    Email <input type="emil" class="form-control" id="email" name="email" value="{{ $user->email }}">
                   </div>
                   <div class="form-group">
                   Password    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required> {{ old('password') }}
                    <div class="form-group">
                    Contact Number  <input type="contactNumber" class="form-control" id="contact_number" name="contact_number" value="{{ $user->contact_number }}">
                    </div>
                    <div class="form-group">
                    Bio About Yourself - Special Skills  <textarea type="text" class="form-control" id="" name="bio" value="{{ $user->bio }}">  </textarea>
                    </div>
                    <div class="form-group">
                    Available Hours  <input type="text" class="form-control" id="available_hours" name="available_hours"  value="{{ $user->available_hours }}">
                    </div>
                    <div class="form-group">
                    Completed Hours  <input type="text" class="form-control" id="completed_hours" name="completed_hours"  value="{{ $user->completed_hours }}">
                    </div>
                    <br>
                    <p>Upload a Photo:</p>
                    <input type="button" value="Upload" onclick="showPicker()" />
                    <img id='filestack' src="">
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
                </form>
                <br>
                <form method="POST" action="{{ action('EmployeeController@destroy', $user->id) }}">
                      {!! csrf_field() !!}
                  <button class="btn btn-danger" value="delete user">DELETE </button>
                  {{ method_field('DELETE') }}
              </form>
            </div>
        </div>
    </section>
</div>
