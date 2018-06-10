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
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

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
                          <li class="menu-has-children"><a href="#">Photo Gallary</a>
                            <ul>
                              <li><a href="#">Our Camp</a></li>
                              <li><a href="#">Tourists</a></li>
                            </ul>
                          </li>                                                                      
                          <li><a href="#">Contact Us</a></li>
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
                            
                        </div>
                </div>                  
            </section>
            <!-- End banner Area -->

            <!-- gallary -->
            <section class="section-gap">
                <h2 style="text-align:center">Our Camps</h2>

                <div class="container">
                    <div class="row">
                      <div class="column">
                        <img src="{{asset('images/camp/c1.jpg')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                      </div>
                      <div class="column">
                        <img src="{{asset('images/camp/c2.jpg')}}" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                      </div>
                      <div class="column">
                        <img src="{{asset('images/camp/c3.jpg')}}" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                      </div>
                      <div class="column">
                        <img src="{{asset('images/camp/c4.jpg')}}" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                      </div>
                      <div class="column">
                        <img src="{{asset('images/camp/c5.jpg')}}" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                      </div>
                      <div class="column">
                        <img src="{{asset('images/camp/c6.jpg')}}" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                      </div>
                    </div>

                    <!-- modal -->
                    <div id="myModal" class="modal">
                      <span class="close cursor" onclick="closeModal()">&times;</span>
                      <!-- modal content -->
                      <div class="modal-content">

                        <div class="mySlides">
                          <div class="numbertext">1 / 6</div>
                          <img src="{{asset('images/camp/c1.jpg')}}" style="width:100%">
                        </div>

                        <div class="mySlides">
                          <div class="numbertext">2 / 6</div>
                          <img src="{{asset('images/camp/c2.jpg')}}" style="width:100%">
                        </div>

                        <div class="mySlides">
                          <div class="numbertext">3 / 6</div>
                          <img src="{{asset('images/camp/c3.jpg')}}" style="width:100%">
                        </div>
                        
                        <div class="mySlides">
                          <div class="numbertext">4 / 6</div>
                          <img src="{{asset('images/camp/c4.jpg')}}" style="width:100%">
                        </div>
                        
                        <div class="mySlides">
                          <div class="numbertext">5 / 6</div>
                          <img src="{{asset('images/camp/c5.jpg')}}" style="width:100%">
                        </div>

                        <div class="mySlides">
                          <div class="numbertext">6 / 6</div>
                          <img src="{{asset('images/camp/c6.jpg')}}" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                          <p id="caption"></p>
                        </div>
                        
                        <div class="container-fluid">
                            <div class="column">
                              <img class="demo cursor" src="{{asset('images/camp/c1.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{asset('images/camp/c2.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{asset('images/camp/c3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{asset('images/camp/c4.jpg')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{asset('images/camp/c5.jpg')}}" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                            </div>
                            <div class="column">
                              <img class="demo cursor" src="{{asset('images/camp/c6.jpg')}}" style="width:100%" onclick="currentSlide(6)" alt="Snow">
                            </div>    
                        </div>

                      </div>
                      <!-- modal content -->
                    </div>  
                    <!-- modal -->      
                </div>
            </section>
            
            <!-- gallary -->            


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
            

            <!-- bootstrap-modal-pop-up -->
            <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            Travel
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                            <div class="modal-body">
                                <img src="{{asset('travel_trip/images/g7.jpg')}}" alt=" " class="img-responsive" />
                                <p>Ut enim ad minima veniam, quis nostrum 
                                    exercitationem ullam corporis suscipit laboriosam, 
                                    nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                    vel eum iure reprehenderit qui in ea voluptate velit 
                                    esse quam nihil molestiae consequatur, vel illum qui 
                                    dolorem eum fugiat quo voluptas nulla pariatur.
                                    <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
                                        esse quam nihil molestiae consequatur.</i></p>
                            </div>
                    </div>
                </div>
            </div>
        <!-- //bootstrap-modal-pop-up -->  
                
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
            <script type="text/javascript" src="{{asset('js/myScript.js')}}"></script>
        </body>
    </html>