@extends('frontend/layouts/app')
@section('content')
<!-- //class="slider-element slider-parallax include-header min-vh-100" -->
<section class="page-title" style="background-image: url('frontend/images/portfolio/3/gallery.jpg'); background-size: cover; background-position: top left;">
    <!-- <img src="{{ asset('frontend/images/parallax.jpg') }}" class="parallax-bg"> -->
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light display">Gallery</h1>
				<!-- <span class="text-dark">Join our Fabulous Team of Intelligent Individuals</span> -->
            </div>
        </div>
    </div>
</section>
<!-- .page-title end -->
<!-- Content
		============================================= -->
<section id="content">
	<div class="content mt-4">
		<div class="text-center mb-10">
		    <h1 class="col-mb-0 col-mt-0"><span>Images and Videos</span></h1>
			<h4 class="mt-0">Representation of our culture and work</h4>
		</div>
		<div class="container">
			<div class="grid-filter-wrap">
                        <!-- Portfolio Items
					============================================= -->
			    
					<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">

					<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-flowchart pf-icons">
							<div href="frontend/images/portfolio/3/img1.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img1.jpg" alt="image1">
								</div>
								<div class="portfolio-desc">
									<h3>IPO Flowchart</h3>
									<span>Image</span>
								</div>
							</div>
					    </article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-image">
						<div href="frontend/images/portfolio/3/img2.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img2.jpg" alt="image2">
								</div>
								<div class="portfolio-desc">
									<h3>Growth</h3>
									<span>Image</span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-seminars pf-video">
							<div class="grid-inner">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img3.jpg" alt="image3">
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
											
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Corporate Event</h3>
									<span>Video</span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
						<div class="grid-inner">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img4.jpg" alt="image4">
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
											
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Success Party</h3>
									<span>Video</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-media">
						<div href="frontend/images/portfolio/3/img5.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img5.jpg" alt="image5">
								</div>
								<div class="portfolio-desc">
									<h3>Extra Activity</h3>
									<span>Image</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img6.jpg" alt="image6">
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
											
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>Backpack Contents</h3>
									<span>Video</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
						<div href="frontend/images/portfolio/3/img7.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img7.jpg" alt="image7">
								</div>
								<div class="portfolio-desc">
									<h3>fund Raising Event</h3>
									<span>Image</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
						<div href="frontend/images/portfolio/3/img8.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img8.jpg" alt="image8">
								</div>
								<div class="portfolio-desc">
									<h3>Business lunch</h3>
									<span>Image</span>
								</div>
							</div>
						</article>

						<article class="portfolio-item col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
							<div class="grid-inner">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img9.jpg" alt="image9">
									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
											
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3>New Year Event</h3>
									<span>Video</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
						<div href="frontend/images/portfolio/3/img10.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img10.jpg" alt="image10">
								</div>
								<div class="portfolio-desc">
									<h3>Client Visit</h3>
									<span>Image</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
						<div href="frontend/images/portfolio/3/img11.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img11.jpg" alt="image11">
								</div>
								<div class="portfolio-desc">
									<h3>Corporate Trips</h3>
									<span>Image</span>
								</div>
							</div>
						</article>

                        <article class="portfolio-item col-md-4 col-sm-6 col-12 pf-graphics">
						<div href="frontend/images/portfolio/3/img12.jpg" class="grid-inner" data-lightbox="image" data-zoom="true" style="cursor: pointer;">
								<div class="portfolio-image">
									<img src="frontend/images/portfolio/3/img12.jpg" alt="image12">
								</div>
								<div class="portfolio-desc">
									<h3>Meetings</h3>
									<span>Image</span>
								</div>
							</div>
						</article>
					</div>
            </div><!-- #portfolio end -->
        </div>
	</div>
</section><!-- #content end -->
@endsection