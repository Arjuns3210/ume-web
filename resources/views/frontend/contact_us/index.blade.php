@extends('frontend/layouts/app')
@section('content')

<section class="page-title" style="background-image: url('frontend/images/contactUs.jpg'); background-size: cover; background-position: top left;">
    <div class="container">
		<div class="page-title-row">
			<div class="page-title-content">
				<h1 class="text-light">Contact Us</h1>
            </div>
		</div>
    </div>
</section>
<!-- .page-title end -->
<!-- Contact Form Section
============================================= -->
<section id="map-overlay">
	<div class="container">
		<div class="row">
		    <!-- Contact Form Overlay
	          ============================================= -->
			<div class="contact-form-overlay col-lg-8 p-5">
				<div class="fancy-title title-border">
					<h3><span>Send us an Email</span></h3>
				</div>
				<div class="form-widget">
				<div class="form-result"></div>
					<!-- Contact Form
					============================================= -->
					
					<form class="row mb-0" id="saveContact" action="{{ route('contact_us.saveContacts') }}" method="post">
						@csrf
					    <div class="col-md-6 form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<input type="text" maxlength="50" id="name" pattern="[A-Za-z]+" name="name" value="" class="required form-control" oninput="validateNameInput(this)">
						</div>

						<div class="col-md-6 form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<input type="email" maxlength="50" id="email" name="email" value="" class="required email form-control">
						</div>
						<div class="col-md-6 form-group">
							<label for="phone">Phone</label><br>
							<div class="row">
								<div class="col-lg-2 col-md-3 col-2">
									<input type='text' disabled value="+91">
								</div>
								<div class="col-lg-10 col-md-9 col-10">
								<input class="form-control" type="text" maxlength="10" min="10" oninput="filterNonNumeric(this)" id="phone" name="phone" value="">
								</div>
							</div>
						</div>

						<div class="col-md-6 form-group">
							<label for="service">Services</label>
							<select id="service" name="services" class="form-select">
								<option value="">-- Select One --</option>
								<option value="fund Raising">Fund Raising</option>
								<option value="ipo Consulting">Ipo Consulting</option>
								<option value="Corporate Treasury">Corporate Treasury</option>
								<option value="Fund Investments">Fund Investments</option>
                                <option value="Legal Consulting">Legal Consulting</option>
                                <option value="Technology systems">Technology systems</option>
								<option value="Others">Others</option>
							</select>								
						</div>
						<div class="w-100"></div>
						<div class="col-12 form-group">
							<label for="subject">Subject <span class="text-danger">*</span></label>
							<input type="text" maxlength="50" id="subject" name="subject" value="" class="required form-control">
						</div>

						<div class="col-12 form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<textarea class="required form-control" id="message" name="message" rows="6" cols="30" maxlength="250"></textarea>
						</div>

						<div class="col-12 form-group d-none">
							<input type="text" id="botcheck" name="" value="" class="form-control">
						</div>

						<div class="col-12 form-group">
							<button class="button button-3d m-0" type="button" onclick="submitForm('saveContact','post')">Send Message</button>
						</div>

					</form>
				</div>
			</div>
				<!-- Sidebar
				============================================= -->
		    <div class="col-lg-1"></div>
		    <aside class="sidebar col-lg-3">
			    <address>
				<strong>Address:</strong><br>
				{{ config('global.company_address') }}
                </address>
			    <abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ config('global.contact_no') }}<br>
                <abbr title="Fax"><strong>Fax:</strong></abbr> {{ config('global.fax') }}<br>
                <abbr title="Email Address"><strong>Email:</strong></abbr> {{ config('global.email') }}
			    <div class="widget border-0 pt-0">

			    	<a href="{{config('footers.facebook_url')}}" target="_blank" class="social-icon border-transparent bg-dark si-small h-bg-facebook">
						<i class="fa-brands fa-facebook-f"></i>
						<i class="fa-brands fa-facebook-f"></i>
					</a>

					<a href="{{config('footers.twitter_url')}}" target="_blank" class="social-icon border-transparent bg-dark si-small h-bg-twitter">
						<i class="fa-brands fa-twitter"></i>
						<i class="fa-brands fa-twitter"></i>
					</a>

					<a href="{{config('footers.google_url')}}" target="_blank" class="social-icon border-transparent bg-dark si-small h-bg-google">
						<i class="fa-brands fa-google"></i>
						<i class="fa-brands fa-google"></i>
					</a>

					<a href="{{config('footers.pinterest_url')}}" target="_blank" class="social-icon border-transparent bg-dark si-small h-bg-pinterest">
						<i class="fa-brands fa-pinterest-p"></i>
						<i class="fa-brands fa-pinterest-p"></i>
					</a>

					<a href="{{config('footers.linkedin_url')}}" target="_blank" class="social-icon border-transparent bg-dark si-small me-0 h-bg-linkedin">
						<i class="fa-brands fa-linkedin"></i>
						<i class="fa-brands fa-linkedin"></i>
					</a>

				</div>
		    </aside><!-- .sidebar end -->
		</div>

		</div>
    </div>
</section>
@endsection
