@extends('frontend/layouts/app')
@section('content')
<!-- //class="slider-element slider-parallax include-header min-vh-100" -->
<section class="page-title" style="background-image: url('frontend/images/career.jpg'); background-size: cover; background-position: top right;">
    <!-- <img src="{{ asset('frontend/images/parallax.jpg') }}" class="parallax-bg"> -->
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="text-dark">Careers</h1>
				<span class="text-dark">Join our Fabulous Team of Intelligent Individuals</span>
            </div>
        </div>
    </div>
</section>
<!-- .page-title end -->
       <!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row col-mb-50">
						<div class="col-lg-7">
						<h1><span>Current Job Openings</span></h1>
							<div class="fancy-title title-bottom-border">
								<h3>Fundraising Manager</h3>
							</div>

							<p>The fundraising manager will be responsible for building good relationships with prospective donors and clients across multiple sectors, communicating with the broader public and internal teams, delegating tasks, and drawing up plans to ensure annual targets are met.</p>

							<div class="accordion accordion-bg">

								<div class="accordion-header">
								<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Requirements
									</div>
								</div>
								<div class="container">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="fa-solid fa-check"></i>Bachelor's degree in PR, Fundraising, or any related field.</li>
										<li><i class="fa-solid fa-check"></i>3-5 years of fundraising experience.</li>
										<li><i class="fa-solid fa-check"></i>Previous experience in sales or marketing also acceptable.</li>
										<li><i class="fa-solid fa-check"></i>Sound knowledge of the charity sector.</li>
										<li><i class="fa-solid fa-check"></i>Experience managing a team.</li>
										<li><i class="fa-solid fa-check"></i>Excellent written, verbal, and telephonic communication skills.</li>
										
									</ul>
								</div>
							</div>
							<a href="#job-apply" data-scrollto="#job-apply" class="button button-3d button-black m-0">Apply Now</a>
							<div class="divider divider-sm m-4 "><i class="bi-star-fill"></i></div>

							<div class="fancy-title title-bottom-border">
								<h3>IPO Specialist(Fresher)</h3>
							</div>

							<p>An IPO specialist is responsible for helping a company navigate the IPO process from start to finish. This includes everything from preparing financial statements and regulatory filings to coordinating with underwriters and institutional investors.</p>

							<div class="accordion accordion-bg">

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Requirements
									</div>
								</div>
								<div class="container">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="fa-solid fa-check"></i>Fresh graduates with Bachelor’s Degree in Accountancy.</li>
										<li><i class="fa-solid fa-check"></i>At least one year relevant experiences for the Senior position.</li>
										<li><i class="fa-solid fa-check"></i>Good numerical and analytical skills.</li>
										<li><i class="fa-solid fa-check"></i>Computer literate – MS Excel and MS Word.</li>
										<li><i class="fa-solid fa-check"></i>Proficiency in spoken and written Chinese & English.</li>
										
									</ul>
								</div>
								
							</div>

							<a href="#job-apply" data-scrollto="#job-apply" class="button button-3d button-black m-0">Apply Now</a>

							<div class="divider divider-sm m-4"><i class="bi-star-fill"></i></div>

							<div class="fancy-title title-bottom-border">
								<h3>Legal Consultant</h3>
							</div>

							<p>Repudiandae quasi perspiciatis ea placeat nobis asperiores quod fuga ipsa facere enim ipsum expedita debitis, sit quia adipisci deserunt vitae hic obcaecati voluptates rerum nihil.</p>

							<div class="accordion accordion-bg">

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed bi-check-circle-fill"></i>
										<i class="accordion-open bi-x-circle-fill"></i>
									</div>
									<div class="accordion-title">
										Requirements
									</div>
								</div>
								<div class="container">
									<ul class="iconlist iconlist-color mb-0">
										<li><i class="fa-solid fa-check"></i>Bachelor's degree in law.</li>
										<li><i class="fa-solid fa-check"></i>Experience in the law field.</li>
										<li><i class="fa-solid fa-check"></i>Strong analytical and research skills.</li>
										<li><i class="fa-solid fa-check"></i>Effective interpersonal and communication skills.</li>
										<li><i class="fa-solid fa-check"></i>Ability to work well within a team and individually.</li>
									</ul>
								</div>
							</div>

							<a href="#job-apply" data-scrollto="#job-apply" class="button button-3d button-black m-0">Apply Now</a>
						</div>
						<div class="col-lg-5">
							<div class="heading-block">
								<h3><span id="job-apply">Apply Now</span></h3>
								<span>And we'll get back to you within 48 hours.</span>
							</div>
							<div class="contact-form-overlay col-md-12 p-3">
								<div class="form-widget">
								<div class="form-result"></div>
								
								<form action="{{ route('careers.addData') }}" class="row mb-0" method="post" id="saveCareer" enctype="multipart/form-data">
									@csrf
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="col-md-6 form-group">
										<label for="fname">First Name <span class="text-danger">*</span></label>
										<input type="text" id="fname" name="firstname" tabindex="1" value="" class="form-control required" oninput="validateNameInput(this)">
									</div>

									<div class="col-md-6 form-group">
										<label for="lname">Last Name <span class="text-danger">*</span></label>
										<input type="text" id="lname" name="lastname" tabindex="2" value="" class="form-control required" oninput="validateNameInput(this)">
									</div>

									<div class="w-100"></div>

									<div class="col-12 form-group">
										<label for="email">Email <span class="text-danger">*</span></label>
										<input type="email" id="email" name="email" tabindex="3" value="" class="required email form-control">
									</div>

									<div class="col-md-6 form-group">
										<label for="age">Age <span class="text-danger">*</span></label>
										<input type="text" maxlength="2" name="age" id="age" value="" tabindex="4" class="form-control required" oninput="filterNonNumeric(this)">

									</div>

									<div class="col-md-6 form-group">
										<label for="city">City <span class="text-danger">*</span></label>
										<input type="text" maxlength="20" name="city" id="city" value="" size="22" tabindex="5" class="form-control required" oninput="validateNameInput(this)">
									</div>

									<div class="w-100"></div>

									<div class="col-12 form-group">
										<label for="position">Position <span class="text-danger">*</span></label>
										<select name="position" id="position"  tabindex="6" class="form-select required">
											<option value="">-- Select Position --</option>
											<option value="Fundraising Manager">Fundraising Manager</option>
											<option value="IPO Specialist">IPO Specialist(Fresher)</option>
											<option value="IPO Consultant">IPO Consultant</option>
											<option value="Legal Consultant">Legal Consultant</option>
										</select>
									</div>

									<div class="col-md-6 form-group">
										<label for="salary">Current CTC</label>
										<input type="text" maxlength="20"oninput="filterNonNumeric(this)" id="salary" value="" size="22" tabindex="7" class="form-control">
									</div>

									<div class="col-md-6 form-group">
										<label for="time">Tentative Joining Date</label>
										<input type="date" name="start_date" id="start" value="" size="22" tabindex="8" class="form-control">
									</div>

									<div class="w-100"></div>

									<div class="col-12 form-group">
										<label for="website">Website (if any)</label>
										<input type="text" name="website" id="website" value="" size="22" tabindex="9" class="form-control">
									</div>

									<div class="col-12 form-group">
										<label for="experience">Experience (optional)</label>
										<textarea name="experience" id="experience" rows="3" tabindex="10" class="form-control" maxlength="250"></textarea>
									</div>

									<div class="col-12 form-group">
										<label for="application">Application <span class="text-danger">*</span></label>
										<textarea name="application" id="application" rows="3" tabindex="11" class="form-control required" maxlength="250"></textarea>
									</div>

									<div class="col-12 form-group">
										<label for="cv_path">Upload CV <span class="text-danger">*</span></label>
										<input type="file" accept=".pdf,.doc,.docx" id="cv_path" onchange="handleFileInputChange()" name="cv_path" value="" class="required form-control">
									</div>

									<div class="col-12 form-group">
										<button class="button button-3d button-large w-100 m-0" type="button" onclick="submitForm('saveCareer','post')">Send Application</button>
									</div>

								</form>
							</div>
						</div>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

 @endsection
 