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
            .top10{
                    margin-top: 10px;
                }



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
            <!-- header (views/header1.blade.php)-->            
            @include('header1')
            <!-- header -->

            <!-- header (views/header2.blade.php)-->
            @include('header2')
            <!-- header -->

            @yield('content')
            
            <!-- bookings (views/booking.blade.php)-->
            @include('booking')
            <!-- bookings -->
            
            <!-- footer (views/footer.blade.php)-->    
            @include('footer')
            <!-- footer -->    
                

            <script src="{{asset('travelista/js/vendor/jquery-2.2.4.min.js')}}"></script>
            <script src="{{asset('travelista/js/popper.min.js')}}"></script>
            <script src="{{asset('travelista/js/vendor/bootstrap.min.js')}}"></script>
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