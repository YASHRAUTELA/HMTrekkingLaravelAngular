@extends('layouts.main')

@section('content')

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27812.35419749485!2d79.43776109948814!3d29.383630151004365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a0a1bc28fd9d61%3A0x7cae7ba916987db3!2sNainital%2C+Uttarakhand!5e0!3m2!1sen!2sin!4v1528690722574" height="300" class="right-200" frameborder="0" style="border:0" allowfullscreen></iframe>	
				</div>
			</div>
			<div class="col-md-7 top-50">
				<div class="row">
					<div class="col-lg-5 d-flex flex-column address-wrap">
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-home"></span>
							</div>
							<div class="contact-details">
								<h5>Nainital, Uttarakhand, India</h5>
								<p>
									Near Nainital Lake
								</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-phone-handset"></span>
							</div>
							<div class="contact-details">
								<h5>+91 9811719767</h5>
								<p>Mon to Sat 9am to 6 pm</p>
							</div>
						</div>
						<div class="single-contact-address d-flex flex-row">
							<div class="icon">
								<span class="lnr lnr-envelope"></span>
							</div>
							<div class="contact-details">
								<h5>support@hmtrekking.com</h5>
								<p>Send us your query anytime!</p>
							</div>
						</div>														
					</div>

					<div class="col-lg-7 ">
						<form class="form-area contact-form text-right" action="{{url('/contact_us')}}" method="post">
							{{csrf_field()}}
							<div class="row">	
								<div class="col-lg-6 form-group">
									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"  type="text" value="{{ old('name') }}">
										@if ($errors->has('name'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('name') }}</strong>
		                                    </span>
		                                @endif
									</div>
									
									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"  type="email" value="{{ old('email') }}">
										@if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>

									<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control"  type="text" value="{{ old('subject') }}">
										@if ($errors->has('subject'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('subject') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>

								<div class="col-lg-6 form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
									<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" value="{{ old('message') }}"></textarea>				
									@if ($errors->has('message'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('message') }}</strong>
	                                    </span>
	                                @endif
								</div>
								<div class="col-lg-12">

									
									<button type ="submit" value="submit"class="genric-btn primary" style="float: right;">Send Message</button>											

								</div>
								<div class="col-lg-12">
									<div class="alert-msg" style="text-align: left;">
										@if(session('status'))
										<div class="alert alert-success">
										  <strong>Success!</strong> {{session('status')}}.
										</div>
										@endif
									</div>
								</div>
							</div>
						</form>	
					</div>
				</div>
			</div>	
		</div>
		
	</div>	
</section>
<!-- End contact-page Area -->

@endsection