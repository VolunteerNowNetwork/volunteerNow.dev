<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
@extends('layouts.master')

@section('title')
<title>Register</title>
<div class="container">
  <div class="jumbotron text-center" id="jumbotron1">
    <img class="topicon" src="/img/apple-icon-120x120.png"/>
      <p id="inspirQuote"><strong>"For nonprofit organizations, few resources provide more value than volunteers. Many nonprofits would not be able to survive—let alone thrive—without the work of volunteers."<strong></p> 
  </div>
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

h2 {
    margin-bottom: 40px;
    text-align: center;
}


.topicon{
    float:left;
    position:relative;
    display:block; 
    margin:0 auto;
}

div.wrapper{
  float:center; 
  position:relative; 
  width:0 auto;
}
div.description{
  float:center;
  position:absolute; /* absolute position (so we can position it where we want)*/
  margin-left: 155px;
  bottom: 210px; 
  right:0px;
  left:0px;
  width: 75%;
  /* styling bellow */
  background-color:#ff0000;
  color:white;
  opacity:0.6; /* transparency */
  filter:alpha(opacity=90); /* IE transparency */
}

.text-center{
    color:white;
    font-weight: bold;
    font-size: 150%;
}

#jumbotron1{
  color:black;
}

#btn{
    margin-bottom: 20px;
    /*display:block;*/ 
    /*margin:0 auto;*/
    color:black;
    background-color:#10D0AB
}


</style>

<div class='wrapper'>
  <div class="jumbotron text-center" id="jumbotron2">
  
  <img class="volunteer1" src="/img/volunteer1.jpg" />
  <!-- description div -->
  <div class='description'>
    <h2 class="section-title text-center">Register As A: </h2>    
               <a class="text-center" href="/nonprofit/create">Nonprofit</a>       
               <br>       
               <a class ="text-center" href="/employer/create">Employer</a>     
               <br>      
               <a class ="text-center" href="/employee/create">Employee</a>      
               <br>
               <br>
               <a id="btn" class="btn btn-success" href="auth/login" >Go To Login</a>
               <br>
  </div>
 </div>
 
</div>


    
@stop
