@extends('layouts.master')

@section('title')
<title>Register Your Company</title>
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
<style>

body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}
h1 {
    text-align: center;
    margin-bottom: 30px;
    margin-top: 20px;
}
.container{
	background-color:white;
	margin-top:20px;
	border: 3px solid #ff0000;
	border-radius: 25px;
	height:90%;
	width:60%;
}

</style>

    <div class="container">
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="row">
            <input type="hidden" name="user_group" value="employer">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="section-title text-center"> Register Your Company </h1>
                    <div class="form-group">
                        Name of Company: <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="" data-required>
                    </div>
                    <div class="form-group">
                        Admin: <input type="text" class="form-control" id="admin" name="admin" placeholder="" data-required>
                    </div>
                    <div class="form-group">
                        Username: <input type="text" class="form-control" id="username" name="username" placeholder="" data-required>
                    </div>
                    <div class="form-group">
                        Password: <input type="password" class="form-control" id="password" name="password" placeholder="" data-required>
                    </div>
                    <div class="form-group">
                        Password: <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your Password">
                    </div>
                    <div class="form-group">
                        Email: <input type="text" class="form-control" id="email" name="email" placeholder="" data-required>
                    </div>
                    <div class="form-group">
                        Contact Number: <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="" data-required>
                    </div>
                    <div class="form-group">
                        Company Website Link: <input type="text" class="form-control" id="website_link" name="website_link" placeholder="">
                    </div>
                    <div class="form-group">
                        Company Tax I.D.: <input type="text" name="tax_id" ></input>
                    </div>
                    <div class="form-group">
                        Bio About Your Nonprofit: <textarea name="bio" rows="2" cols="50">{{ old('bio') }}</textarea>
                            <p>Upload a Photo/Logo:</p>
                                <input type="button" value="Upload" onclick="showPicker()"/>
                                     <img id="filestack" name="filestack" src="">
                                        <input type="hidden" name="image" id="image">
                    </div>
                    <div class="form-group">
                        Additional Resources<textarea name="additional_resources" rows="2" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                        Are you currently a corporate sponsor? <input type="text" name="corporate_sponsor" ></input>
                    </div>
                    <div class="form-group">
                        With who? <input type="text" name="with_who" ></input>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div  class="row">
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Register</button>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </form>
    </div>
@stop
