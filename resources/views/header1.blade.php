<!-- #header1 -->
<header id="header">
  <div class="header-top">
      <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6 col-sm-6 col-6 header-top-left">
              <ul>
                  <li><a href="#">Visit Us</a></li>
                  <li><a href="#">Buy Tickets</a></li>
              </ul>           
          </div>
          <div class="col-lg-6 col-sm-6 col-6 header-top-right">
              <div class="header-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                  <a href="#"><i class="fa fa-behance"></i></a>
              </div>
          </div>
      </div>                              
      </div>
  </div>
  <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo" class="logo_div">
          <a href="index.html"><img src="{{asset('travelista/img/hmtrekking_logo.png')}}" class="mylogo" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="#">Home</a></li>
            <li><a href="{{route('about_us')}}">About Us</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Aminities</a></li>
            <li class="menu-has-children"><a href="#">Photo Gallery</a>
              <ul>
                <li><a href="{{route('camp_pics')}}">Our Camp</a></li>
                <li><a href="{{route('tourist_pics')}}">Tourists</a></li>
              </ul>
            </li>                                                                      
            <li><a href="{{route('contact_us')}}">Contact Us</a></li>

            <li class="menu-has-children">
              <a href="#"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 1.3em;"></i></a>
              <ul>
              @guest
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
              @else
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