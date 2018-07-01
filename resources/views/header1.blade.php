<!-- #header1 -->
<header id="header">
  <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo" class="logo_div">
          <a href="#"><img src="{{asset('travelista/img/hmtrekking_logo.png')}}" class="mylogo" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="{{route('main')}}">Home</a></li>
            <li><a href="{{route('about_us')}}">About Us</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Amenities</a></li>
            <li class="menu-has-children"><a href="#">Photo Gallery</a>
              <ul>
                <li><a href="{{route('camp_pics')}}">Our Camp</a></li>
                <li><a href="{{route('tourist_pics')}}">Tourists</a></li>
              </ul>
            </li>                                                                      
            <li><a href="{{url('/contact_us')}}">Contact Us</a></li>

            <li class="menu-has-children" >
              <a href="#" ><i class="fa fa-user-circle" style="font-size: 1.3em; "></i></a>
              <ul>
              @guest
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
                  <li><h6 style="color: white;">{{Auth::user()->name}}</h6></li>
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
              @endguest
              </ul>
            </li>

          </ul>
        </nav><!-- #nav-menu-container -->                                  
      </div>
  </div>
</header>
<!-- #header1 -->