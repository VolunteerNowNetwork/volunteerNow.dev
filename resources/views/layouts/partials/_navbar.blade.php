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

             @elseif (Auth::check() && Auth::user()->user_group == "non-profit")
                 <li class=""><a href="/masterCalendar">Opportunities</a></li>
                 <li class=""><a href="/welcome">About Us</a></li>
                 <li class=""><a href="/nonprofit/{{Auth::id()}}"> Dashboard </a></li>
                 <li class=""><a href="/posts/nonprofitPost"> Create an Event </a></li>
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
