<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=1.0">
    <title>{{ $tags['title'] }}</title>
    <link rel="icon" href="{{ asset('frontend/images/title_logo.svg') }}" type="image/icon type">
    <meta name="author" content="https://www.mypcot.com">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="{{ $tags['keywords'] }}">
    <link rel="canonical" href="{{ $tags['canonical'] }}"/>
    <meta name="description" content="{{ $tags['description'] }}">

    <!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

	<!---Timeline CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/timeline.css') }}">

	<style>
		div:where(.swal2-icon) {
			margin: 0.5em auto .6em !important;
		}
		div:where(.swal2-container) div:where(.swal2-popup) {
			width: 20em !important;
		}
	</style>

</head>
<body>
    <!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{ config('global.base_path') }}">
								<img class="logo-default p-1" src="{{ asset('frontend/images/logoUme1.svg') }}" alt="Ume Logo">
							</a>
						</div>
						<!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item mega-menu">
									<a class="menu-link" href="{{ config('global.base_path') }}"><div>Home</div></a>
								</li>
								<li class="menu-item">

									<span class="menu-link" style="cursor: pointer;"><div>Who We Are</div></span>
										<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="about"><div>About US</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="our_history"><div>Our History</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="awards"><div>Awards and Recognition</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="csr"><div>CSR of the company</div></a>
										</li>
										</ul>
								</li>
								<li class="menu-item">
									<span class="menu-link" style="cursor: pointer;"><div>Our Services</div></span>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="fund_raising"><div>Fund Raisings</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="ipo_consulting"><div>IPO Consulting</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="corporate_treasury"><div>Corporate Treasury</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="fund_investment"><div>Fund Investments</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="legal_consulting"><div>Legal Consulting</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="technology_system"><div>Technology systems</div></a>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<span class="menu-link" style="cursor: pointer;"><div>Media</div></span>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="gallery"><div>Gallery</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="events"><div>Events</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="blogs"><div>Blogs</div></a>
										</li>
									</ul>
								</li>

								<li class="menu-item mega-menu">
									<a class="menu-link" href="careers"><div>Careers</div></a>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="contact_us"><div>Contact Us</div></a>
								</li>
							</ul>

						</nav>
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
        @yield('content')
        <!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget">

										<img src="{{ asset('frontend/images/footerLogo.svg') }}" alt="footerLogo" class="footer-logo">
										<div style="background: url('frontend/images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												{{ config('global.company_address') }}
											</address>
											<p class="mb-4"><i class="bi-envelope"></i> {{ config('global.email') }}</p>


										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="blogs">Individual Fundraising Ideas</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th feb 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="blogs">IPO Analysis from Seeking Alpha</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>24th feb 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="col-md-4">
									<div>
										<h4>Other Pages</h4>
										<ul>
											<li style="list-style-type:disc;"><a href="terms"><p class="mb-3">Terms &amp; Conditions</p></a></li>
											<li style="list-style-type:disc;"><a href="privacy"><p class="mb-3">Privacy &amp; Policy</p></a></li>
											<li style="list-style-type:disc;"><a href="sitemap"><p class="mb-3">SiteMap</p></a></li>
											<li style="list-style-type:disc;"><a href="disclaimer"><p class="mb-3">Disclaimer</p></a></li>
											<li style="list-style-type:disc;"><a href="scam"><p class="mb-3">Scam Notice</p></a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="saveSubscriber" action="{{route('subscribe')}}" method="post" class="mb-0">
											@csrf
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="bi-envelope-plus"></i></div>
												<input type="email" id="subscriber_email" name="subscriber_email" class="form-control required email" placeholder="Enter your Email">
												<button type="button" class="btn btn-primary" onclick="submitForm('saveSubscriber','post','1')">Subscribe</button>
											</div>
										</form>
									</div>
									<div class="col-md-12 text-md-start mt-4">
										<div class="d-flex justify-content-center justify-content-md-start mt-2">
											<a href="{{config('footers.facebook_url')}}" target="_blank" title="facebook" class="social-icon border-transparent si-small h-bg-facebook">
												<i class="fa-brands fa-facebook-f"></i>
												<i class="fa-brands fa-facebook-f"></i>
											</a>

											<a href="{{config('footers.twitter_url')}}" target="_blank" title="twitter" class="social-icon border-transparent si-small h-bg-twitter">
												<i class="fa-brands fa-twitter"></i>
												<i class="fa-brands fa-twitter"></i>
											</a>

											<a href="{{config('footers.google_url')}}" target="_blank" title="google" class="social-icon border-transparent si-small h-bg-google">
												<i class="fa-brands fa-google"></i>
												<i class="fa-brands fa-google"></i>
											</a>

											<a href="{{config('footers.pinterest_url')}}" target="_blank" title="pinterest" class="social-icon border-transparent si-small h-bg-pinterest">
												<i class="fa-brands fa-pinterest-p"></i>
												<i class="fa-brands fa-pinterest-p"></i>
											</a>

											<a href="{{config('footers.yahoo_url')}}" target="_blank" title="yahoo" class="social-icon border-transparent si-small h-bg-yahoo">
												<i class="fa-brands fa-yahoo"></i>
												<i class="fa-brands fa-yahoo"></i>
											</a>

											<a href="{{config('footers.linkedin_url')}}" target="_blank" title="linkedin" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
												<i class="fa-brands fa-linkedin"></i>
												<i class="fa-brands fa-linkedin"></i>
											</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="text-center">
					Copyrights &copy; <?php echo date('Y'); ?> All Rights Reserved by UME Solutions Inc.
				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->

	<script src="{{ asset('frontend/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('frontend/js/custom.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/js/functions.js') }}"></script>
	<script src="{{asset('frontend/js/alert.js')}}"></script>
</body>
</html>
