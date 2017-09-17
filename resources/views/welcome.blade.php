<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
@extends('layouts.master')

@section('title')
<title>Home Page</title>
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


<!-- /*.main-header{
  z-index: 0;
  position:relative;
  width:105%;
}

.container{
  margin: 0px;
  padding: 0px;
  border-right:0px;
}
.h3{
  position:absolute;
  left: 0;
  right: 0;
  color:white;
  font-size:24px;
}

}
*/ -->

<!--   <input type="button" value="Upload" onclick="showPicker()" /> -->
<!--     <body>
        <div class="container">
            <img class="main-header" src="/img/header.jpg">
            <h3> The power of community connection!</h3>
            <h3> YOU make the difference and WE make it easy!</h3>
           
              <br>
        </div> -->
<style>
body {
  padding: 0px;
  font-family: 'Lato', "Helvetica Neue", Helvetica, Arial, sans-serif;
  
}

div.wrapper{
  float:left; /* important */
  position:relative; /* important(so we can absolutely position the description div */
}
div.description{
  position:absolute; /* absolute position (so we can position it where we want)*/
  bottom: 210px; /* position will be on bottom */
  left:0px;
  width:100%;
  /* styling bellow */
  background-color:#ff0000;
  color:white;
  opacity:0.6; /* transparency */
  filter:alpha(opacity=90); /* IE transparency */
}
p.description_content{
  padding:0px;
  margin:0px;
  font-size: 40px;
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

.icons{
  background-color:#10D0AB ;
  margin-left:0px;
  padding:0px;
  border:0px;
  width:100%;
}
.col-sm-3{
    float:left;
    margin-left:80px;
  }

.calendar{
  margin-left:70px;
}
.icontext{
  color:black;
}


</style>


<div class='wrapper'>
  <!-- image -->
  <img class="mainphoto" src="/img/header.jpg" />
  <!-- description div -->
  <div class='description'>
    <!-- description content -->
    <p class='description_content text-center'>The power of community connection!</p>
    <p class='description_content text-center'>You make the difference and we make it easy!</p>
    <a class='description_anchor btn text-center' href= "/register">Register Now</a>
    <br>
    <!-- end description content -->
  </div>
  <!-- end description div -->
</div>

<div class="container about-us">
  <div class="row text-center">
    <div class="col-md-10 col-md-offset-1">
      <br>
    <img class="topicon" src="/img/apple-icon-120x120.png"/>
      <h2 class="welcome">Volunteer Now brings non-profit organizations and local businesses together to harness the power of volunteering. Businesses who grant their employees time off for community service can use our site to keep track of employee volunteer hours. Employees have easy access to volunteer opportunities and can easily sign up on our site.</h2>
      <br>
    </div>
  </div>
</div>

  <div class="container icons">
    <div class="row">
      <br>
      <br>
      <div class="col-sm-3">
          <img class="calendar" src="/img/small-calendar.png" height:"90" width="90" />
          <br>
          <h4 class="icontext">Employees can easily find a list of all events. They can specifically search events by date, nonprofit name, title or category.</h4>
      </div>
      <div class="col-sm-3">
          <img class="calendar" src="/img/paper-plane.png" height:"90" width="90" />
          <br>
          <h4 class="icontext">After your employee attends the event, the nonprofit Admin will validate their attendance, hours and can comment on their performance.</h4> 
      </div>
      <div class="col-sm-3">
          <img class="calendar" src="/img/banknote.png" height:"90" width="90" />
          <br>
          <h4 class="icontext">Validated attendance will pop up on the employer dashboard. Employers can pay employees for their paid volunteer work easily. </h4>
    </div>
</div>
<br>
<br>
    

    </body>
</html>
@stop






<!--             <img id='filestack' src=""> -->
           <!--  <h1 class="text-center">Welcome to Volunteer Now!</h1>
            <h2 class="text-center">The power of community connection...YOU make the difference and WE make it easy. -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrapy Layout</title>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <! Brand and toggle get grouped for better mobile display -->
    <!-- <! <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">Analyssa brand</a></div>
    <! Collect the nav links, forms, and other content for toggling -->
<!--     <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div> -->
    <!-- /.navbar-collapse --> 
<!--   </div> -->
  <!-- /.container-fluid --> 
<!-- </nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Big H1</h1>
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3">Another div box. </div>
  </div>
  <hr>
  <div class="row">
    <div class="text-justify col-sm-4"><strong>Column 1</strong></div>
    <div class="col-sm-4 text-justify">Column 2</div>
    <div class="col-sm-4 text-justify">Column 3</div>
  </div>
  <hr>
  <div class="row">
    <div class="text-center col-md-12">
      <div class="well"><strong> block 2</strong></div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4 text-center col-md-12">
      <h4><strong>Buttons Div</strong></h4>
      <p>clone button below</p>
      <button type="button" class="btn btn-info btn-sm">Info Button</button>
      <button type="button" class="btn btn-info btn-sm">Info Button</button>
<button type="button" class="btn btn-success btn-sm">Success Button</button>
    </div>
</div>
  <hr>
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>Footer </h4>
      <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="http://yourwebsite.com/">Analyssa site</a></p>
    </div>
  </div>
  <hr>
 -->
<!-- </body>
</html> -->