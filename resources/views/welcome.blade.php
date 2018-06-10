    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{asset('travelista/img/fav.png')}}">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>High mountain Trekking Camp Nainital Uttarakhand</title>

        <style type="text/css">
            @media only screen and (min-width: 768px) {
                .myClass {
                    margin-top: 140px;
                }

                .mylogo{
                    height: 50px; 
                    width:250px;
                }
            }
            @media only screen and (max-width: 767px){
                .mylogo{
                    height: 50px;
                    width: 250px;

                }
                .logo_div{
                    margin-bottom: 10px;
                }
            }
            @media only screen and (min-width: 768px) and (max-width: 991px){
                .head_margin{
                    margin-top: 230px;
                }                
            }
            @media only screen and (max-width: 767px){
                .head_margin{
                    margin-top: 20px;
                }   
            }
            @media only screen and (min-width: 992px){
                .head_margin{
                    margin-top: 120px;
                }
            }


        </style>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="{{asset('travelista/css/linearicons.css')}}">
            <link rel="stylesheet" href="{{asset('travelista/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('travelista/css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{asset('travelista/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('travelista/css/jquery-ui.css')}}">                
            <link rel="stylesheet" href="{{asset('travelista/css/nice-select.css')}}">                          
            <link rel="stylesheet" href="{{asset('travelista/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('travelista/css/owl.carousel.css')}}">             
            <link rel="stylesheet" href="{{asset('travelista/css/main.css')}}">
        </head>
        <body>  
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
                          <li><a href="#">About Us</a></li>
                          <li><a href="#">Packages</a></li>
                          <li><a href="#">Aminities</a></li>
                          <li class="menu-has-children"><a href="#">Photo Gallery</a>
                            <ul>
                              <li><a href="{{route('camp_pics')}}">Our Camp</a></li>
                              <li><a href="{{route('tourist_pics')}}">Tourists</a></li>
                            </ul>
                          </li>                                                                      
                          <li><a href="#">Contact Us</a></li>

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
            </header><!-- #header -->
            
            <!-- start banner Area -->
            <section class="banner-area relative">
                <div class="overlay overlay-bg"></div>              
                <div class="container">
                    <div class="row fullscreen align-items-center justify-content-between">
                        <div class="col-lg-6 col-md-6 banner-left">
                            <h6 class="text-white head_margin">Take one step to climb your desire...</h6>
                            <h1 class="text-white">Best Ever Trekking</h1>
                            <p class="text-white" style="text-align-last: center;">
                                Offering a garden, High mountain Trekking Camp offers pet-friendly accommodation in Nainital. There is a restaurant and guests can have fun at the games room. Naini Lake is 3.4 km from the property.
                            </p>
                            <p class="text-white" style="text-align-last: center;">
                                High mountain Trekking Camp also includes a barbecue. Guests can enjoy the on-site restaurant, with special diet menus and packed lunches available on request.
                            </p>
                            <p class="text-white" style="text-align-last: center;">
                                The property has water sports facilities and bike hire is available. You can play darts at the property, and the area is popular for horse riding and cycling.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">Book Trip</a>
                        </div>
                        <div class="col-lg-4 col-md-6 banner-right">
                            <ul class="nav nav-tabs myClass" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Check Availability</a>
                              </li>
                              <!-- <li class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Holidays</a>
                              </li> -->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <form class="form-wrap">
                                    <select class="form-control" name="accommodation" placeholder="Select Accomodation" onfocus="this.placeholder=''" onblur="this.placeholder='Select Accomodation'">
                                        <option>Villas</option>
                                        <option>Mud Huts</option>
                                        <option>Tents</option>
                                    </select>
                                    
                                    <input type="text" class="form-control date-picker" name="book_from" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                                    <input type="text" class="form-control date-picker" name="book_to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">                          
                                    <a href="#" class="primary-btn text-uppercase">Search</a>                                   
                                </form>
                              </div>
                              <!-- <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">                                    
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">                      
                                    <a href="#" class="primary-btn text-uppercase">Search Hotels</a>                                    
                                </form>                             
                              </div>
                              <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">                                    
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">                          
                                    <a href="#" class="primary-btn text-uppercase">Search Holidays</a>                                  
                                </form>                             
                              </div> -->
                            </div>
                        </div>
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->

            <!-- Start popular-destination Area -->
            <section class="popular-destination-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Bookings</h1>
                                <p>Book your desirable place to enjoy beauty of village life in Nainital during trekking camp.</p>
                            </div>
                        </div>
                    </div>                      
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-destination relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('images/camp/c1.jpg')}}" alt="">
                                </div>
                                <div class="desc">  
                                    <a href="#" class="price-btn">Book Now</a>          
                                    <h4>Tent House</h4>
                                    <p>One Person</p>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-destination relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('images/camp/c2.jpg')}}" alt="">
                                </div>
                                <div class="desc">  
                                    <a href="#" class="price-btn">Book Now</a>          
                                    <h4>Tent house</h4>
                                    <p>Two Person</p>            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-destination relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('images/camp/c3.jpg')}}" alt="">
                                </div>
                                <div class="desc">  
                                    <a href="#" class="price-btn">Book Now</a>          
                                    <h4>Mud House</h4>
                                    <p>Max Three Person</p>
                                </div>
                            </div>
                        </div>                                              
                    </div>
                </div>  
            </section>
            <!-- End popular-destination Area -->
            

            <!-- Start price Area -->
            <section class="price-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">We Provide Affordable Prices</h1>
                                <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
                            </div>
                        </div>
                    </div>                      
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-price">
                                <h4>Cheap Packages</h4>
                                <ul class="price-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>New York</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Maldives</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Sri Lanka</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Nepal</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Thiland</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>   
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Singapore</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>                                                       
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price">
                                <h4>Luxury Packages</h4>
                                <ul class="price-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>New York</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Maldives</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Sri Lanka</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Nepal</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Thiland</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>   
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Singapore</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>                                                       
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price">
                                <h4>Camping Packages</h4>
                                <ul class="price-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>New York</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Maldives</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Sri Lanka</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Nepal</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Thiland</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>   
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Singapore</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>                                                       
                                </ul>
                            </div>
                        </div>                                              
                    </div>
                </div>  
            </section>
            <!-- End price Area -->
            

            <!-- Start other-issue Area -->
            <section class="other-issue-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-9">
                            <div class="title text-center">
                                <h1 class="mb-10">Other issues we can help you with</h1>
                                <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/o1.jpg')}}" alt="">                 
                                </div>
                                <a href="#">
                                    <h4>Rent a Car</h4>
                                </a>
                                <p>
                                    The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/o2.jpg')}}" alt="">                 
                                </div>
                                <a href="#">
                                    <h4>Cruise Booking</h4>
                                </a>
                                <p>
                                    I was always somebody who felt quite sorry for myself, what I had not got compared.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/o3.jpg')}}" alt="">                 
                                </div>
                                <a href="#">
                                    <h4>To Do List</h4>
                                </a>
                                <p>
                                    The following article covers a topic that has recently moved to center stage–at least it seems.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/o4.jpg')}}" alt="">                 
                                </div>
                                <a href="#">
                                    <h4>Food Features</h4>
                                </a>
                                <p>
                                    There are many kinds of narratives and organizing principles. Science is driven by evidence.
                                </p>
                            </div>
                        </div>                                                                      
                    </div>
                </div>  
            </section>
            <!-- End other-issue Area -->
            

            <!-- Start testimonial Area -->
            <section class="testimonial-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Testimonial from our Clients</h1>
                                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="active-testimonial">
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/elements/user1.png')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.            
                                    </p>
                                    <h4>Harriet Maxwell</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>                
                                    </div>  
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/elements/user2.png')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                    </p>
                                    <h4>Carolyn Craig</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>            
                                    </div>  
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/elements/user1.png')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.            
                                    </p>
                                    <h4>Harriet Maxwell</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>                
                                    </div>  
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/elements/user2.png')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                    </p>
                                    <h4>Carolyn Craig</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>            
                                    </div>  
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/elements/user1.png')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.            
                                    </p>
                                    <h4>Harriet Maxwell</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>                
                                    </div>  
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/elements/user2.png')}}" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                    </p>
                                    <h4>Carolyn Craig</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>            
                                    </div>  
                                </div>
                            </div>                                                      
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonial Area -->

            <!-- Start home-about Area -->
            <section class="home-about-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-lg-6 col-md-12 home-about-left">
                            <h1>
                                Did not find your Package? <br>
                                Feel free to ask us. <br>
                                We‘ll make it for you
                            </h1>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">request custom price</a>
                        </div>
                        <div class="col-lg-6 col-md-12 home-about-right no-padding">
                            <img class="img-fluid" src="{{asset('travelista/img/about-img.jpg')}}" alt="">
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End home-about Area -->
            
    
            <!-- Start blog Area -->
            <section class="recent-blog-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-9">
                            <div class="title text-center">
                                <h1 class="mb-10">Latest from Our Blog</h1>
                                <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
                            </div>
                        </div>
                    </div>                          
                    <div class="row">
                        <div class="active-recent-blog-carusel">
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/b1.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>                                           
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/b2.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>                                           
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/b3.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>                                           
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>  
                            </div>  
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/b1.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>                                           
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/b2.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>                                           
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('travelista/img/b3.jpg')}}" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>                                           
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>  
                            </div>                                                      

                        </div>
                    </div>
                </div>  
            </section>
            <!-- End recent-blog Area -->           

            <!-- start footer Area -->      
            <footer class="footer-area section-gap">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>About Agency</h6>
                                <p>
                                    The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Navigation Links</h6>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Feature</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>                                      
                                </div>                          
                            </div>
                        </div>                          
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>
                                <p>
                                    For business professionals caught between high OEM price and mediocre print and graphic output.                                 
                                </p>                                
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                        <div class="input-group d-flex flex-row">
                                            <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                            <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>      
                                        </div>                                  
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget mail-chimp">
                                <h6 class="mb-20">InstaFeed</h6>
                                <ul class="instafeed d-flex flex-wrap">
                                    <li><img src="{{asset('travelista/img/i1.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i2.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i3.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i4.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i5.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i6.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i7.jpg')}}" alt=""></li>
                                    <li><img src="{{asset('travelista/img/i8.jpg')}}" alt=""></li>
                                </ul>
                            </div>
                        </div>                      
                    </div>

                    <div class="row footer-bottom d-flex justify-content-between align-items-center">
                        <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        <div class="col-lg-4 col-sm-12 footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->    

            <script src="{{asset('travelista/js/vendor/jquery-2.2.4.min.js')}}"></script>
            <script src="{{asset('travelista/js/popper.min.js')}}"></script>
            <script src="{{asset('travelista/js/vendor/bootstrap.min.js')}}"></script>          
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>     
            <script src="{{asset('travelista/js/jquery-ui.js')}}"></script>                 
            <script src="{{asset('travelista/js/easing.min.js')}}"></script>            
            <script src="{{asset('travelista/js/hoverIntent.js')}}"></script>
            <script src="{{asset('travelista/js/superfish.min.js')}}"></script> 
            <script src="{{asset('travelista/js/jquery.ajaxchimp.min.js')}}"></script>
            <script src="{{asset('travelista/js/jquery.magnific-popup.min.js')}}"></script>                     
            <script src="{{asset('travelista/js/jquery.nice-select.min.js')}}"></script>                    
            <script src="{{asset('travelista/js/owl.carousel.min.js')}}"></script>                          
            <script src="{{asset('travelista/js/mail-script.js')}}"></script>   
            <script src="{{asset('travelista/js/main.js')}}"></script>  
        </body>
    </html>