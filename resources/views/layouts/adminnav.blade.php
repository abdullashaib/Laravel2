<!-- Admin Member Menu -->
<li><a href="{{ route('register') }}">Register</a></li>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Role <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/roles/create">Add Role</a></li>
    <li><a href="/roles">Role List</a></li>
  </ul>
</li>


<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Polling Stations <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/pollings/create">Add Polling</a></li>
    <li><a href="/pollings">Polling Station List</a></li> 
    <li><a href="/pollings">Voter in Polling Station</a></li>
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shehia <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/shehias/create">Add Shehis</a></li>
    <li><a href="/shehias">Shehia List</a></li> 
    <li><a href="/pollings">Voter in Shehia</a></li>
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Word <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/words/create">Add Word</a></li>
    <li><a href="/words">Word List</a></li> 
    <li><a href="/pollings">Voter in Word</a></li>
  </ul>
</li>

                            
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Constituent <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/constituents/create">Add Constituent</a></li>
    <li><a href="/constituents">Constituents List</a></li> 
    <li><a href="/listshehia">List of Shehia in Constituent</a></li> 
    <li><a href="/listpolling">List of Pollings in Constituent</a></li>
  </ul>
</li>
                            
                            
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Voters <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="/voters/{{Auth::user()->firstname}}/votersList">Make Payment</a></li>
    <li><a href="/payments/create">Make Payment</a></li>
    <li><a href="/payments/create">Make Payment</a></li>
    <li><a href="/payments/create">Make Payment</a></li>
    <li><a href="/payments/create">Make Payment</a></li>
  </ul>
</li>
                            
<!-- End Member Menu -->
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