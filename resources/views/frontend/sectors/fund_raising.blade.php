@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
        ============================================= -->
<section class="page-title" style="background-image: url('frontend/images/fund_raising.jpg'); background-size: cover; background-position: center left;">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">Fund Raising</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Our Services</li>
                    <li class="breadcrumb-item" aria-current="page">Fund Raising</li>
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
            <div class="heading-block text-center">
                <h2>Our Top Investors</h2>
            </div>
            <div class="row col-mb-50">

                <div class="col-md-4">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <i class="i-alt">1.</i>
                        </div>
                        <div class="fbox-content">
                            <h3>Zomato</h3>
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
                            <h3>Swiggy</h3>
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
                            <h3>Blinkit</h3>
                            <p>We emphasize an apprenticeship culture in which our junior team members learn by working closely with seasoned professionals. We believe this is critical to developing .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div class="container">

            <div class="row align-items-center col-mb-50">
                <div class="col-md-5">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/zomato.jpg') }}" alt="zomato">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <div class="heading-block ">
                        <h4>Raghav Arora</h4>
                        <span>Ceo at <mark>Zomato</mark></span>
                    </div>

                    <p>We are very happy to invest in your project .Me and my all team are intrested to invest quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                </div>
            </div>

            <div class="line"></div>

            <div class="row align-items-center col-mb-50">
                <div class="col-md-5 order-md-last">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/swiggy.jpg') }}" alt="swiggy">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <div class="heading-block">
                        <h4>Priya Mishra</h4>
                        <span>Coo at <mark>Swiggy</mark></span>
                    </div>

                    <p>I am happy to say that i am invester of Ume website. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                </div>
            </div>
            <div class="line"></div>

            <div class="row align-items-center col-mb-50">
                <div class="col-md-5">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/blinkit.jpg') }}" alt="blinkit">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <div class="heading-block ">
                        <h4>Arjun Singh</h4>
                        <span>Co Founder of <mark>Blinkit</mark></span>
                    </div>
                    <p>I am happy to say that i am invester of Ume website. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                </div>
            </div>

            <div class="line"></div>

            <div class="row align-items-center col-mb-50">
                <div class="col-md-5 order-md-last">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/zepto.jpg') }}" alt="zepto">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <div class="heading-block">
                        <h4>Priyanka Shahu</h4>
                        <span>Ceo at <mark>Zepto</mark></span>
                    </div>
                    <p>I am happy to say that i am invester of Ume website. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>
                </div>
            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection