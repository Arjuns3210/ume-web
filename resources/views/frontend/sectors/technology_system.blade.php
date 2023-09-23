@extends('frontend/layouts/app')
@section('content')
<!-- Page Title
============================================= -->
<section class="page-title" style="background-image: url('frontend/images/tech.jpg'); background-size: cover; background-position: center right;">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-light">Technology Systems</h1>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-light">
                    <li class="breadcrumb-item">Our Services</li>
                    <li class="breadcrumb-item" aria-current="page">Technology Systems</li>
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
                            <img src="{{ asset('frontend/images/technology/approch.jpg') }}" alt="approch">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>Our Approach</h3>
                            <p>we take a client-centric approach to technology system development. Our top priority is understanding your unique requirements and business goals. By blending creativity and technical prowess, we deliver scalable and customized solutions that exceed expectations</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-box media-box flex-column">
                        <div class="fbox-media">
                            <img src="{{ asset('frontend/images/technology/expertise.jpg') }}" alt="expertise">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>Our Expertise</h3>
                            <p>With years of experience in the field, we've cultivated expertise across various industries, including healthcare, finance, logistics, and more. From IoT-enabled solutions to AI-driven platforms, our team is well-equipped to tackle any technological challenge.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-box media-box flex-column">
                        <div class="fbox-media">
                            <img src="{{ asset('frontend/images/technology/stack.jpg') }}" alt="stack">
                        </div>
                        <div class="fbox-content px-0">
                            <h3>Technology Stack</h3>
                            <p>We leverage a powerful technology stack that includes languages like Python, JavaScript, and Java, along with cutting-edge frameworks like React, Angular, and Node.js. Our proficiency in cloud computing platforms such as AWS and Azure enables us to deliver scalable and high-performance systems.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section">
            <div class="container">

                <div class="heading-block text-center">
                    <h2>Our Process</h2>
                </div>

                <div class="row col-mb-50">

                    <div class="col-md-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="i-alt">1.</i>
                            </div>
                            <div class="fbox-content">
                                <h3>Consultation</h3>
                                <p>We begin by listening to your vision and objectives to define project requirements thoroughly</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="i-alt">2.</i>
                            </div>
                            <div class="fbox-content">
                                <h3>Design & Development</h3>
                                <p>Our skilled designers and developers collaborate to create an optimized blueprint, followed by robust coding to bring the system to life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="i-alt">3.</i>
                            </div>
                            <div class="fbox-content">
                                <h3>Testing & Quality Assurance</h3>
                                <p>Rigorous testing is conducted at every stage to ensure a bug-free and reliable system</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row col-mb-50">

                    <div class="col-md-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="i-alt">4.</i>
                            </div>
                            <div class="fbox-content">
                                <h3>Deployment & Integration</h3>
                                <p>The final product is seamlessly integrated into your existing infrastructure or rolled out onto the cloud.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="i-alt">5.</i>
                            </div>
                            <div class="fbox-content">
                                <h3>Maintenance & Support</h3>
                                <p>We provide continuous support, monitoring, and updates to keep your technology system running smoothly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <i class="i-alt">6.</i>
                            </div>
                            <div class="fbox-content">
                                <h3>Security and Compliance</h3>
                                <p>Your trust and data security are paramount to us. We comply with industry standards such as GDPR and HIPAA, and our team proactively implements robust .</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="heading-block text-center">
                <h2>Our Projects</h2>
            </div>
            <div class="row align-items-center col-mb-50">
                <div class="col-md-5">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/technology/smart.jpg') }}" alt="smart">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <h1>Smart Logistics Optimization</h1>
                    <span><b>Client:</b> Global Logistics Corporation
                    <p><b>
                    Challenge:</b> The client faced inefficiencies in their supply chain, leading to increased operational costs and delayed deliveries.<br><b>Solution:</b> Our team developed an AI-powered logistics optimization system that analyzed real-time data, optimized route planning, and dynamically adjusted transportation schedules. The system also incorporated IoT sensors to monitor cargo conditions and ensure timely delivery.</p>
                    </span>

                </div>
            </div>

            <div class="line"></div>

            <div class="row align-items-center col-mb-50">
                <div class="col-md-5 order-md-last">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/technology/remote.jpg') }}" alt="remote">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <h1>Remote Healthcare Platform</h1>
                    <span><b>Client:</b> HealthFirst Medical Group
                        <p><b>Challenge:</b> HealthFirst wanted to extend their medical services to remote areas and provide patients with access to specialized healthcare remotely.
                        <br><b>Solution:</b> We developed a comprehensive telemedicine platform that allowed patients to consult with doctors and specialists via video calls. The platform also integrated electronic health records (EHRs) for seamless patient data management and secure communication channels for medical professionals</p>
                    </span>
                </div>
            </div>
            <div class="line"></div>

            <div class="row align-items-center col-mb-50">
                <div class="col-md-5">
                    <img data-animate="fadeIn" class="aligncenter" src="{{ asset('frontend/images/technology/ai.jpg') }}" alt="Macbook">
                </div>

                <div class="col-md-7 text-center text-md-start">
                    <h2>AI-Driven Customer Service Enhancement</h2>
                    <span><b>Client:</b> E-Commerce Emporium
                        <p><b>Challenge: </b>The e-commerce company struggled to handle a large volume of customer inquiries efficiently and provide personalized responses.
                        <br><b>Solution:</b> Our team implemented an AI-driven customer service system that utilized natural language processing (NLP) and sentiment analysis. This system automatically handled common customer queries and routed complex issues to human agents.</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->
@endsection