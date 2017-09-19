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
	margin-top:40px;
	border: 3px solid #10D0AB;
	border-radius: 25px;
	height:100%;
	width:550px;
}
</style>
<div class="container">
            <h1 class="section-title">Update Your Profile Here</h1>
                <form method="POST" action="{{ action('EmployeeController@update', $user->id) }}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <input type="hidden" name="user_group" value="employee">
                                Name   <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $user->name }}"
                                    data-required>
                            </div>
                           <div class="form-group">
                               Employer Name  <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="organization_name" value="{{ $user->organization_name }}"
                               data-required>
                           </div>
                           <div class="form-group">
                               Employer Id  <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="employer id" value="{{ $user->employer_id }}"
                               data-required>
                           </div>
                           <div class="form-group">
                               Email <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                           </div>
                           <div class="form-group">
                               Password    <input type="password" class="form-control" id="" name="password" placeholder="Password" data-required> {{ old('password') }}
                           </div>
                            <div class="form-group">
                                Contact Number  <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $user->contact_number }}">
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
                    <div class="row">
                        <div class="col-sm-6">
                            <div>Upload a Photo:</div>
                            <br>
                                <input type="button" class="btn btn-primary" value="Upload" onclick="showPicker()" ></input>
                                <input type="hidden" id="image" name="image" value="{{ $user->image }}"></input>
                                <img id='filestack' src="" name="image" ></img>
                            {{ method_field('PUT') }}
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success" value="edit user"> Update </button>
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
@stop
