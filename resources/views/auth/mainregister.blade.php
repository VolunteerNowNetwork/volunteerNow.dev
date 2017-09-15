@extends('layouts.master')

@section('title')
<title>Register</title>
<div class="container">
  <div class="jumbotron">
    <h1>Volunteer Now!</h1> 
    <img src="img/mainphoto.png" class="img-responsive" alt="Responsive image" style="width: 50%; height: 20%; padding: 1%">
  <p id="inspirQuote"><strong>"For nonprofit organizations, few resources provide more value than volunteers. Many nonprofits would not be able to survive—let alone thrive—without the work of volunteers."<strong></p> 
    
  </div>
</div>
@stop


@section('content')
    <div class="container">
        <form method="POST" action="">
            <div class="row">
                <div class="form-group">
                    <h1 class="section-title text-center">Register As A</h1>
                    <div class="col-md-6 col-md-offset-3"> 
                    <div class="form-group">   
                        <a class="text-center" href="/nonprofit/create">Nonprofit</a>
                    </div>
                    <br>
                    <div class="form-group"> 
                        <a class ="text-center" href="/employer/create">Employer</a>
                    </div>
                    <br>
                    <div class="form-group"> 
                        <a class ="text-center" href="/employee/create">Employee</a>
                    </div>
                    <br>
                    <a href="auth/login" class="btn btn-success">Go To Login</a>
                    
                </div>
            </div>
        </form>
    </div>
@stop
