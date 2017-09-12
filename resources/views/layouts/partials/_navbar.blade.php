    <div id="navbar" class="collapse navbar-collapse" style="background-color: #c7c5c4; color: white;">

         <ul class="nav navbar-nav">
             @if (Auth::check() && Auth::user()->user_group == "employee")
                 <li class=""><a href="/welcome"> Home </a></li>
                 <li class=""><a href="/welcome">About Us</a></li>
                 <li class=""><a href="/masterCalendar">Opportunities</a></li>
                 <li class=""><a href="/employee/{{Auth::id() }}"> Dashboard </a></li>
                 <li class=""><a href="/auth/logout">Logout</a></li>


             @elseif (Auth::check() && Auth::user()->user_group == "employer")
                 <li class=""><a href="/welcome"> Home </a></li>
                 <li class=""><a href="/welcome">About Us</a></li>
                 <li class=""><a href="/masterCalendar">Opportunities</a></li>
                 <li class=""><a href="/employer/{{Auth::id()}} "> Dashboard </a></li>
                  <li class=""><a href="/auth/logout">Logout</a></li>

             @elseif (Auth::check() && Auth::user()->user_group == "nonprofit")
                 <li class=""><a href="/masterCalendar">Opportunities</a></li>
                 <li class=""><a href="/welcome">About Us</a></li>
                 <li class=""><a href="/nonprofit/{{Auth::id()}}"> Dashboard </a></li>
                 <li class=""><a href="/posts/create"> Create an Event </a></li>
                 <li class=""><a href="/auth/logout">Logout</a></li>

             @else
                  <li class=""><a href="/welcome"> Home </a></li>
                  <li class=""><a href="/welcome">About Us</a></li>
                  <li class=""><a href="/masterCalendar">Opportunities</a></li>
                  <li class=""><a href="/register">Register</a></li>
                  <li class=""><a href="/auth/login">Login</a></li>

             @endif
        </ul>
    </div>

    <!-- <nav class="navbar navbar-default">

         <div class="container-fluid">
            <!-/.Brand and toggle get grouped for better mobile display -->

            <!-- <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               <a class="navbar-brand" href="/welcome">Volunteer Now</a>
            </div>
            <! Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="defaultNavbar1">
               <ul class="nav navbar-nav">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Register<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Register as a Nonprofit</a></li>
                        <li><a href="#">Register as an Employer</a></li>
                        <li><a href="#">Register as an employee</a></li>
                     </ul>
                  </li>
                  <li class=""><a href="/employee/{{Auth::id() }}"> Dashboard </a></li>
                  <li ><a href="/masterCalendar">Opportunities<span class="sr-only">(current)</span></a>
                  <li><a href="/auth/login">Login</a></li>
                  <li><a href="/welcome">About Us</a></li>
               </ul>

            </div>
        <!-<!-->
