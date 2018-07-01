@extends('layouts.main')

@section('content')
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 info-left">
				<img class="img-fluid" src="{{asset('travelista/img/about/info-img.jpg')}}" alt="">
			</div>
			<div class="col-lg-6 info-right">
				<h6>About Us</h6>
				<h1>Who We Area?</h1>
				<p>
					Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
				</p>
			</div>
		</div>
	</div>	
</section>
<!-- End about-info Area -->

<!-- about us video  -->
<section class="about-info-area section-gap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-6 col-lg-6 info-left">
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2VRxtJID0VY" allowfullscreen></iframe>
				</div>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 info-left">
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fW8p5CE0uok" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- about us video  -->

@endsection