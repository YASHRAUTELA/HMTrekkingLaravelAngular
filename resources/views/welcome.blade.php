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
                    margin-top: 100px;
                }                
            }
            @media only screen and (min-width: 1200px){
                .head_margin{
                    margin-top: 40px;
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
            <!-- #header1 (views/header1.blade.php)-->
            @include('header1')
            <!-- #header1 -->
            
            <!-- start banner Area -->
            <section class="banner-area relative">
                <div class="overlay overlay-bg"></div>              
                <div class="container">
                    <div class="row fullscreen align-items-center justify-content-between">
                        <div class="col-lg-6 col-md-6 banner-left head_margin ">
                            <h6 class="text-white">Take one step to climb your desire...</h6>
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
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Find Booking Availability</a>
                              </li>
                              
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <form class="form-wrap">
                                    <select class="form-control" name="accommodation">
                                        <option>Select Accomodation</option>
                                        <option>Villas</option>
                                        <option>Mud Huts</option>
                                        <option>Tents</option>
                                    </select>
                                    
                                    <input type="text" class="form-control date-picker" name="book_from" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                                    <input type="text" class="form-control date-picker" name="book_to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">

                                    <input type="number" min="1" max="48" class="form-control" name="persons" placeholder="Persons " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Persons '">
                                    <a href="#" class="primary-btn text-uppercase">Search</a>                                   
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->

            <!-- bookings -->
            @include('booking')
            <!-- bookings -->
            
            
    
            <!-- Start blog Area -->
            <section class="recent-blog-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-9">
                            <div class="title text-center">
                                <h1 class="mb-10">Our Events</h1>
                                <p>Visitors got great experience here</p>
                            </div>
                        </div>
                    </div>                          
                    <div class="row">
                        <div class="active-recent-blog-carusel">
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('images/tourist/t11.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('images/tourist/t12.jpg')}}" alt="">
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('images/tourist/t13.jpg')}}" alt="">
                                </div>  
                            </div>  
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('images/tourist/t14.jpg')}}" alt="">
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('images/tourist/t15.jpg')}}" alt="">
                                </div>  
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="{{asset('images/tourist/t16.jpg')}}" alt="">
                                </div>  
                            </div>                                                      

                        </div>
                    </div>
                </div>  
            </section>
            <!-- End recent-blog Area -->           

            <!-- footer -->    
            @include('footer')
            <!-- footer -->    

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