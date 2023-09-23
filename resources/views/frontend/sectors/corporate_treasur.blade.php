@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
        ============================================= -->
        <section class="page-title" style="background-image: url('frontend/images/corporate_treasury.png'); background-size: cover; background-position: center left;">
            <div class="container">
                <div class="page-title-row">

                    <div class="page-title-content">
                        <h1 class="text-light">Corporate Treasury</h1>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-light">
                            <li class="breadcrumb-item">Our Services</li>
                            <li class="breadcrumb-item" aria-current="page">Corporate Treasury</li>
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

                    <div class="row col-mb-50">
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{ asset('frontend/images/services/1.jpg') }}" alt="service1">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>What We Do.<span class="subtitle">Corporate Treasury plays a central role in the firm’s overall strategy with responsibility for providing appropriate funding to support all firmwide activity while maximizing net interest income.</span></h3>
                                    <p>It allocates financial resources, raises funding and capital to support firm activity, and dynamically manages the firm’s asset liability risk and liquidity portfolio.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-box media-box flex-column">
                                <div class="fbox-media">
                                    <img src="{{ asset('frontend/images/services/2.jpg') }}" alt="service2">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>How We’re Organized<span class="subtitle">Corporate Treasury is responsible for financial resource management and asset liability management to facilitate all firm activity at the lowest cost possible. </span></h3>
                                    <p>Functional teams within Corporate Treasury focus on resource allocation, funding planning and origination, asset liability management, trading execution, liquidity projections, liquidity policies and platforms, regulatory engagement, and LIBOR transition. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-box media-box flex-column">
                                <div class="fbox-media">
                                    <img src="{{ asset('frontend/images/services/3.jpg') }}" alt="service3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>Who We Look For.<span class="subtitle">Professionals in Corporate Treasury have an analytical mindset, exhibit intellectual curiosity and are from diverse academic backgrounds.</span></h3>
                                    <p>Working in Corporate Treasury, you will be exposed to banking initiatives, new business activities, and critical strategic programs Goldman Sachs pursues to maintain its leadership among global financial institutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section">
                    <div class="container">

                        <div class="heading-block text-center">
                            <h2>We Invest In Our People</h2>
                        </div>

                        <div class="row col-mb-50">

                            <div class="col-md-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <i class="i-alt">1.</i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Learning</h3>
                                        <p>We created Goldman Sachs University to help our people grow professionally – starting with their orientation and integration into the firm and continuing with ongoing development over the course of their careers..</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <i class="i-alt">2.</i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Development</h3>
                                        <p>From ongoing feedback to diverse talent programs, we’re committed to empowering our people to drive their own development and expand their horizons.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <i class="i-alt">3.</i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Apprenticeship</h3>
                                        <p>We emphasize an apprenticeship culture in which our junior team members learn by working closely with seasoned professionals. We believe this is critical to developing .</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/award.jpg') }}" alt="award">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4>Highlights FROM THE CAREERS BLOG</h4>
                                <span>Reports let you easily track and analyze your product sales, orders, and payments.</span>
                            </div>

                            <p>Our mission is to empower professionals like you with the essential knowledge and skills needed to navigate the ever-changing job market successfully. As industries continue to evolve, so do t and thrive in your career</p>

                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/golden.jpg') }}" alt="golden">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4>Goldman Sachs Awards and Rankings</h4>
                                <span>Benchmarking your website's performance helps you make great choices for your business.</span>
                            </div>

                            <p>As a global financial powerhouse, Goldman Sachs has consistently been recognized and honored for its outstanding contributions to the financial industry and its commitment to excellence. Over the years</p>

                        </div>
                    </div>
                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/intership.jpg') }}" alt="intership">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4>2023 Summer Internship Program</h4>
                                <span>Reports let you easily track and analyze your product sales, orders, and payments.</span>
                            </div>
                            <p>Our mission is to empower professionals like you with the essential knowledge and skills needed to navigate the ever-changing job market successfully. As industries continue to evolve, so do t and thrive in your career</p>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/living.jpg') }}" alt="living">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4>Living on the Spectrum – and Embracing the Upsides</h4>
                                <span>Benchmarking your website's performance helps you make great choices for your business.</span>
                            </div>
                            <p>Our mission is to empower professionals like you with the essential knowledge and skills needed to navigate the ever-changing job market successfully. As industries continue to evolve, so do t and thrive in your career</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- #content end -->
@endsection