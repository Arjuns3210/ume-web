@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
        ============================================= -->
        <section class="page-title" style="background-image: url('frontend/images/history.jpeg'); background-size: cover; background-position: top center;">
                        <!-- <img src="{{ asset('frontend/images/parallax.jpg') }}" class="parallax-bg"> -->
            <div class="container">
                <div class="page-title-row">

                    <div class="page-title-content">
                        <h1 class="text-light">Our History</h1>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-light">
                            <li class="breadcrumb-item">Who We Are</li>
                            <li class="breadcrumb-item" aria-current="page">Our History</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </section><!-- .page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">
			<div class="content-wrap pt-0">

				<!-- Portfolio Single Image
				============================================= -->
                <!-- .portfolio-single-image end -->

				<div class="section mt-0 mb-4 py-5">
					<div class="container">
						<div class="row g-5 px-5 px-sm-0">
							<div class="col-6 col-md-3">
								<h5 class="mb-2">Founded by</h5>
								<p class="text-medium op-08 mb-0">John Doe</p>
							</div>
							<div class="col-6 col-md-3">
								<h5 class="mb-2">Started on</h5>
								<p class="text-medium op-08 mb-0">20th March 2019</p>
							</div>
							<div class="col-6 col-md-3">
								<h5 class="mb-2">Domain</h5>
								<p class="text-medium op-08 mb-0">Monetary Sector</p>
							</div>
							<div class="col-6 col-md-3">
								<h5 class="mb-2">Expertise</h5>
								<p class="text-medium op-08 mb-0">Managing Funds</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="container">

					<div class="row g-5 px-5 px-sm-0">
						<div class="col-md-5 col-lg-4">
							<h2 class="fs-3 fw-bold">About this Company</h2>

							<!-- Portfolio Single - Share
							============================================= -->
							<div class="card mt-5 pt-4 border-0 border-top rounded-0">
								<div class="card-body p-0">
									<div class="d-flex align-items-center justify-content-between">
										<h6 class="fs-6 fw-semibold mb-0">Share:</h6>
										<div class="d-flex">
											<a href="{{config('footers.facebook_url')}}" target="_blank" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-facebook" title="Facebook">
												<i class="fa-brands fa-facebook-f"></i>
												<i class="fa-brands fa-facebook-f"></i>
											</a>

											<a href="{{config('footers.twitter_url')}}" target="_blank" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-twitter" title="Twitter">
												<i class="fa-brands fa-twitter"></i>
												<i class="fa-brands fa-twitter"></i>
											</a>

											<a href="{{config('footers.google_url')}}" target="_blank" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-google" title="Google">
												<i class="fa-brands fa-google"></i>
												<i class="fa-brands fa-google"></i>
											</a>

											<a href="{{config('footers.pinterest_url')}}" target="_blank" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-pinterest" title="Pinterest">
												<i class="fa-brands fa-pinterest-p"></i>
												<i class="fa-brands fa-pinterest-p"></i>
											</a>

											<a href="mailto:('footers.gmail')" class="social-icon bg-light si-small border-transparent rounded-circle h-bg-email3 me-0" title="Mail">
												<i class="fa-solid fa-envelope"></i>
												<i class="fa-solid fa-envelope"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Portfolio Single - Share End -->
						</div>

						<!-- Portfolio Single Content
						============================================= -->
						<div class="col-md-7 col-lg-8 portfolio-single-content">

							<div class="row gx-5">
								<div class="col-lg-6">
									<p>UME SOLUTIONS came into existence on 05th October, 2017 after clearing all the government norms, but the seeds were planted 4 years back. From 2014, two Axis employees along with their college friends started the work of Fund Management and distribution as a freelancer. Gradually the work-flow went on increasing and the duo saw a tremendous potential and market and decided to setup a company. </p>
								</div>

								<div class="col-lg-6">
									<p>Team has grown and with experience the quality of work, efforts and dedication shown in every project has resulted in a stronger client retention rate. UME Solutions has grown exponentially in this FY 20-21 and after establishing its first international branch it aims to achieve higher and grow futher. It seems to be a Global Funds Organization firm.</p>
								</div>
							</div>

						</div><!-- .portfolio-single-content end -->
					</div>

				</div>
			</div>
        </section>

	<section id = "content">
		<div class="heading-block text-center">
            <h2>This is our <span>timeline</span></h2>
        </div>
		<div class="timeline">
  			<div class="tcontainer tleft">
  			  <div class="tcontent">
  			    <h2 class="text-dark mb-3">2017</h2>
  			    <p class="mb-0">Team first got their first investment project through a company which had outsourced them that work.</p>
  			  </div>
  			</div>
  			<div class="tcontainer tright">
  			  <div class="tcontent">
  			    <h2 class="text-dark mb-3">2018</h2>
  			    <p class="mb-0">Team had completed a handful amount of projects and then they realized its all about maintaining relationship and the number of connections they had.</p>
  			  </div>
  			</div>
  			<div class="tcontainer tleft">
  			  <div class="tcontent">
  			    <h2 class="text-dark mb-3">2019</h2>
  			    <p class="mb-0">This was the first time they had finalized such a big amount of project and the project went on for next 6 months.</p>
  			  </div>
  			</div>
  			<div class="tcontainer tright">
  			  <div class="tcontent">
  			    <h2 class="text-dark mb-3">2020</h2>
  			    <p class="mb-0">UME Solutions started searching for a new Home to shift its development center and increase the seating capacity, search ended near International Airport, Mumbai .</p>
  			  </div>
  			</div>
  			<div class="tcontainer tleft">
  			  <div class="tcontent">
  			    <h2 class="text-dark mb-3">2021</h2>
  			    <p class="mb-0">Preparations were started to get the name registered with Indian government and to start the business on UME Solution as its name. A office was rented out for hiring the staff.</p>
  			  </div>
  			</div>
  			<div class="tcontainer tright">
  			  <div class="tcontent">
  			    <h2 class="text-dark mb-3">2022</h2>
  			    <p class="mb-0">Projects were flowing , and UME Solution had finalized an international project on its name and was into an agreement with a major overseas player.</p>
  			  </div>
  			</div>
		</div>


    </section> <!-- #content end -->
@endsection
