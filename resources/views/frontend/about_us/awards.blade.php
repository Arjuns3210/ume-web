@extends('frontend/layouts/app')
@section('content')

<!-- Page Title
        ============================================= -->
<section class="page-title" style="background-image: url('frontend/images/awards/Awards-banner.jpg'); background-size: cover; background-position: top right;">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">Awards and Recognition</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Who We Are</li>
                    <li class="breadcrumb-item" aria-current="page">Awards and Recognition</li>
                </ol>
            </nav>

        </div>
    </div>
</section><!-- .page-title end -->
	
	    
<!-- Content
        ============================================= -->
        <section id="content">
            <div class="section">
                <div class="container" style="margin-top: -56px;">
                    <div class="heading-block text-center">
                        <h2>Our Recent <span>Achievements</span></h2>
                    </div>
					
					<div class="row col-mb-50 m-auto">
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{ asset('frontend/images/awards/fortune.png') }}" alt="fortune" style="width: 330px;">
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-box media-box flex-column">
                                <div class="fbox-media">
                                    <img src="{{ asset('frontend/images/awards/globee.webp') }}" alt="globee" style="width: 330px;">
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-box media-box flex-column">
                                <div class="fbox-media">
                                    <img src="{{ asset('frontend/images/awards/fintech.jpg') }}" alt="fintech" style="width: 330px;">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	
            <div class="content col-mt-0">
                <div class="container" style="margin-top: -86px; ">
                    <div class="heading-block text-center">
                        <h2>Major <span>Recognitions</span></h2>
                    </div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/awards/horizon.jpeg') }}" alt="horizon">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4>Horizon Interactive Award</h4>
                                <span>Recognizing Excellence in Interactive Production.</span>
                            </div>

                            <p>For the past 21 years, the web based interactive awards competition has highlighted and recognized 
							the best of the best in the creative and digital media industry with tens of thousands of project entries 
							that showcase the diverse and rich talent from designers, writers, directors and many other roles who produce 
							that work around the globe. We welcome you and invite you to participate in the annual competition and to compete for an opportunity to get the recognition you deserve.</p>

                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/awards/blueRibbion.png') }}" alt="blueRibbion" 
							style="width: 89%;">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4>Blue Ribbion Companies 2020</h4>
                                <span>Benchmarking your company's performance and evaluates your great choices for your business.</span>
                            </div>

                            <p>Abbott has been named a Blue Ribbon company in 2021 for its placement 
							on four of Fortune's most prestigious annual rankings: Change the World, 
							Global 500, Fortune 500 and World's Most Admired Companies. Recognizing
							company's performance and its revenue and evaluates on the same. Sucess 
							measuring factor is also conisdered.</p>

                        </div>
                    </div>
                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/awards/forbes.jpg') }}" alt="forbes">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4>Forbes Global 2000</h4>
                                <span>Reports based on performance and yearly assests collection track.</span>
                            </div>
							<p>UME Solutions, America's biggest firm with USD 3.7 trillion in assets, is at the top 
							of the list for the first time since 2011 and has emerged stronger from this spring's 
							regional banking crisis, with more deposits and opportunistic acquisition of the failed 
							irst Republic Bank, reported PTI, citing the list.</p>

                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/awards/ethical.jpg') }}" alt="ethical">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4>Worlds's Most Ethical Companies 2019</h4>
                                <span>Benchmarking your compnay's ethics and evaluating it on certain terms.</span>
                            </div>
							<p>The journey to the World’s Most Ethical Companies starts with a qualitative and quantitative assessment 
							across five categories. This proprietary rating system, known as the Ethics Quotient®  (EQ), is at the heart of 
							the selection process for this prestigious honor. Featuring more than 240 multiple-choice and text questions, 
							the EQ framework evaluates a company’s performance in an objective, consistent, and standardized way.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #content end -->
 @endsection																																																																																																																																																																							