@extends('layouts.master')

@section('title')
<title> About Volunteer Now </title>
@stop

@section('content')
<style>
body {
  padding: 0px;
  font-size: 18px;
  font-family: 'Lato', sans-serif;
}

h2 {
    margin-bottom: 20px;
    padding: 10px;
    margin-top: 15px;
    text-align: center;
}
.col-md-6  {
    margin-left: 50px;
    padding-right: 40px;
    background-color: 	#FAF0E6;
    align-items: center;
}

.image{
    align-items: center;
    margin-top: 20px;
    margin-left: 30px;
}
.btn {
    margin-bottom: 20px;
}
.text-box1{
    padding: 10px;
    background-color: 	#F5F5F5;
}
.text-box2{
        padding: 10px;
        background-color: 	#F5F5F5;
}
.contact-bio{
    font-style: italic;
    padding: 10px;
    background-color: 	#F5F5F5;
}
.contact-section{
    margin-bottom: 20px;
}
h4 {
    text-align: center;
}
</style>
        <div class="container">
            <br>
            <h2 class="text-center">The power of community connection ...   YOU make the difference and WE make it easy.</h2>
            <br>
            <div class="text-box1">
                <p> Our vision is to create a space where non-profit organizations can connect with local businesses who grant their employees time off for community service.  Employees at these companies can easily access volunteer events and sign-up..</p>
            </div>
            <br>
            <div class="text-box2">
                <p> Why is this important? <p>
                <p>According to the Bureau of Labor Statistics, approximately 102 billion dollars worth of volunteer time granted by US companies for their employees goes unused.  Volunteer Now aims to help change that. </p>
                <br>
                <p> Click on the "Opportunities" option in the menu to see available volunteer events, and please don't forget to register!</p>
            </div>
            <br>
            <div class="contact-bio">
                <p> We are full stack developers using HTML, CSS, JavaScript, PHP, MySQL, and Laravel to develop clean and easy to use applications.
            </div>
            <br>
        <div class="contact-section">
            <div class="row-center">
                  <div class="col-md-6 col-md-3">
                        <img class="image" src="/img/KristieRodriguez1.jpg" width="200" height="300">
                        <h4> Kristie Rodriguez </h4>
                    </div>
                    <div class="col-md-6 col-md-3">
                        <img class="image" src="/img/AnalyssaMartinez6.jpg" width="200" height="300">
                        <h4> Analyssa Martinez </h4>
                    </div>
                    <div class="col-md-6 col-md-3">
                        <img class="image" src="/img/JenniferAyala2.jpg" width="200" height="300">
                        <h4> Jennifer Ayala </h4>
                    </div>
            </div>
        </div>
        <br>
    </body>
</html>
@stop
