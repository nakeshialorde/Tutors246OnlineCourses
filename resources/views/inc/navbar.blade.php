<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Tutors246 Online Courses') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

                     <ul class="nav navbar-nav">
                       <li><a href="/Dashboard">Dashboard</a></li>
                       <li><a href="/Courses">Courses</a></li>

                         <ul class="dropdown-menu" role="menu" action="hidden">
                             <li><a href="/courseindex">Course Index</a></li>
                             <li><a href="/chapterindex">Course Index</a></li>
                             <li><a href="/chapter1index">Course Index</a></li>
                             <li><a href="/chapter2index">Course Index</a></li>
                             <li><a href="/chapter3index">Course Index</a></li>
                             <li><a href="/chapter4index">Course Index</a></li>
                             <li><a href="/chapter5index">Course Index</a></li>
                             <li><a href="/chapter6index">Course Index</a></li>
                             <li><a href="/chapter7index">Course Index</a></li>
                             <li><a href="/chapter8index">Course Index</a></li>
                             <li><a href="/chapter9index">Course Index</a></li>
                             <li><a href="/chapter10index">Course Index</a></li>
                             <li><a href="/chapter1index">Course Index</a></li>


                         </ul>

                       <li><a href="/EnrolledCourses">Enrolled Courses</a></li>
                       <li><a href="/AdminLogin">Admin Login</a></li>
                       <li><a href="/ProgressReport">Progress Report</a></li>
                       <li><a href="/Tutors">Tutors</a></li>
                     </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>  &nbsp;Login</a></li>
                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>  &nbsp;Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
