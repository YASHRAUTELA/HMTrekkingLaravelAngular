@extends('layouts.myApp')

@section('myApp_style')
<style type="text/css">
    @media only screen and (min-width: 768px){
        .cross{
                    font-size: 80px;
                }
    }
    @media only screen and (max-width: 767px){
        .cross{
                    font-size: 50px;
                }   
        .top-50{
            margin-top: 50px;
        }

        .right-200{
            width: 600px;   
        }
    }
</style>
@endsection

@section('myApp_content')

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

@endsection

@section('myApp_script')
<script type="text/javascript">
    function myFunction(){

    }
</script>
@endsection