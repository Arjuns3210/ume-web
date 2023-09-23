@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
============================================= -->
<section class="page-title" style="background-image: url('frontend/images/ipo.jpg'); background-size: cover; background-position: top left;">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">IPO Consulting</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Our Services</li>
                    <li class="breadcrumb-item" aria-current="page">IPO Consulting</li>
                </ol>
            </nav>

        </div>
    </div>
</section>
<!-- .page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="promo promo-full promo-border pt-4 header-stick mb-6">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12 col-lg">
                        <h4 style="text-align: justify;">Congratulations on considering the exciting journey of preparing for an Initial Public Offering (IPO). Going public is a significant milestone for any company, and careful preparation is essential for a successful and smooth IPO process. Here are some important steps to consider as you prepare for your IPO:</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row col-mb-50">

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="fbox-content">
                            <h3>Evaluate Readiness:</h3>
                            <p>Assess whether your company is ready for an IPO. Consider factors such as financial performance, growth prospects, market conditions, and corporate governance. Engage with financial advisors, legal counsel, and auditors to conduct a thorough readiness assessment</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="fbox-content">
                            <h3>Financial Preparation:</h3>
                            <p>Ensure your financials are in order and meet the necessary standards. Prepare audited financial statements that comply with relevant accounting principles, such as Generally Accepted Accounting Principles (GAAP) or International Financial Reporting Standards (IFRS)</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <div class="fbox-content">
                            <h3>Legal and Regulatory Compliance:</h3>
                            <p>Understand the legal and regulatory requirements for going public. Work closely with legal counsel to ensure compliance with securities laws, disclosure requirements, and other regulatory obligations.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="fbox-content">
                            <h3>IPO Team Formation:</h3>
                            <p>Assemble an experienced team to manage the IPO process. This team may include underwriters, investment bankers, legal advisors, accountants, and investor relations professionals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="fbox-content">
                            <h3>Post-IPO Planning: </h3>
                            <p>Plan for the post-IPO period, including ongoing investor relations, financial reporting, and compliance with public company regulations.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <i class="fa-regular fa-money-bill-trend-up"></i>
                        </div>
                        <div class="fbox-content">
                            <h3>IPO Pricing:</h3>
                            <p>Work with your underwriters to determine the IPO pricing and the number of shares to be offered.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clear"></div><div class="line"></div>
            <h4>We Partner With More Than 100+ Companies</h4>
            <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="3000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

                <img src="{{ asset('frontend/images/ipo/acme.jpg') }}" height="100px" alt="acme">
                <img src="{{ asset('frontend/images/ipo/fia.jpg') }}" height="100px" alt="fia">
                <img src="{{ asset('frontend/images/ipo/firstcry.jpg') }}" height="100px" alt="firstcry">
                <img src="{{ asset('frontend/images/ipo/justdial.jpg') }}" height="100px" alt="justdial">
                <img src="{{ asset('frontend/images/ipo/milton.jpg') }}" height="100px" alt="milton">
                <img src="{{ asset('frontend/images/ipo/razorpay.jpg') }}" height="100px" alt="razorpay">
                <img src="{{ asset('frontend/images/ipo/taj.jpg') }}" height="100px" alt="taj">
                <img src="{{ asset('frontend/images/ipo/ak.jpg') }}" height="100px" alt="ak">
                <img src="{{ asset('frontend/images/ipo/spinny.jpg') }}" height="100px" alt="spinny">

            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection