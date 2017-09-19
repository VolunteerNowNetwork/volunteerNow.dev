@extends('layouts.master')

@section('title')
<title>Edit Nonprofit</title>
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
	border: 3px solid #10D0AB;
	border-radius: 25px;
	height:90%;
	width:70%;
}
</style>
    <div class="container">
        <form method="POST" action="{{ action('NonprofitController@update', $user->id) }}">
            {!! csrf_field() !!}
            <div class="row">

            <h1 class="section-title text-center">Update Your Account</h1>

            <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                Name of Nonprofit: <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="" value="{{ $user->organization_name }}" data-required >
            </div>
            <div class="form-group">
                Admin Name: <input type="text" class="form-control" id="admin" name="admin" placeholder="" value="{{ $user->admin }}" data-required>
            </div>
            <div class="form-group">
                Username: <input type="text" class="form-control" id="username" name="username" placeholder="" value="{{ $user->username }}"data-required>
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
                Bio About Your Nonprofit: <textarea type="text" class="form-control" id="" name="bio" value="{{ $user->bio }}">  </textarea>
            </div>
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
@stop
