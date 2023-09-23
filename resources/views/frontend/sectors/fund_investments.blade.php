@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
        ============================================= -->
        <section class="page-title" style="background-image: url('frontend/images/fund/invest.jpg'); background-size: cover; background-position: top left;">
            <div class="container">
                <div class="page-title-row">

                    <div class="page-title-content">
                        <h1 class="text-light">Fund Investment</h1>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-light">
                            <li class="breadcrumb-item">Our Services</li>
                            <li class="breadcrumb-item" aria-current="page">Fund Investment</li>
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

            <div class="row col-mb-80 mb-0">

                <div class="col-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/images/fund/typeIn.jpg') }}" height="400px" alt="typeIn">
                    </div>

                </div>
                <div class="heading-block text-center">
                    <h2>Our Fund Investers In</h2>
                </div>
                <div class="col-lg-3 text-center" data-animate="bounceIn">
                    <i class="fas fa-chart-line fa-3x"></i>
                    <div class="counter counter-large text-primary"><span data-from="100" data-to="8465" data-refresh-interval="50" data-speed="2000"></span></div>
                    <h5>Equity Funds</h5>
                </div>

                <div class="col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
                    <i class="fas fa-home fa-3x"></i>
                    <div class="counter counter-large text-danger"><span data-from="100" data-to="56841" data-refresh-interval="50" data-speed="2500"></span></div>
                    <h5>Real Estate</h5>
                </div>

                <div class="col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
                    <i class="fas fa-money-check-alt fa-3x"></i>
                    <div class="counter counter-large text-success"><span data-from="100" data-to="2154" data-refresh-interval="50" data-speed="3500"></span></div>
                    <h5>Mutual Fund</h5>
                </div>

                <div class="col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
                    <i class="fas fa-chart-bar fa-3x"></i>
                    <div class="counter counter-large text-warning"><span data-from="100" data-to="874" data-refresh-interval="30" data-speed="2700"></span></div>
                    <h5>Stock funds</h5>
                </div>

            </div>

            <div class="heading-block text-center">
                <h2>The classification of mutual funds based on asset class is as follows: </h2>
            </div>

            <div class="row col-mb-50 mb-0">

                <div class="col-lg-6">
                    <div class="team team-list row align-items-center">
                        <div class="team-image col-sm-6">
                            <img src="{{ asset('frontend/images/fund/equity.jpg') }}" alt="equity">
                        </div>
                        <div class="team-desc col-sm-6">
                            <div class="team-title"><h4>Equity Funds</h4></div>
                            <div class="team-content">
                                <p>Equity funds primarily invest in stocks, and hence go by the name of stock funds as well. They invest the money pooled in from various investors from diverse backgrounds into shares/stocks of different companies..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team team-list row align-items-center">
                        <div class="team-image col-sm-6">
                            <img src="{{ asset('frontend/images/fund/hybrid.jpg') }}" alt="hybrid">
                        </div>
                        <div class="team-desc col-sm-6">
                            <div class="team-title"><h4>Hybrid Funds</h4></div>
                            <div class="team-content">
                                <p>As the name suggests, hybrid funds (Balanced Funds) is an optimum mix of bonds and stocks, thereby bridging the gap between equity funds</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team team-list row align-items-center">
                        <div class="team-image col-sm-6">
                            <img src="{{ asset('frontend/images/fund/debit.jpg') }}" alt="debit">
                        </div>
                        <div class="team-desc col-sm-6">
                            <div class="team-title"><h4>Debt Funds</h4></div>
                            <div class="team-content">
                                <p>Debt funds invest primarily in fixed-income securities such as bonds, securities and treasury bills. They invest in various fixed income instruments such as Fixed Maturity Plans (FMPs), Gilt Funds, Liquid Funds, Short-Term Plans, Long-Term Bonds .</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team team-list row align-items-center">
                        <div class="team-image col-sm-6">
                            <img src="{{ asset('frontend/images/fund/many.jpg') }}" alt="many">
                        </div>
                        <div class="team-desc col-sm-6">
                            <div class="team-title"><h4>Money Market Funds</h4></div>
                            <div class="team-content">
                                <p>Investors trade stocks in the stock market. In the same way, investors also invest in the money market, also known as capital market or cash market..</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team team-list row align-items-center">
                        <div class="team-image col-sm-6">
                            <img src="{{ asset('frontend/images/fund/many.jpg') }}" alt="many">
                        </div>
                        <div class="team-desc col-sm-6">
                            <div class="team-title"><h4>Liquid Funds</h4></div>
                            <div class="team-content">
                                <p>Like income funds, liquid funds also belong to the debt fund category as they invest in debt instruments and money market with a tenure of up to 91 days.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="team team-list row align-items-center">
                        <div class="team-image col-sm-6">
                            <img src="{{ asset('frontend/images/fund/pension.jpg') }}" alt="pension">
                        </div>
                        <div class="team-desc col-sm-6">
                            <div class="team-title"><h4>Pension Funds</h4></div>
                            <div class="team-content">
                                <p>Putting away a portion of your income in a chosen pension fund to accrue over a long period to secure you and your family’s financial future after retiring from regular employment .</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section><!-- #content end -->
@endsection