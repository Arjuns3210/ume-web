@extends('frontend/layouts/app')
@section('content')

<!-- Page Title
        ============================================= -->
<section class="page-title" style="background-image: url('frontend/images/csr/csrBanner.jpg'); background-size: cover; background-position: top right;">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">CSR of the Company</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Who We Are</li>
                    <li class="breadcrumb-item" aria-current="page">CSR of the Company</li>
                </ol>
            </nav>

        </div>
    </div>
</section><!-- .page-title end -->	

<!-- Content for ceo message
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row col-mb-80 mb-0">
                <div class="col-12 pb-0">
						

				    <div class="heading-block text-center">
				    	<h3>Overview of <span>CSR</span></h3>
				    	<span>About Corporate Social Responsibility</span>
				    </div>
							
                    <div class="team-content">
                        <p>CSR, the Social Impact Initiative of Invest India, endeavours to ensure that the Invest India team is an active, positive contributor to society. By undertaking philanthropic projects that aim at creating awareness 
                        about social issues and impact at the grassroot level, we ensure that Invest India remains a socially 
                        conscious organisation.
                        <h4>"Connecting your business to a cause"</h4>
                        The CSR Network connects interested individuals and companies looking to boost their CSR portfolio through investment to viable projects in rural India. Acknowledging that most CSR activities are conducted at the grassroot level in India, which are often unorganized and difficult to maneuver, we have created this portal to assist in the identification and implementation of such initiatives. Through the assistance of state governments
                        and other governmental organizations this portal has identified and listed projects 
                        across multiple sectors to help facilitate this process.</p>
                    </div>
							
				</div>
			</div>
		</div>
    </div>
				
	<div class="content-wrap pt-4">

        <div class="container">
			<div class="heading-block text-center">
                <h2>CSR Drives Across Country</h2>
            </div>
            <div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/csr/education.jpg') }}" alt="education">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4>Education <span>Drives</span></h4>
                                <span>Ensuring education in every part of country.</span>
                            </div>

                            <p>The young and growing population of our country is one of the most appealing characteristics 
							of the Indian market to any business, foreign or domestic. However, it is not just the quantity 
							but quality of the workforce that will leverage India’s growth potential to competitive international
							standards. With over 14 crore children in primary school, improvement in basic education standards
							and infrastructure is crucial. This will ensure that the millions of Indians entering the workforce 
							in the coming years contribute to their highest potential to what is headed to be one of the fastest
							growing economies in the world.</p>

                        </div>
            </div>

            <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/csr/infrastructure.png') }}" alt="infrastructure" 
							style="width: 89%;">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4>Infrastructure <span>Development</span></h4>
                                <span>Working with Wabco.</span>
                            </div>

                            <p>Invest India identified Indok village (Alwar district of Rajasthan) that lay in rubble and required
							a holistic development. With an aim to partner with several corporates each of which would take up different
							aspect of the given project, we identified a few sectors that required facilitation, to create a comprehensive
							approach to the issues faced in this village. Alwar district falls in the buffer zone of the Sariska National
							Park. Wild animals often trespass into the village, threatening lives of many. Since the school compound in the
							village was also vulnerable to this threat, infrastructure development, and safety became sectors of foremost
							importance to the first phase of our project.</p>

                        </div>
                    </div>
                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/csr/pandemic.jpg') }}" alt="pandemic">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block ">
                                <h4>Pandemic <span>Drive</span></h4>
                                <span>The Changing Landscape of CSR in India during COVID-19.</span>
                            </div>
							<p>In light of the onset of the coronavirus pandemic in India, Invest India launched
							the Business Immunity Platform initiative to aid investors and companies tide over this unprecedented crisis.
							As part of this initiative, Invest India’s Social Impact team built an assistance cell which helped corporates
							channel CSR funds and protective healthcare equipment to various government departments as well as Central
							and State funds set up for COVID-19 relief. The team developed a significant pipeline of donations and CSR 
							contributions from corporates and created a repository of technologies focused on COVID-19 interventions 
							that can be supported by CSR spending. Facilitation of donations included essential supplies, PPEs, critical
							care equipment, and other commodities to frontline organizations.</p>

                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="row align-items-center col-mb-50">
                        <div class="col-md-5 order-md-last">
                            <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/csr/technology.jpg') }}" alt="technology">
                        </div>

                        <div class="col-md-7 text-center text-md-start">
                            <div class="heading-block">
                                <h4>Technology <span>Incubators</span></h4>
                                <span>CSR contributions to Technology Incubators</span>
                            </div>
							<p>TThe Government of India has expanded the scope of Corporate Social Responsibility (CSR).
							Now the 2% CSR  funds can be spent on incubators funded by Central or State Government or any 
							agency or Public Sector Undertaking of Central or State Government, and, making contributions to 
							public funded Universities, Government bodies engaged in conducting research in science, technology, 
							engineering and medicine aimed at promoting Sustainable Development Goals (SDGs).Invest India has developed
							a 'Frequently Asked Questions’ booklet on CSR contributions to Technology Incubators. It was developed 
							in collaboration with Nishith Desai Associates.</p>

                        </div>
                    </div>

                </div>
            </div>
</section>
@endsection