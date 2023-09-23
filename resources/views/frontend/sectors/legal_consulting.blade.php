@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
        ============================================= -->
<section class="page-title" style="background-image: url('frontend/images/legal.jpg'); background-size: cover; background-position: top left;">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1 class="text-light">Legal Consulting</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Our Services</li>
                    <li class="breadcrumb-item" aria-current="page">Legal Consulting</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- .page-title end -->
<br><br><br>
<!--About Start-->
<div class="about-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt_30">
                <div class="about-content">
                    <div class="headline-left">
                        <h2><span>WELOCME TO</span> LEGAL CONSULTANCY</h2>
                    </div>
                    <p>
                        <p>The first step is for us to work with you and come up with a plan to get the results you need. Through our understanding of the law and your understanding of the circumstances.</p>
                    </p>
                    <div class="progress-gallery main-prog">
                    	<div class="bar-container">
                            <p>Civil Matters</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="Progress: 95%" style="width: 95%">
                                </div>
                            </div>
                            <div class="percentage-show">95%</div>
                        </div>
                        <div class="bar-container">
                            <p>Criminal Matters</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" aria-label="Progress: 85%" style="width: 85%">
                                </div>
                            </div>
                            <div class="percentage-show">85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_30">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <img src="frontend/images/legal/video_bg.jpg" alt="image3">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="uil uil-play"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--About End-->
<br><br>
<!--Choose-Area Start-->
<div class="choose-area pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2>WHY CHOOSE US</h2>
                    <h3>We have some special crieteria that will help you</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="choose-item flex" style="background-image: url(frontend/images/legal/why-choose-1.jpg)">
                    <div class="choose-icon">
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </div>
                    <div class="choose-text">
                        <h4>Law You Can Understand</h4>
                        <p>
                            We know that legal action can sometimes be overwhelming. We are dedicated to providing you help in language that you can understand. If you don't feel like you understand your options, just ask, and we will work .</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="choose-item flex" style="background-image: url(frontend/images/legal/why-choose-7.jpg)">
                        <div class="choose-icon">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        </div>
                        <div class="choose-text">
                            <h4>A Focus on Results</h4>
                            <p>
                                The first step is for us to work with you and come up with a plan to get the results you need. Through our understanding of the law and your understanding of the circumstances, we will craft a path to success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="choose-item flex" style="background-image: url(frontend/images/legal/why-choose-8.jpg)">
                        <div class="choose-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="choose-text">
                            <h4>Let's have a Talk</h4>
                            <p>
                                Don't wait! Contact us for phone consultation. Let us help you figure out your best next steps are. The sooner you have a plan of action, the better your chances of taking the correct steps to get the results you want.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Choose-Area End-->
<br><br>
<!--Services Start-->
<div class="services-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2>OUR SERVICES</h2>
                    <h3>We are always here to serve you some awesome services</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="services-item effect-item">
                    <div class="image-effect">
                        <div class="services-photo" style="background-image: url(frontend/images/legal/service-1.jpg)"></div>
                    </div>
                    <div class="services-text">
                        <h3>Corporate Law</h3>
                        <p>We provide comprehensive legal advice and support to businesses of all sizes, from startups to large corporations,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item effect-item">
                    <div class="image-effect">
                        <div class="services-photo" style="background-image: url(frontend/images/legal/service-2.jpg)"></div>
                    </div>
                    <div class="services-text">
                        <h3>Commercial Litigation</h3>
                        <p>Our litigators are well-versed in handling complex commercial disputes and have a proven track record</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item effect-item">
                    <div class="image-effect">
                        <div class="services-photo" style="background-image: url(frontend/images/legal/service-3.jpg)"></div>
                    </div>
                    <div class="services-text">
                        <h3>Intellectual Property</h3>
                        <p>Protecting your intellectual property is essential in today's competitive world. Our IP </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item effect-item">
                    <div class="image-effect">
                        <div class="services-photo" style="background-image: url(frontend/images/legal/service-4.jpg)"></div>
                    </div>
                    <div class="services-text">
                        <h3>Family Law</h3>
                        <p>Our compassionate family law team provides support and guidance on issues such as divorce,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item effect-item">
                    <div class="image-effect">
                        <div class="services-photo" style="background-image: url(frontend/images/legal/service-5.jpg)"></div>
                    </div>
                    <div class="services-text">
                        <h3>Criminal Law</h3>
                        <p>Our criminal defense attorneys are dedicated to safeguarding the</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="services-item effect-item">
                    <div class="image-effect">
                        <div class="services-photo" style="background-image: url(frontend/images/legal/service-6.jpg)"></div>
                    </div>
                    <div class="services-text">
                        <h3>Taxation Laws</h3>
                        <p>Navigating the complex landscape of taxation laws can be challenging for</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Services End-->
@endsection
