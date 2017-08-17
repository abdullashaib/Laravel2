<nav class="navbar navbar-default navbar-static-top">
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
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @elseif(Auth::user()->role_id == 1)
                            @include('layouts.adminnav')   
                        @else
                            <!-- Admin Member Menu -->
                            <!--
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Role <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/roles/create">Add Role</a></li>
                                    <li><a href="/roles">Role List</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Student <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                   <li><a href="/students/create">Add Student</a></li>
                                   <li><a href="/students">Student List</a></li> 
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Add Teacher <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                   <li><a href="/teachers/create">Add Teacher</a></li>
                                   <li><a href="/teachers">Teacher List</a></li> 
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Course <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                   <li><a href="/courses/create">Add Course</a></li>
                                   <li><a href="/courses">Course List</a></li> 
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Payment <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                   <li><a href="/payments/create">Make Payment</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="logged_name">{{ Auth::user()->firstname . " " . Auth::user()->lastname }}</span> <span class="caret"></span>
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
                            -->
                        @endif
                    </ul>
                </div>
            </div>
</nav>


