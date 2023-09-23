@extends('frontend/layouts/app')
@section('content')

<!-- Page Title
        ============================================= -->
<section class="page-title" style="background-image: url('frontend/images/about_us.jpg'); background-size: cover; background-position: top left;">
	<div class="container">
		<div class="page-title-row">

			<div class="page-title-content">
				<h1 class="text-light">About Us</h1>
			</div>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb text-light">
					<li class="breadcrumb-item">Who We Are</li>
					<li class="breadcrumb-item" aria-current="page">About Us</li>
				</ol>
			</nav>

		</div>
	</div>
</section><!-- .page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="row col-mb-50 mb-0">
						<div class="col-lg-4">
							<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
								<h4>Why choose <span>Us</span>.</h4>
							</div>
							<p>We understand that every client is unique and we strive to deliver as per our client requirement with affordable proposal every time and to follow it through with an outstanding delivery which is both within time and budget. </p>
						</div>
						<div class="col-lg-4">
							<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
								<h4>Our <span>Mission</span>.</h4>
							</div>
							<p>Give financially savvy manageable technical answers for propelling the general public by giving the privilege innovative arrangements that can help our clients. Being dependable, straightforward, moral and individuals driven are the key components of our central goal. </p>
						</div>

						<div class="col-lg-4">

							<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
								<h4>What we <span>Do</span>.</h4>
							</div>

							<p>We provide alluring results to our clients by using the advanced solutions to improve a wide range of the business and make it more achievable. We mean to be considered as a standout amongst the most moral organization in the world. </p>

						</div>

					</div>

				</div>

				<div class="section m-0">
					<div class="container">

						<div class="row col-mb-50">

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
								<i class="i-plain i-xlarge mx-auto bi-signpost-split"></i>
								<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
								<h5>Number of Donations</h5>
							</div>

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
								<i class="i-plain i-xlarge mx-auto mb-0 bi-bezier"></i>
								<div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
								<h5>Satisfied Customers</h5>
							</div>

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
								<i class="i-plain i-xlarge mx-auto mb-0 bi-layers"></i>
								<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
								<h5>Collaborations</h5>
							</div>


							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
								<div class="pb-2" style="box-shadow: 0 0 2px 2px #ccc;bottom: 9px; ">
									<i class="bi bi-file-pdf fa-4x" style="position: relative;top: 15px;"></i>
									<div class="counter counter-lined">
										<a href="frontend/images/UME.pdf" class="btn btn-primary position-relative mt-3	w-75" target="_blank" style="background: #3367c1;">Download Now</a>
									</div>
									<h5 style="">COMPANY PRESENTATION</h5>
								</div>
							</div>


						</div>

					</div>
				</div>

			<div class="container">

				<div class="row align-items-stretch pt-5">
					<div class="heading-block text-center">
						<h3>Our <span>Leads</span></h3>
						<span>Pillars of Our Company</span>
					</div>

					<div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/team/john.jpg') }}" alt="teamLead-John">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4><span class="before-heading color">CEO &amp; Co-Founder</span></h4>
                                <h3>John Doe</h3>
                            </div>

                            <div class="row">

								<div class="col-lg-12">
									<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
									<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
									<div class="d-flex">
										<a href="https://www.facebook.com/" target="_blank" title="facebook" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-facebook">
											<i class="fa-brands fa-facebook-f"></i>
											<i class="fa-brands fa-facebook-f"></i>
										</a>
										<a href="https://www.twitter.com/" target="_blank" title="twitter" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-twitter">
											<i class="fa-brands fa-twitter"></i>
											<i class="fa-brands fa-twitter"></i>
										</a>
										<a href="https://www.google.com/" target="_blank" title="google" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-google">
											<i class="fa-brands fa-google"></i>
											<i class="fa-brands fa-google"></i>
										</a>
									</div>
								</div>
							</div>

                        </div>
                    </div>

				</div>
				<p><br><p>

				<div class="row align-items-stretch mb-6">


					 <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/team/mary.jpg') }}" alt="teamLead-Mary">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4><span class="before-heading color">Developer &amp; Evangelist</span></h4>
                                <h3>Mary Jane</h3>
                            </div>

                            <div class="row">

								<div class="col-lg-12">
									<p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
									<p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
									<div class="d-flex">
										<a href="https://www.facebook.com/" target="_blank" title="facebook" class="social-icon si-small rounded-circle border-transparent h-bg-facebook" style="background-color: var(--bs-gray-300);">
											<i class="fa-brands fa-facebook-f"></i>
											<i class="fa-brands fa-facebook-f"></i>
										</a>
										<a href="https://www.twitter.com/" target="_blank" title="twitter" class="social-icon si-small rounded-circle border-transparent h-bg-twitter" style="background-color: var(--bs-gray-300);">
											<i class="fa-brands fa-twitter"></i>
											<i class="fa-brands fa-twitter"></i>
										</a>
										<a href="https://www.google.com/" target="_blank" title="google" class="social-icon si-small rounded-circle border-transparent h-bg-google" style="background-color: var(--bs-gray-300);">
											<i class="fa-brands fa-google"></i>
											<i class="fa-brands fa-google"></i>
										</a>
									</div>
								</div>



							</div>

                        </div>
                    </div>

				</div>
			</div>


				<div class="container">

					<div class="heading-block text-center">
						<h3>Our <span>Clients</span></h3>
						<span>We have worked with some major Firms that are worth boasting of.</span>
					</div>

					<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-xl="5">

						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/football.png') }}" alt="football" >
								</a>
							</div>
						</div>

						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/vintage.png') }}" alt="vintage"  >
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/american.png') }}" alt="american" >
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/jefferson.png') }}" alt="jefferson" >
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/vintage3.png') }}" alt="vintage3">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/alien.png') }}" alt="alien">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/valley.png') }}" alt="valley">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/mcqueen.png') }}" alt="mcqueen">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/vintage2.png') }}" alt="vintage2">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/pompadour.png') }}" alt="pompadour">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/pacific.png') }}" alt="pacific">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/hamburger.png') }}" alt="hamburger">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/forged.png') }}" alt="forged">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/himalayan.png') }}" alt="himalayan">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/wild.png') }}" alt="wild">
								</a>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{ asset('frontend/images/clients/premium.png') }}" alt="premium">
								</a>
							</div>
						</div>

					</div>
				</div>


			</div>
		</section>

		<!-- Content for ceo message
		============================================= -->
		<section id="content">
				<div class="container">
					<div class="row col-mb-80 mb-0">
						<div class="col-12">
							<div class="heading-block text-center">
								<h3>Message from <span>Group CEO</span></h3>
								<span>We value Work Ethics &amp; Environment as it helps in creating a Creative Thinktank</span>
							</div>
                            <div class="team team-list row align-items-center bg-contrast-100">

                                <div class="team-image col-sm-3">
									<img src="{{ asset('frontend/images/team/john.jpg') }}" alt="Ceo John Doe">
								</div>
								<div class="team-desc col-sm-9">
									<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
									<div class="team-content">
										<p>Our aim to be a more purposeful organization is not just a slogan on our stationery. Vision 2030 is a bold but realistic ambition that will, once again, require all our focus and our full arsenal of inherent IVL strengths. It is entirely achievable.</p>
									</div>
									<a href="https://www.facebook.com/" target="_blank" title="facebook" class="social-icon bg-light rounded-circle border-transparent si-small h-bg-facebook">
										<i class="fa-brands fa-facebook-f"></i>
										<i class="fa-brands fa-facebook-f"></i>
									</a>
									<a href="https://www.twitter.com/" target="_blank" title="twitter" class="social-icon bg-light rounded-circle border-transparent si-small h-bg-twitter">
										<i class="fa-brands fa-twitter"></i>
										<i class="fa-brands fa-twitter"></i>
									</a>
									<a href="https://www.google.com/" target="_blank" title="google" class="social-icon bg-light rounded-circle border-transparent si-small h-bg-google">
										<i class="fa-brands fa-google"></i>
										<i class="fa-brands fa-google"></i>
									</a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading mr-5">
                    <h4>Dear Investors,</h4>
                    <p>As I reviewed my last two annual addresses – which together represent the peak of the pandemic era – it
                        struck me how far we have come during a historic period in which we faced unprecedented disruption. That our model’s inherent \
                        resilience and our innate agility passed every test during this time – the toughest in our history – invariably must be a key theme
                         of this year’s letter.</p>
                    <p>We should celebrate our success, review what worked well, and congratulate our employees and their loved ones who
                         valiantly bore the weight of the pandemic and ensured that we were more than equal to the challenge. I thank
                         them all for a truly monumental effort. We should also pay tribute to those among us who paid the ultimate
                         price of the pandemic, and my thoughts and prayers go out to their families and our colleagues who worked
                         closely with them. </p>

                    <h4>2021 In Review and Outlook</h4>
                    <p>
                    The year ended with a record Core EBITDA of US$1,743 million, up 55% year-on-year. Much of this was due to resurgent
                    consumer confidence as lockdowns eased and vaccinations were rolled out in many of our key markets. The rise in global
                    demand sparked a wave of supply disruptions and inflationary pressures, including a steep rise in crude oil prices.
                    </p>
                    <p>The disruptions played to our strengths as our teams responded with IVL’s traditional agility to ensure a steady
                    supply of products as our customers’ preferred provider across our regional footprint. We also benefited from local
                    market import parity pricing and currency hedging strategies, as well as the return of our shale gas advantage which
                    boosted margins in our key western markets. At the same time, the Group-wide transformation programs that we started
                    three years ago are generating higher-than-expected efficiencies while also modernizing our processes and
                    future-proofing our business.</p>

                    <br>

                    <p>John Doe
                        <br> CEO
                    </p>


                </div>

        </section>
    @endsection
