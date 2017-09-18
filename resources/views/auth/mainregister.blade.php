<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">  
@extends('layouts.master')

@section('title')
<title>Register</title>
<div class="container">
  <div class="jumbotron">
    <img class="topicon" src="/img/apple-icon-120x120.png"/>
    <h1>Volunteer Now!</h1>
    <img src="img/mainphoto.png" class="img-responsive" alt="Responsive image" style="width: 100%; height: 65%; padding: 1%">
  <p id="inspirQuote"><strong>"For nonprofit organizations, few resources provide more value than volunteers. Many nonprofits would not be able to survive—let alone thrive—without the work of volunteers."<strong></p> 
    
  </div>
</div>
@stop


@section('content')
<style>

body{
    background-color: #D3D3D3;
    font-family: 'Work Sans', sans-serif;
}

h1 {
    margin-bottom: 40px;
    text-align: center;
}
.col-md-6  {
    margin-left: 50px;

}
.btn {
    margin-bottom: 20px;
    display:block; 
    margin:0 auto;
    color:black;
    background-color:white; 
}
.topheader{
    margin-top:13px;
    height:80px;
    width:100%;
    background-color:white;
    border-radius: 25px;
    padding:0px;
    border: 2px solid black;
}
.topicon{
    float:left;
    display:block; 
    margin:0 auto;
}
.dashboard{
    color:#ff0000;
}
.twocolumns {
    border-radius: 25px;
    background-color:#ff0000;
    color:white;
    border: 5px solid #D3D3D3;
}
.center {
    border-radius: 25px;
    background-color:white;
    border: 2px solid #ff0000;
    color:#ff0000;
}
.header{
    color:white;
}
.list-group{
    color:black;
    background-color: white;
    border-radius: 25px;
}
.list-group-item{
    color:black;
    background-color: white;
}
.validate{
    color:white;
}

</style>

    <div class="container">
        <div class="container topheader">
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
            </div>
        </form>
    </div>
@stop
