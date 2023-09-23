<?php

return [
	'contact_no' => '8824294708',
	'fax' => '47854950575',
	'company_address' => 'Marol Pipeline, Andheri East, Mumbai 400059',
	'email' => 'info@ume.com',
	'SEND_CUSTOM_EMAIL' => TRUE,
	'EMAIL_FROM' => env('MAIL_FROM_ADDRESS', 'singharjun93124@gmail.com'),
	'EMAIL_FROM_NAME' => env('MAIL_FROM_NAME', 'Singh Arjun'),
	'EMAIL_TO' => ['ritesh.s.mypcot@gmail.com', 'ankita.s@mypcot.com', 'chhotelal.s@mypcot.com'],
	'base_path' => env('BASE_URL'),
	'meta_tags' => [
		"home" => [
			"canonical" => env('BASE_URL'),
			"title" => "Ume Solutions",
			"keywords" => "Ume solutions, laga; consulting, corporate treasury, fund investment, website designing, logo designing, content management system, IPO Consulting, Fundraising, technology system, infotech, Ume-solutions.com",
			"description" => "Welcome to UME Solutions, your partner in cutting-edge technology solutions. We specialize in custom software development, IT services, and digital transformation to propel your business to new heights."
		],
		"about_us" => [
			"canonical" => env('BASE_URL').'about',
			"title" => "About Us",
			"keywords" => "Ume solutions Infotech Private Limited,Company Details,company, overview,about us ,mumbai,kandivali",
			"description" => "Ume solutions Infotech is a software company registered with Indian government in 2017."
		],
		"our_history" => [
			"canonical" => env('BASE_URL').'our_history',
			"title" => "Our History",
			"keywords" => "Ume solutions Infotech Private Limited,Company Details,company, history, mumbai",
			"description" => "Ume solutions Infotech is a reputed software company located in Mumbai and is growing rapidly."
		],
		"awards" => [
			"canonical" => env('BASE_URL').'awards',
			"title" => "Awards",
			"keywords" => "Welcome to Ume solutions - Where excellence meets innovation!, Explore our cutting-edge solutions and award-winning services, Join us on our journey to redefine excellence in the digital landscape.",
			"description" => "Your one-stop destination for innovative solutions. Explore our products and services, driven by a commitment to CSR and sustainability."
		],
		"csr" => [
			"canonical" => env('BASE_URL').'csr',
			"title" => "CSR of the Company",
			"keywords" => "Welcome to Ume solutions ,kandivali company, overview, website designing, award-winning services, mumbai",
			"description" => "Your one-stop destination for innovative solutions. Explore our products and services, driven by a commitment to CSR and sustainability."
		],
		"fund_raising" => [
			"canonical" => env('BASE_URL').'fund_raising',
			"title" => "Fund Raising",
			"keywords" => "Fundraising,Ume solutions, Charitable Giving, Donations, Nonprofit, Crowdfunding, Philanthropy, Social Impact, Giving Back, Support a Cause.",
			"description" => "Join Ume solutions  in their mission to make a difference. Explore our fundraising initiatives that support various impactful causes. Empower change through charitable giving, donations, and crowdfunding."
		],
		"ipo_consulting" => [
			"canonical" => env('BASE_URL').'ipo_consulting',
			"title" => "IPO Consulting",
			"keywords" => "IPO consulting, Initial Public Offering, IPO advisory, IPO process, IPO services, IPO experts, IPO planning, IPO guidance, IPO preparation.",
			"description" => "Ume solutions - Your Trusted Partner for IPO Consulting. Our experienced team of IPO experts offers comprehensive advisory services to guide you through the Initial Public Offering process. "
		],
		"corporate_treasury" => [
			"canonical" => env('BASE_URL').'corporate_treasury',
			"title" => "Corporate Treasury",
			"keywords" => "Corporate Treasury,mumbai,kandivali,Treasury Solutions,Financial Planning",
			"description" => "Enhance your corporate financial strategies with Ume solutions's comprehensive Corporate Treasury solutions. Streamline cash management, mitigate financial risks, and optimize liquidity with our expert treasury services and consulting."
		],
		"fund_investment" => [
			"canonical" => env('BASE_URL').'fund_investment',
			"title" => "Fund Investment",
			"keywords" => "Wealth Management,Investment Services, Financial Planning, Stocks, Retirement Planning",
			"description" => "your trusted partner in fund investment and wealth management. Our expert team is dedicated to helping you achieve your financial goals through thoughtful financial planning."
		],
		"legal_consulting" => [
			"canonical" => env('BASE_URL').'legal_consulting',
			"title" => "Legal Consulting",
			"keywords" => "Legal Consulting, Legal Advisory, Corporate Law, Contract Review, Regulatory Compliance, Litigation Support, Intellectual Property, Employment Law, Dispute Resolution",
			"description" => "From corporate law and contract review to regulatory compliance and intellectual property, we provide comprehensive solutions tailored to your needs."
		],
		"technology_system" => [
			"canonical" => env('BASE_URL').'technology_system',
			"title" => "Technology System",
			"keywords" => "Technology System, IT Solutions, Software Development, Network Services, Cybersecurity, Cloud Computing, Data Analytics, AI and Machine Learning, IT Consulting.",
			"description" => "your one-stop destination for cutting-edge IT solutions and services. We specialize in delivering innovative technology systems that empower businesses to thrive in the digital age."
		],
		"gallery" => [
			"canonical" => env('BASE_URL').'gallery',
			"title" => "Gallery",
			"keywords" => "Culinary Delight, Diverse Menu, Mouthwatering Flavors, Inviting Ambiance, Skilled Chefs, Unforgettable Dining Experience",
			"description" => "Discover a culinary delight at our Galley. Indulge in a feast for the senses with our diverse and mouthwatering menu, crafted with the finest ingredients and inspired by flavors from around the world."
		],
		"events" => [
			"canonical" => env('BASE_URL').'events',
			"title" => "Events",
			"keywords" => "Engaging Events, Memorable Experiences, Expert Planning, Creative Themes, Seamless Execution, Unforgettable Celebrations",
			"description" => "Our team of expert planners is dedicated to bringing your vision to life, ensuring every detail is meticulously crafted to perfection. From creative themes that spark imagination to seamless execution that leaves a lasting impression."
		],
		"blogs" => [
			"canonical" => env('BASE_URL').'blogs',
			"title" => "Blogs",
			"keywords" => "Insightful, Expert opinions, Diverse topics, Latest trends, Practical tips, Personal stories, Learning, Growth",
			"description" => "Discover a wealth of insightful articles, expert opinions, and thought-provoking content covering a myriad of topics."
		],
		"careers" => [
			"canonical" => env('BASE_URL').'careers',
			"title" => "Careers",
			"keywords" => "Opportunities, Careers, Growth, Employment, Jobs, Work, Professional Development.",
			"description" => " We offer a diverse range of employment options in a vibrant and supportive work environment. Whether you are a seasoned professional."
		],
		"contact_us" => [
			"canonical" => env('BASE_URL').'contact_us',
			"title" => "Contact Us",
			"keywords" => "Contact, Get in touch, Feedback, Inquiries, Collaboration, Partnership, Communication.",
			"description" => "Get in touch with us today through our Contact page. We value your feedback, inquiries, and collaboration opportunities."
		],
		"tnc" => [
			"canonical" => env('BASE_URL').'terms',
			"title" => "Terms & Conditions",
			"keywords" => "Terms & Conditions, Policies, Legal, Agreement, Terms of Use, Privacy Policy, User Agreement, Disclaimers, Terms of Service, Rules.",
			"description" => "Welcome to our Terms & Conditions page. Here, you can find important information about the legal agreement governing your use of our website and services. These terms outline the rules, rights, and responsibilities for both you and us, ensuring a transparent and fair relationship."
		],
		"privacy_policy" => [
			"canonical" => env('BASE_URL').'privacy',
			"title" => "Privacy & Policy",
			"keywords" => "Privacy, Policy, Data Protection, Personal Information, Confidentiality, Consent, Trust, Transparency, Compliance, Rights.",
			"description" => "Your privacy matters to us. Welcome to our Privacy Policy page, where we outline how we collect, use, and safeguard your personal information. We are committed to protecting your data and ensuring its confidentiality."
		],
		"sitemap" => [
			"canonical" => env('BASE_URL').'sitemap',
			"title" => "Sitemap",
			"keywords" => "Sitemap, Website Structure, Navigation, Pages, Links, Content Hierarchy, XML, Search Engines, User Experience.",
			"description" => "The sitemap helps you easily navigate through our various pages and access the information you're looking for quickly."
		],
		"desclaimer" => [
			"canonical" => env('BASE_URL').'disclaimer',
			"title" => "Desclaimer",
			"keywords" => "Disclaimer, Terms, Conditions, Liability, Information, Accuracy, Professional Advice, Reliability, Third-party Links, User-generated Content.",
			"description" => "Please read our Disclaimer carefully. This page outlines the terms and conditions for using our website and the information presented here. The content on this website is for general informational purposes only and should not be considered as professional advice or a substitute for seeking professional guidance."
		],
		"scam_notice" => [
			"canonical" => env('BASE_URL').'scam',
			"title" => "Scam Notice",
			"keywords" => "Scam, Fraud, Warning, Alert, Deception, Phishing, Scam Notice, Scam Awareness, Scam Prevention, Fraudulent Activities.",
			"description" => "We take your safety and security seriously. This page serves as a warning against potential scams and fraudulent activities that may target individuals like you. It's essential to remain vigilant and stay informed about the latest scam tactics used by malicious actors."
		]
	]
];
?>
