@extends('frontend/layouts/app')
@section('content')
<section id="slider" class="slider-element slider-parallax include-header min-vh-100" style="background: url('frontend/images/main_bg.png') no-repeat; background-size: cover; ">
    <div class="slider-inner">

        <div class="vertical-middle slider-element-fade">
            <div class="container dark text-center">

                <div class="heading-block mb-0 text-center">
                    <h1>
                        <span class="text-rotater" style="color: #133550;" data-separator="|" data-rotate="flipInX" data-speed="3500">
                            UME makes your Business <span class="t-rotate">Simple|Customizable|Flexible|Easy|Profitable</span>
                        </span>
                    </h1>
                    <span class="d-none d-md-block" style="color: #124166;">Learn how to manage your funds in an efficient way.</span>
                </div>

                <a href="#startHome" class="button button-border button-light button-rounded button-reveal text-end button-large mt-5 d-none d-md-inline-block"><i class="uil uil-angle-right-b"></i><span>Start Tour</span></a>

            </div>
        </div>

    </div>
</section>

<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

				<div class="container">

					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="fund_raising"><i class="fa-solid fa-hand-holding-dollar"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Fund Raisings<span class="subtitle">Fundraising at your fingertips!</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="ipo_consulting"><i class="fa-solid fa-money-bill-trend-up"></i></a>
								</div>
								<div class="fbox-content">
									<h3>IPO Consulting<span class="subtitle">Our Approach to IPO Consulting</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="legal_consulting"><i class="fa-solid fa-layer-group"></i></i></a>
								</div>
								<div class="fbox-content">
									<h3>Legal Consulting<span class="subtitle">Transformation through innovation</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="technology_system"><i class="fa-solid fa-laptop"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Technology systems<span class="subtitle">Support in automating various tasks</span></h3>
								</div>
							</div>
						</div>
					</div>

					<div class="line"></div>

					<div class="row col-mb-50">
						<div class="col-md-5">
							<img src="{{ asset('frontend/images/portfolio/home01.jpg') }}" alt="homeimage" class="w-100">
						</div>

						<div class="col-md-7" id="startHome">
							<div class="heading-block mb-4">
								<h2>We understand that each business is unique</h2>
							</div>
							<p>Welcome to our firm, where we specialize in providing top-notch services in fundraising, IPO consultancy, and corporate treasury management. Our team of experts is dedicated to assisting businesses in achieving their financial goals and optimizing their financial strategies. Below are the key points highlighting the sectors we serve and the services we offer in each sector:</p>

							<div class="row col-mb-20">
								<div class="col-sm-6 col-md-12 col-lg-6 pb-2">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="fa-solid fa-caret-right"></i>Equity Financing</li>
										<li><i class="fa-solid fa-caret-right"></i>Debt Financing</li>
										<li><i class="fa-solid fa-caret-right"></i>Crowdfunding Campaigns</li>
										<li><i class="fa-solid fa-caret-right"></i>Grants and Subsidies</li>
									</ul>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 pb-2">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="fa-solid fa-caret-right"></i>IPO Readiness Assessment</li>
										<li><i class="fa-solid fa-caret-right"></i>Regulatory Compliance</li>
										<li><i class="fa-solid fa-caret-right"></i>Prospectus Preparation</li>
										<li><i class="fa-solid fa-caret-right"></i>Investor Roadshows</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="section mt-6">
					<div class="container">

						<div class="heading-block text-center">
							<h2>This will list all the sectors which we are active into</h2>
							<span>All the business or services which we provide in different sectors like Holdings, Exchange, Lubricants, Concrete, &amp; Fuel Services.</span>
						</div>

						<div class="row justify-content-center col-mb-50">
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
									<div class="fbox-icon">
										<a href="fund_raising" title="Fund Raising" ><i class="bi-phone"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Fund Raisings</h3>
										<p>We assist businesses in raising capital through equity investments, connecting them with potential investors &amp; venture capitalists.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="200">
									<div class="fbox-icon">
										<a href="ipo_consulting" title="IPO Consulting"><i class="bi-eye"></i></a>
									</div>
									<div class="fbox-content">
										<h3>IPO Consulting</h3>
										<p>We ensure the company adheres to all necessary legal &amp; regulatory requirements for a successful IPO.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="400">
									<div class="fbox-icon">
										<a href="corporate_treasury" title="Corporate Treasury"><i class="bi-star"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Corporate Treasury</h3>
										<p>We optimize cash flow through effective cash management techniques tailored to the company's unique requirements.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">
									<div class="fbox-icon">
										<a href="fund_investment" title="Fund Investment"><i class="bi-camera-video"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Fund Investments</h3>
										<p>Our experts conduct thorough analysis &amp; due diligence to identify lucrative investment opportunities.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">
									<div class="fbox-icon">
										<a href="legal_consulting" title="Legal Consulting"><i class="bi-mouse"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Legal Consulting</h3>
										<p>We ensure businesses stay compliant with all relevant laws &amp; regulations in their respective industries.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">
									<div class="fbox-icon">
										<a href="technology_system" title="Technology System"><i class="bi-fire"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Technology systems</h3>
										<p>We help businesses design &amp; implement robust IT infrastructures to support their operations effectively.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container">

					<div class="heading-block text-center">
						<h3>Some of our <span>Featured</span> Works</h3>
						<span>We have worked on some Awesome Projects that are worth boasting of.</span>
					</div>
					<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="1" data-pagi="false" data-autoplay="3000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

						<div class="oc-item">
						<div class="portfolio-image">
							    <a href="frontend/images/portfolio/featured-work/smart01.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/smart01.jpg" alt="featuredwork1">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>Smart Logistics Optimization</h4>
							</div>
						</div>

						<div class="oc-item">
						<div class="portfolio-image">
								<a href="frontend/images/portfolio/featured-work/remote02.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/remote02.jpg" alt="featuredwork2">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>Remote Healthcare Platform</h4>
							</div>
						</div>

						<div class="oc-item">
						<div class="portfolio-image">
								<a href="frontend/images/portfolio/featured-work/ai03.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/ai03.jpg" alt="featuredwork3">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>AI-Driven Customer Service Enhancement</h4>
								<!-- <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span> -->
							</div>
						</div>

						<div class="oc-item">
						<div class="portfolio-image">
								<a href="frontend/images/portfolio/featured-work/ai04.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/ai04.jpg" alt="featuredwork4">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>The future of consulting in the age of Generative AI</h4>
								<!-- <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span> -->
							</div>
						</div>

						<div class="oc-item">
						<div class="portfolio-image">
								<a href="frontend/images/portfolio/featured-work/access.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/access.jpg" alt="featuredwork5">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>Indian multinational prevents cyber threats across global locations</h4>
								<!-- <span><a href="#">UI Elements</a>, <a href="#">Media</a></span> -->
							</div>
						</div>

						<div class="oc-item">
						<div class="portfolio-image">
								<a href="frontend/images/portfolio/featured-work/manage.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/manage.jpg" alt="featuredwork6">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>How entities in the financial services sector can plan their year-end closure</h4>
							</div>
						</div>

						<div class="oc-item">
						<div class="portfolio-image">
								<a href="frontend/images/portfolio/featured-work/data.jpg" data-lightbox="image" data-zoom="true">
									<div class="grid-inner">
										<div class="portfolio-image">
											<img src="frontend/images/portfolio/featured-work/data.jpg" alt="featuredwork7">
										</div>
									</div>
								</a>
							</div>
							<div class="portfolio-desc">
								<h4>Data is the new boss: an insurance imperative</h4>								
							</div>
						</div>

					</div>
				</div>
				<h1 class="button button-full text-center footer-stick" style="cursor: auto;">
				Speak with our Experts at <span>{{ config('global.contact_no')}}</span> <a href="tel:{{ config('global.contact_no')}}" class="btn">Call Us Now</a>
				</h1>

			</div>
		</section><!-- #content end -->
@endsection
