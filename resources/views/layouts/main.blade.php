@extends('layouts.myApp')

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