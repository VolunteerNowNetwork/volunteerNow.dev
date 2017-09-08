    <div id="navbar" class="collapse navbar-collapse" style="background-color: #c7c5c4; color: white;">

         <ul class="nav navbar-nav">

            @if (Auth::check())
                <li class=""><a href="/masterCalendar">Opportunities</a></li>
                <li class=""><a href="/auth/logout">Logout</a></li>
                <li class=""><a href="/welcome">About Us</a></li>
                @if(user == employee )
                <li class=""><a href="/employee/{{Auth::id() }}"> Profile </a></li>
                @elseif (user == employer)
                <li class=""><a href="/employer/{{Auth::id() }}"> Profile </a></li>
                @elseif(user == nonprofit)
                <li class=""><a href="/employer/{{Auth::id() }}"> Profile </a></li>
                @endif
            @else
            <li class=""><a href="/register">Register</a></li>
            <li class=""><a href="/masterCalendar">Opportunities</a></li>
            <li class=""><a href="/auth/login">Login</a></li>
                <li class=""><a href="/welcome">About Us</a></li>
            @endif

        </ul>

        <form class="navbar-form navbar-left" action="" role="search">
            <div class="form-group">
                <input type="q" class="form-control" name="q" id="q" placeholder="Search">
            </div>

            <button type="submit" class="btn btn-default">
                <i class="glyphicon glyphicon-search"></i>
            </button>
        </form>
    </div>
