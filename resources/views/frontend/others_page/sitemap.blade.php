@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
============================================= -->
<section class="page-title" style="background-image: url('frontend/images/sitemap.jpg'); background-size: cover; background-position: top left;">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">Sitemap</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Others Page</li>
                    <li class="breadcrumb-item" aria-current="page">Sitemap</li>
                </ol>
            </nav>

        </div>
    </div>
</section>

<section class="content-section mt-30 pt-2">
    <div class="container">

        <div class="row border p-5 mb-5">
            <div class="col" >
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <h3>Home</h3>
                        <ul class="text-muted liMargin">
                            <li><a href="{{ config('global.base_path') }}">Home Main page</a></li>
                        </ul>

                        <h3>Who we are</h3>
                        <ul class="text-muted liMargin">
                            <li><a href="about">About Us</a></li>
                            <li><a href="our_history">Our History</a></li>
                            <li><a href="awards">Awards and Recognition</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <h3>Sectors we serve</h3>
                        <ul class="text-muted liMargin">
                            <li><a href="fund_raising">Fund Raising</a></li>
                            <li><a href="ipo_consulting">IPO Consulting</a></li>
                            <li><a href="corporate_treasury">Corporate Treasury</a></li>
                            <li><a href="fund_investment">Fund Investments</a></li>
                            <li><a href="legal_consulting">Legal Consulting</a></li>
                            <li><a href="technology_system">Technology Systems</a></li>
                        </ul>
                        <h3>Careers</h3>
                        <ul class="text-muted liMargin">
                            <li><a href="careers">Careers</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <h3>Media</h3>
                        <ul class="text-muted liMargin">
                            <li><a href="gallery">Gallery</a></li>
                            <li><a href="events">Events</a></li>
                            <li><a href="blogs">Blogs</a></li>
                        </ul>

                        <h3>Contact Us:</h3>
                        <ul class="text-muted liMargin">
                            <li><a href="contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
@endsection