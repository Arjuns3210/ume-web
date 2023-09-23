@extends('frontend/layouts/app')
@section('content')
<!-- //class="slider-element slider-parallax include-header min-vh-100" -->
<section class="page-title" style="background-image: url('frontend/images/scam-banner.png'); background-size: cover; background-position: top left;">
    <!-- <img src="{{ asset('frontend/images/parallax.jpg') }}" class="parallax-bg"> -->
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">Scam Notice</h1>
				<span class="text-light">Stay informed about the latest scams.</span>
            </div>
        </div>
    </div>
</section>
<!-- .page-title end -->
<!-- Content
============================================= -->
<section class="content-section mt-30 pt-2" style="background-color: whitesmoke;">
    <div class="container">
        <div class="row">          
            <div class="col">                
                <div>                    
                    <div class="card mb-4">
                        <div class="card-block mb-4 p-4 "> 
                            <h1 class="text-center mb-40 mt-2 ">Scam Notice</h1>
                            <h3 class="mb-20"><span>Unauthorized Websites and Services:</span></h3>
                            <p class="card-text">We have discovered unauthorized websites or services claiming to be associated with UME Solutions. These websites may have similar domain names or use our company's logo and branding to deceive unsuspecting individuals. Please note that we have no affiliation with these unauthorized websites, and any transactions or interactions with them are done at your own risk.</p>
                            <h3 class="mb-20"><span>Phishing Emails and Communication</span></h3>
                            <p class="card-text">Scammers may send fraudulent emails, messages, or make phone calls impersonating representatives of UME Solutions. These communications often request personal information, financial details, or attempt to redirect you to fake websites for malicious purposes. Be cautious of any unsolicited communications and avoid sharing sensitive information.</p>           
                            <h3 class="mb-20"><span>Payment Requests and Fraudulent Transactions</span></h3>
                            <p class="card-text">Scammers may request payment for services, products, or fees using our company's name. These requests are fraudulent, and we never ask for payment outside of our official channels. Please ensure that you only make payments through our verified payment platforms and channels to prevent financial losses.</p>    
                            <h3 class="mb-20"><span>To protect yourself from scams and fraudulent activities, please take note of the following precautions:</span></h3>
                            <p class="card-text mb-4 "><b>1.</b> Verify the authenticity of any communication, website, or service associated with UME Solutions. Use our official channels, contact customer support, or visit our verified website for confirmation.</p>
                            <p class="card-text"><b>2.</b> Exercise caution with unsolicited communications, especially those asking for personal or financial information or immediate payment. Avoid clicking on suspicious links or downloading attachments from unknown sources.</p>
                            <p class="card-text"><b>3.</b> Regularly review your financial statements and transactions to spot any unauthorized activity. Report any discrepancies immediately to your financial institution and notify our customer support.</p>
                                               
                        </div>
                    </div>
                </div>
            </div>  
        </div>        
    </div>
</section>
@endsection            
