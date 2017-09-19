<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">  
@extends('layouts.master')

@section('title')
<title>Register</title>
<div class="container">
    <img class="topicon" src="/img/apple-icon-120x120.png"/>
    <h1>Volunteer Now!</h1>
  
  <p id="inspirQuote"><strong>"For nonprofit organizations, few resources provide more value than volunteers. Many nonprofits would not be able to survive—let alone thrive—without the work of volunteers."<strong></p> 
    
  
</div>
@stop


@section('content')
<!DOCTYPE html>
<html>
  <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
<script>
    var client = filestack.init('AWfpMt9vqSzalYlBfIu2tz');
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
<style>

body{
    background-color: WHITE;
    font-family: 'Work Sans', sans-serif;
}

h1 {
    margin-bottom: 40px;
    text-align: center;
}
/*.col-md-10  {
    margin-left: 50px;*/

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

div.wrapper{
  float:right; /* important */
  position:relative; /* important(so we can absolutely position the description div */
}
div.description{
  /*float:right; *//* absolute position (so we can position it where we want)*/
  bottom: 210px; /* position will be on bottom */
  left:0px;
  width:100%;
  /* styling bellow */
  background-color:#1BD3F0;
  color:white;
  opacity:0.6; /* transparency */
  filter:alpha(opacity=90); /* IE transparency */
}
div.descriptionl{
  float:left; /* absolute position (so we can position it where we want)*/
  bottom: 210px; /* position will be on bottom */
  left:0px;
  width:100%;
  /* styling bellow */
  background-color:#1BD3F0;
  color:white;
  opacity:1; /* transparency */
  filter:alpha(opacity=90); /* IE transparency */
}
p.description_content{
  padding:0px;
  margin:0px;
  font-size: 70px;
}
.mainphoto{
  width: 100%;
}
.about-us{
  padding:0px;
  width:100%;
}
.description_anchor{
    display:block; 
    width:150px; 
    margin:0 auto;
    color:black;
    background-color:#10D0AB; 
}
.description_anchor a:hover{
  background-color:white;
}
.welcome{
  color:orange;
}

.text-center{
    color:black;
    font-weight: bold;
    font-size: 200%;
}




</style>

    <div  align="center" class="">
        
       
        <div align="center" style="width:100%;" class="description">
            <form align="center" method="POST" action="">
                <div style="width:100%;" class="r">
                    <div  class="fg">
                        <h1 class="section-title text-center">Register As A: </h1>
                        <div class=""> 
                        <div class="fg">   
                            <a class="text-center" href="/nonprofit/create">Nonprofit</a>
                        </div>
                        <br>
                        <div class="fg"> 
                            <a class ="text-center" href="/employer/create">Employer</a>
                        </div>
                        <br>
                        <div class="fg"> 
                            <a class ="text-center" href="/employee/create">Employee</a>
                        </div>
                        <br>
                        <a href="auth/login" class="btn btn-success">Go To Login</a>
                    </div>

                </div>
            </div>
        </form>
    </div>
                 <div class="">
            <img class="mainphoto" src="/img/4_good_points_of_volunteering.jpg"/>
        </div>
@stop
