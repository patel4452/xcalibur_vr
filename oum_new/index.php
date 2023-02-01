<!DOCTYPE html>
<html lang="en">
<head>
	<title>OUM New LP</title>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.13.1/themes/blitzer/jquery-ui.css">
	<link rel="stylesheet" href="css/style.css">
  
  
</head>
<body>
<section class="hero-banner">
	<img src="images/logo.png" class="logo-top" alt="" />
	<div class="hero-copy">
		<h2>Redefine Flexibility <br>For Working Adults</h2>
		<p>Welcome to the university of choice for part-time <br class="hidden-xs">studies. We provide accessiblity, affordability, <br class="hidden-xs">and flexibility every step of the way.</p>
	</div>
	<picture>
		<source srcset="images/hero_banner.jpg" media="(min-width: 1240px)">
		<source srcset="images/hero_banner-ipad.jpg" media="(min-width: 940px)">
		<source srcset="images/hero_banner-mobile.jpg" media="(min-width: 724px)">

		<img srcset="" src="images/hero_banner-mobile.jpg" alt="" />
	</picture>
	<div class="hero-form">
		<form>
			<div class="form-box">
				<form id="scpForm" method="post"  name="submit-to-google-sheet" action="contact-form-handler.php">
					<div class="form-head">
						<h3>Enquire For Our 2022 <br>Intake Now</h3>
						<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
							<li class="nav-item" role="presentation" >
								<a class="nav-link active first-active" id="step--tab" data-toggle="tab" href="#step-one"
									role="tab" aria-controls="home" aria-selected="true">&nbsp;</a>
							</li>
							<li class="nav-item" role="presentation" >
								<a class="nav-link" id="step--two" data-toggle="tab" href="#step-two" role="tab"
									aria-controls="profile" aria-selected="false">&nbsp;</a>
							</li>
							<li class="overlay-tab"></li>
						</ul>
						<span id="step-term">Step 1/2</span>
					</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active step1" id="step-one" role="tabpanel"
							aria-labelledby="home-tab">
							<div class="steps">
								<h6>&nbsp;</h6>
								<div class="form-group">
									<select class="form-control" id="learning_centers"  name="learning_centers" >
									<option value="">Choose a Learning Centre</option>
									<option value='Kelana Jaya'>Kelana Jaya</option>
									<option value='Petaling Jaya'>Petaling Jaya</option>
									<option value='Sri Rampai'>Sri Rampai</option>
									<option value='Bangi'>Bangi</option>
									<option value='Kuala Selangor'>Kuala Selangor</option>
									<option value='Shah Alam'>Shah Alam</option>
									<option value='Banting'>Banting</option>
									<option value='Kota Bharu'>Kota Bharu</option>
									<option value='Kuala Terengganu'>Kuala Terengganu</option>
									<option value='Kuantan'>Kuantan</option>
									<option value='Temerloh'>Temerloh</option>
									<option value='Kuala Lipis'>Kuala Lipis</option>
									<option value='Alor Setar'>Alor Setar</option>
									<option value='Sungai Petani'>Sungai Petani</option>
									<option value='Seberang Jaya'>Seberang Jaya</option>
									<option value='Ipoh & Greenhill'>Ipoh & Greenhill</option>
									<option value='Taiping'>Taiping</option>
									<option value='Tanjong Malim'>Tanjong Malim</option>
									<option value='Manjung'>Manjung</option>
									<option value='Melaka'>Melaka</option>
									<option value='Seremban'>Seremban</option>
									<option value='Simpang Renggam'>Simpang Renggam</option>
									<option value='Pontian'>Pontian</option>
									<option value='Batu Pahat'>Batu Pahat</option>
									<option value='Johor Bahru'>Johor Bahru</option>
									<option value='Kuching'>Kuching</option>
									<option value='Sibu'>Sibu</option>
									<option value='Bintulu'>Bintulu</option>
									<option value='Miri'>Miri</option>
									<option value='Kota Kinabalu'>Kota Kinabalu</option>
									<option value='Kota Marudu'>Kota Marudu</option>
									<option value='Sandakan'>Sandakan</option>
									<option value='Lahad Datu'>Lahad Datu</option>
									<option value='Tawau'>Tawau</option>
									<option value='Keningau'>Keningau</option>
									</select>
									<label style="display:none;" id="learning_centers-error" class="error" for="learning_centers">Please select a Learning Centre</label>
								 </div>
								<div class="form-group">
                                            <select name="courses" id="courses" class="form-control">
												<option value="">Choose a course</option>
                                                <optgroup label="Business & Management">
												<option value="Diploma in Accounting (DIA)">Diploma in Accounting (DIA)</option>
												<option value="Diploma in Human Resource Management (DHRM)">Diploma in Human Resource Management (DHRM)</option>
												<option value="Diploma in Management (DIM)">Diploma in Management (DIM)</option>
												<option value="Bachelor of Accounting with Honours *(Accredited by CPA Australia)(BAC)">Bachelor of Accounting with Honours *(Accredited by CPA Australia)(BAC)</option>
												<option value="Bachelor of Business Administration with Honours (BBA)">Bachelor of Business Administration with Honours (BBA)</option>
												<option value="Bachelor of Communication with Honours (BCOM)">Bachelor of Communication with Honours (BCOM)</option>
												<option value="Bachelor of Human Resource Management with Honours (BHRM)">Bachelor of Human Resource Management with Honours (BHRM)</option>
												<option value="Bachelor of Management with Honours (BIM)">Bachelor of Management with Honours (BIM)</option>
												<option value="Bachelor of Marketing (BM)">Bachelor of Marketing (BM)</option>
												<option value="Bachelor of Tourism Management with Honours (BTRM)">Bachelor of Tourism Management with Honours (BTRM)</option>
												<option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
												<option value="Master of Corporate Communication (MCC)">Master of Corporate Communication (MCC)</option>
												<option value="Master of Human Resource Management (MHRM)">Master of Human Resource Management (MHRM)</option>
												<option value="Master of Management (MM)">Master of Management (MM)</option>
												<option value="Doctor of Business Administration (DBA)">Doctor of Business Administration (DBA)</option>
												<option value="Doctor of Philosophy (Business Administration)">Doctor of Philosophy (Business Administration)</option>
												</optgroup>
												<optgroup label="Applied Science">
												<option value="Diploma in Information Technology (MBOT Certified)(DIT)">Diploma in Information Technology (MBOT Certified)(DIT)</option>
												<option value="Bachelor of Information Technology with Honours (MBOT Certified)*(BIT)">Bachelor of Information Technology with Honours (MBOT Certified)*(BIT)</option>
												<option value="Bachelor of Manufacturing Management with Honours (BMMG)">Bachelor of Manufacturing Management with Honours (BMMG)</option>
												<option value="Bachelor of Medical & Health Sciences with Honours (BMHS)">Bachelor of Medical & Health Sciences with Honours (BMHS)</option>
												<option value="Bachelor of Nursing Sciences with Honours (BNS)">Bachelor of Nursing Sciences with Honours (BNS)</option>
												<option value="Bachelor of Occupational Safety and Health Management with Honours (BOSHM)">Bachelor of Occupational Safety and Health Management with Honours (BOSHM)</option>
												<option value="Bachelor of Science in Project & Facility Management with Honours (With SIRIM Certification)(BPFM)">Bachelor of Science in Project & Facility Management with Honours (With SIRIM Certification)(BPFM)</option>
												<option value="Master of Facility Management (with SIRIM Certification)(MFM)">Master of Facility Management (with SIRIM Certification)(MFM)</option>
												<option value="Master of Information Technology (MIT)">Master of Information Technology (MIT)</option>
												<option value="Master of Nursing (MN)">Master of Nursing (MN)</option>
												<option value="Master of Occupational Safety & Health Risk Management (MOSHRM)">Master of Occupational Safety & Health Risk Management (MOSHRM)</option>
												<option value="Master of Project Management (MPM)">Master of Project Management (MPM)</option>
												<option value="Master of Quality Management (with SIRIM Certification)(MQM)">Master of Quality Management (with SIRIM Certification)(MQM)</option>
												<option value="Doctor of Nursing (DN)">Doctor of Nursing (DN)</option>
												<option value="Doctor of Philosophy (Information Technology)">Doctor of Philosophy (Information Technology)</option>
												<option value="Doctor of Philosophy (Science)">Doctor of Philosophy (Science)</option>
												</optgroup>
												<optgroup label="Education & Social Science">
												<option value="Diploma in Early Childhood Education (DECE)">Diploma in Early Childhood Education (DECE)</option>
												<option value="Diploma in Islamic Studies with Education (DISE)">Diploma in Islamic Studies with Education (DISE)</option>
												<option value="Bachelor of Early Childhood Education with Honours (BECHE)">Bachelor of Early Childhood Education with Honours (BECHE)</option>
												<option value="Bachelor of Education (TESL) with Honours (BeTESL)">Bachelor of Education (TESL) with Honours (BeTESL)</option>
												<option value="Bachelor of English Studies with Honours (BEST)">Bachelor of English Studies with Honours (BEST)</option>
												<option value="Bachelor of Islamic Studies(Islamic Management) with Honours (BIS)">Bachelor of Islamic Studies(Islamic Management) with Honours (BIS)</option>
												<option value="Bachelor of Liberal Studies with Honours (BLS)">Bachelor of Liberal Studies with Honours (BLS)</option>
												<option value="Bachelor of Political Science With Honours (BPS)">Bachelor of Political Science With Honours (BPS)</option>
												<option value="Bachelor of Psychology with Honours (BPSY)">Bachelor of Psychology with Honours (BPSY)</option>
												<option value="Bachelor of Teaching (Primary Education) with Honours (BTPE)">Bachelor of Teaching (Primary Education) with Honours (BTPE)</option>
												<option value="Postgraduate Diploma in Teaching (PGDT)">Postgraduate Diploma in Teaching (PGDT)</option>
												<option value="Master of Counseling (MC)">Master of Counseling (MC)</option>
												<option value="Master of Early Childhood Education (MECHE)">Master of Early Childhood Education (MECHE)</option>
												<option value="Master of Education (MeD)">Master of Education (MeD)</option>
												<option value="Master of English Studies (MEST)">Master of English Studies (MEST)</option>
												<option value="Master of Instructional Design and Technology (MIDT)">Master of Instructional Design and Technology (MIDT)</option>
												<option value="Master of Islamic Studies (MIST)">Master of Islamic Studies (MIST)</option>
												<option value="Master of Psychology (MPSY)">Master of Psychology (MPSY)</option>
												<option value="Doctor of Education (EdD)">Doctor of Education (EdD)</option>
												<option value="Doctor of Philosophy (Arts)">Doctor of Philosophy (Arts)</option>
												<option value="Doctor of Philosophy (Education)">Doctor of Philosophy (Education)</option>
												</optgroup>
                                            </select>
											<label style="display:none;" id="courses-error" class="error" for="courses">Please Select a Course</label>
                                        </div>
								
								<button class="btn custom-btn" id="nextbotton">Next Step</button>
							</div>
						</div>
						<div class="tab-pane fade step2" id="step-two" role="tabpanel" aria-labelledby="profile-tab">
							<div class="steps">
								<h6>Tell us about yourself</h6>
								<div class="checkbox"></div>
								<div class="form-group">
									<input type="text" id="fullname" name="fullname"  class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Mobile No.">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="ic_passport"  name="ic_passport" placeholder="IC/Passport No.">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="emailId"  name="emailId" placeholder="Email Address">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="city"  name="city" placeholder="City">
								</div>
								<div class="form-group alumni-check">
									<label for="alumni"> <input type="checkbox" class="form-control" value="Alumni" id="alumni_check"  name="alumni_check">  Are you an OUM Alumni? </label>
								</div>
								
								<button id="sbn_btn" type="submit" class="btn custom-btn">Submit</button>
							</div>
						</div>
					</div>
					<div class="form-group" style="display:none;">
					<?php date_default_timezone_set("Asia/Kuala_Lumpur"); ?>
						<input type="hidden" class="form-control" id="alumni"  name="alumni" value="NO">
						<input type="hidden" class="form-control" id="submit_time"  name="submit_time" value="<?php echo date("H:i:s");; ?>">
						<input type="hidden" class="form-control" id="utm_source"  name="utm_source" value="<?php if (isset($_GET['utm_source']))echo $_GET['utm_source']; ?>">
						<input type="hidden" class="form-control" id="utm_medium"  name="utm_medium" value="<?php if (isset($_GET['utm_medium']))echo $_GET['utm_medium']; ?>">
						<input type="hidden" class="form-control" id="utm_campaign"  name="utm_campaign" value="<?php if (isset($_GET['utm_campaign']))echo $_GET['utm_campaign']; ?>">
						<input type="hidden" class="form-control" id="utm_term"  name="utm_term" value="<?php if (isset($_GET['utm_term']))echo $_GET['utm_term']; ?>">
						<input type="hidden" class="form-control" id="utm_content"  name="utm_content" value="<?php if (isset($_GET['utm_content']))echo $_GET['utm_content']; ?>">
					</div>
				</form>
			</div>
		</form>
	</div>
</section>
<section class="layer2">
	<div class="layer2-head">
		<div class="container">
			<div class="row">
				<div class="col-sm text-center">
				  <h3>Your Trusted University In Flexible Learning</h3>
				  <p>OUM provides education for everyone at their convenience</p>
				</div>
			</div>
		</div>
	</div>
		
		<div class="card-group layer2-card-group">
		  <div class="card  layer2-card">
			
			<picture>
				<source srcset="images/study.jpg" media="(min-width: 1240px)">
				<source srcset="images/study.jpg" media="(min-width: 940px)">
				<source srcset="images/study-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/study-mobile.jpg" alt="Flexible Study Mode">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Flexible Study Mode</h4>
			  <p class="card-text">You may study at your own pace, anytime, anywhere, without having to sacrifice your work or personal interest.</p>
			</div>
		  </div>
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/admission.jpg" media="(min-width: 1240px)">
				<source srcset="images/admission.jpg" media="(min-width: 940px)">
				<source srcset="images/admission-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/admission-mobile.jpg" alt="Flexible Admission">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Flexible Admission</h4>
			  <p class="card-text">We can also assess your skills, knowledge, and competencies for credit awards as part of the recruitment process.</p>
			</div>
		  </div>
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/location.jpg" media="(min-width: 1240px)">
				<source srcset="images/location.jpg" media="(min-width: 940px)">
				<source srcset="images/location-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/location-mobile.jpg" alt="Flexible Study Location">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Flexible Study Location</h4>
			  <p class="card-text">Our Learning Centres allow you to attend classes or seek advice without having to travel far. Look out for centres near you.</p>
			</div>
		  </div>
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/duration.jpg" media="(min-width: 1240px)">
				<source srcset="images/duration.jpg" media="(min-width: 940px)">
				<source srcset="images/duration-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/duration-mobile.jpg" alt="Flexible Study Duration">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Flexible Study Duration</h4>
			  <p class="card-text">You can earn the degree you want at less time and cost by transferring credits from previous education and work experience.</p>
			</div>
		  </div>
		</div>
	
</section>
<section class="layer3">
	<div class="layer3-left">
		<div class="layer3-leftcopy">
			<h3 class="color-font">Make Connections That Matter At OUM</h3>
			<p>Success is more than your grade. Join OUM today and be part of our goal community and step up your networking game.</p>
		</div>
	</div>
	<div class="layer3-right">
		<picture>
			<source srcset="images/layer3-banner.png" media="(min-width: 1240px)">
			<source srcset="images/layer3-banner.png" media="(min-width: 940px)">
			<source srcset="images/layer3-banner.png" media="(min-width: 724px)">
			<img class="img-responsive" srcset="" src="images/layer3-banner.png" alt="" />
		</picture>
		<!--
		<div class="item item1">
			<div class="item-image">
				<img src="images/item1.png" class="img-responsive">
			</div>
			<div class="item-copy text-center">
				<h3>180,000</h3>
				<p>Learners <br>Worldwide</p>
			</div>
		</div>
		<div class="line line1"></div>
		<div class="item item2">
			<div class="item-image">
				<img src="images/item2.png" class="img-responsive">
			</div>
			<div class="item-copy text-center">
				<h3>85,000</h3>
				<p>Graduates</p>
			</div>
		</div>
		<div class="line line2"></div>
		<div class="item item3">
			<div class="item-image">
				<img src="images/item3.png" class="img-responsive">
			</div>
			<div class="item-copy text-center">
				<h3>35</h3>
				<p>Learning <br>Centres</p>
			</div>
		</div>
		<div class="line line3"></div>
		<div class="item item4">
			<div class="item-image">
				<img src="images/item4.png" class="img-responsive">
			</div>
			<div class="item-copy text-center">
				<h3>54</h3>
				<p>Programmes</p>
			</div>
		</div>-->
	
	</div>
</section>
<section class="layer4">
	<div class="top-background"></div>
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-12">
				<div class="course-copy text-center">
					<h3>Explore Our Courses</h3>
					<p>All OUM programmes are approved by Ministry of Higher Education (MOHE) <br>and fully accredited by Malaysian Qualifications Agency (MQA).</p>
				</div>
			</div>
			<div class="col-12">
				<div class="filter-section text-left">
					<label for="faculty_id">Jump to </label>
					<select id="faculty_id" name="faculty_id" onchange="filterProgram();">
					<option value="">Faculty</option>
					<option value="Applied Sciences">Applied Sciences</option>
					<option value="Business and Management">Business and Management</option>
					<option value="Education and Social Sciences">Education and Social Sciences</option>
					</select>
					<label for="level_of_study__id">Filter by </label>
					<select id="level_of_study__id" name="level_of_study__id" onchange="filterProgram();">
					<option value="">Level of Study</option>
					<option value="Undergraduate">Undergraduate</option>
					<option value="Postgraduate">Postgraduate</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="program_body">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-12">
					<div class="course-copy2 text-center">
						Welcome to Open University Malaysia where programmes are designed for professionals like you.
					</div>
				</div>
			</div>
		</div>
		<div class="card-wrapper"></div>
	</div>
</section>
<section class="layer5">
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-sm-12 col-md-6 col-custom-width-tab d-flex align-items-center justify-content-center yellow-bg">
				<div class="layer5-copy">
					<h3>Graduate Faster Using <br class="hidden-xs">Your Work Experience</h3>
					<p>Find out how to leverage your prior experience to <br class="hidden-xs">shorten the study duration through <strong>Accreditation of <br class="hidden-xs">Prior Experiential Learning (APEL).</strong></p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-custom-width-tab p-0">
				<div class="img-wrap">
					<picture>
						<source srcset="images/layer5.jpg" media="(min-width: 1240px)">
						<source srcset="images/layer5.jpg" media="(min-width: 940px)">
						<source srcset="images/layer5.jpg" media="(min-width: 724px)">
						<img srcset="" src="images/layer5.jpg" alt="" />
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="layer6">
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-custom-width blue-bg">
				<div class="layer6-copy">
					<h3>APEL. <br class="hidden-xs">Perfect for <br class="hidden-xs">Working Adults</h3>
					<p>Explore APEL today to get where you are going, faster.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-custom-width p-0">
				<div id="apeltabs" class="p-0">
				  <ul class="p-0">
					<li class="p-0"><a href="#tabs-1">APEL A</a></li>
					<li class="p-0"><a href="#tabs-2">APEL C</a></li>
				  </ul>
				  <div id="tabs-1">
					<div class="row">
						<div class="col-sm-12 col-md-6 blue-bg tab-copy">
							<p>APEL (A) is an opportunity for those with work experience but lack academic qualifications to get accepted into a course and pursue studies. APEL involves the assessment of one's knowledge through previous working experience and allows you the opportunity to enter into a degree or master's program.</p>
						</div>
						<div class="col-sm-12 col-md-6 p-0">
							<div class="img-wrap">
								<picture>
									<source srcset="images/apel-a.jpg" media="(min-width: 1540px)">
									<source srcset="images/apel-a-mobile.jpg" media="(min-width: 1240px)">
									<source srcset="images/apel-a.jpg" media="(min-width: 724px)">
									<img srcset="" src="images/apel-a-mobile.jpg" alt="" />
								</picture>
							</div>
						</div>
					</div>
				  </div>
				  <div id="tabs-2">
					<div class="row">
						<div class="col-sm-12 col-md-6 p-0 hidden-xs">
							<div class="img-wrap">
								<picture>
									<source srcset="images/apel-c.jpg" media="(min-width: 1540px)">
									<source srcset="images/apel-c-mobile.jpg" media="(min-width: 1240px)">
									<source srcset="images/apel-c.jpg" media="(min-width: 724px)">
									<img srcset="" src="images/apel-c-mobile.jpg" alt="" />
								</picture>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 blue-bg tab-copy">
							<p>APEL (C) is confined to courses in programs that have obtained at least provisional accreditation from MQA. You'll be able to enjoy work experience credit transfers, exempting you from subjects within your course. It aims at helping you gain credits for your practical work experience in a subject area.</p>
						</div>
						<div class="col-sm-12 col-md-6 p-0 visible-xs">
							<div class="img-wrap">
								<picture>
									<source srcset="images/apel-c.jpg" media="(min-width: 1540px)">
									<source srcset="images/apel-c-mobile.jpg" media="(min-width: 1240px)">
									<source srcset="images/apel-c.jpg" media="(min-width: 724px)">
									<img srcset="" src="images/apel-c-mobile.jpg" alt="" />
								</picture>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="layer7">
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-sm-12 col-md-5 col-custom-width-tab">
				<div class="layer6-copy">
					<h3 class="color-font">Focus On Your <br>Journey To Success</h3>
					<p>At OUM, we make success possible <br>for busy working adults like you.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-custom-width-tab">
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="ss-wrap">
							<div class="ss-image">
								<img srcset="" src="images/ss-1.jpg" alt="" />
								<div class="circle-yellow circle"></div>
							</div>
							<div class="ss-copy text-center">
								<p class="mb-2"><strong>Saves Your Time </strong></p>
								<p>Reduces study period and <br>repetitive learning.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="ss-wrap">
							<div class="ss-image">
								<img srcset="" src="images/ss-2.jpg" alt="" />
								<div class="circle-blue circle"></div>
							</div>
							<div class="ss-copy text-center">
								<p class="mb-2"><strong>Saves Your Money</strong></p>
								<p>Reduces cost of Study due <br>to shorten study period.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="ss-wrap">
							<div class="ss-image">
								<img srcset="" src="images/ss-3.jpg" alt="" />
								<div class="circle-yellow circle"></div>
							</div>
							<div class="ss-copy text-center">
								<p class="mb-2"><strong>Your Experience Counts</strong></p>
								<p>Reduces study period and <br>repititive learning.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-1"></div>
		</div>
	</div>
</section>
<section class="layer2">
	<div class="layer2-head">
		<div class="container">
			<div class="row">
				<div class="col-sm text-center">
				  <h3>How Will You Learn</h3>
				  <p>Flexibility at its best</p>
				</div>
			</div>
		</div>
	</div>
		
		<div class="card-group layer2-card-group">
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/forum.jpg" media="(min-width: 1240px)">
				<source srcset="images/forum.jpg" media="(min-width: 940px)">
				<source srcset="images/forum-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/forum-mobile.jpg" alt="Online Forums">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Online Forums</h4>
			  <p class="card-text">It's just like you're there. with OUM's virtual classrooms, you can easily attend classes remotely from anywhere.</p>
			</div>
		  </div>
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/self-study.jpg" media="(min-width: 1240px)">
				<source srcset="images/self-study.jpg" media="(min-width: 940px)">
				<source srcset="images/self-study-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/self-study-mobile.jpg" alt="Self-Managed Study">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Self-Managed Study</h4>
			  <p class="card-text">Flexibility in its finest form! Study at your own pace using our Digital Library's freely available learning materials, including e-modules, video lectures, courseware, and other tools.</p>
			</div>
		  </div>
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/fully-online.jpg" media="(min-width: 1240px)">
				<source srcset="images/fully-online.jpg" media="(min-width: 940px)">
				<source srcset="images/fully-online-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/fully-online-mobile.jpg" alt="Fully Online Learning">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Fully Online Learning</h4>
			  <p class="card-text">It's just like you're there. With OUM's virtal classrooms, you can easily attend classes remotely from anywhere.</p>
			</div>
		  </div>
		  <div class="card  layer2-card">
			<picture>
				<source srcset="images/f2f-tutorials.jpg" media="(min-width: 1240px)">
				<source srcset="images/f2f-tutorials.jpg" media="(min-width: 940px)">
				<source srcset="images/f2f-tutorials-mobile.jpg" media="(min-width: 724px)">

				<img srcset="" class="card-img-top layer2-card-img-top" src="images/f2f-tutorials-mobile.jpg" alt="Face-To-Face Tutorials">
			</picture>
			<div class="card-block layer2-card-block text-center">
			  <h4 class="card-title">Face-To-Face Tutorials</h4>
			  <p class="card-text">Knowledge at your fingertips. Have unlimited accessto OUM's library of resources including books, journals, guided weekly e-lessons and e-tutorials, and more.</p>
			</div>
		  </div>
		</div>
	
</section>
<section class="layer8">
	<div class="layer8-head">
		<div class="container">
			<div class="row">
				<div class="col-sm text-center">
					<h3>Notable Alumni</h3>
					<p>Look at what OUM alumni are saying. <br class="hidden-xs">This could be you in the future.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="testimonial-container hidden-xs">
		<span class="quote-left hidden-tab">&#8220;</span>
		<div class="testimonial-wrap-overview justify-content-center">
			<div class="testimonial-col m-5">
				<div class=" testimonial-wrap">
					<img class="testimonial-img" src="images/test-1.png" alt="Card image cap">
					<div class="testimonial-copy">
						<h6 class="testimonial-subtitle mb-2 text-muted">I owe my academic journey to the support I received from OUM. Where innovations underpin teaching and learning, flexible approaches are widely utilised to enable learning anytime and anywhere, synchronously and asynchronously. Something else that made me happy to study at OUM is the nurturing attention that goes beyond learning.</h6>
						<h5 class="testimonial-title">Dr Koh Kwang Meng</h5>
						<p class="testimonial-text">Retiree, Pahang<br>Graduate, Doctor of Education</p>
					</div>
				</div>
			</div>
			<div class="testimonial-col m-5">
				<div class="testimonial-wrap" >
					<img class="testimonial-img" src="images/test-2.png" alt="Card image cap">
					<div class="testimonial-copy">
						<h6 class="testimonial-subtitle mb-2 text-muted">I have a big responsibility, so I need to keep myself updated with everything related to OSH. The Master of Occupational Safety and Health Risk Management programme is relevant to my career and I am able to put the knowledge I have gained into practice. It has definitely enhanced my skills and helped me improve my work performance.</h6>
						<h5 class="testimonial-title">Siti Rahimah Ramli</h5>
						<p class="testimonial-text">Assistant Director, Pahang<br>Graduate, Master of Occupational Safety and Health Risk Management</p>
					</div>
				</div>
			</div>
			<div class="testimonial-col m-5">
				<div class=" testimonial-wrap">
					<img class="testimonial-img" src="images/test-3.png" alt="Card image cap">
					<div class="testimonial-copy">
						<h6 class="testimonial-subtitle mb-2 text-muted">I find the Master of Occupational Safety and Health Risk Management programme comprehensive as it addresses various aspects of OSH that I can implement at the workplace. The lecturers are very supportive too as they make the effort to explore relevant areas beyond the syllabus. For me, the programme is about learning how to apply what I learn.</h6>
						<h5 class="testimonial-title">Lim Chin Kang</h5>
						<p class="testimonial-text">Safety and Health Officer, Selangor<br>Learner, Master of Occupational Safety and Health Risk Management</p>
					</div>
				</div>
			</div>
			<div class="testimonial-col m-5">
				<div class="testimonial-wrap" >
					<img class="testimonial-img" src="images/test-4.png" alt="Card image cap">
					<div class="testimonial-copy">
						<h6 class="testimonial-subtitle mb-2 text-muted">Online learning at OUM is great because it allows me to save money during these difficult times. It’s also flexible, cost-effective, and easily accessible. Another plus is that a wide range of programmes can utilise this approach. At OUM, a customised learning experience through online learning is a real boon for learners.</h6>
						<h5 class="testimonial-title">Rajinderjit Singh Sawaran Singh</h5>
						<p class="testimonial-text">Aviation Instructor, Selangor<br>Learner, Doctor of Business Administration</p>
					</div>
				</div>
			</div>
		</div>
		<span class="quote-right hidden-tab">&#8221;</span>
	</div>
	<div id="carouselExampleControls" class="carousel slide visible-xs" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="testimonial-col m-5">
					<div class=" testimonial-wrap">
						<img class="testimonial-img" src="images/test-1.png" alt="Card image cap">
						<div class="testimonial-copy">
							<h6 class="testimonial-subtitle mb-2 text-muted">I owe my academic journey to the support I received from OUM. Where innovations underpin teaching and learning, flexible approaches are widely utilised to enable learning anytime and anywhere, synchronously and asynchronously. Something else that made me happy to study at OUM is the nurturing attention that goes beyond learning.</h6>
							<h5 class="testimonial-title">Dr Koh Kwang Meng</h5>
							<p class="testimonial-text">Retiree, Pahang<br>Graduate, Doctor of Education</p>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="testimonial-col m-5">
					<div class="testimonial-wrap" >
						<img class="testimonial-img" src="images/test-2.png" alt="Card image cap">
						<div class="testimonial-copy">
							<h6 class="testimonial-subtitle mb-2 text-muted">I have a big responsibility, so I need to keep myself updated with everything related to OSH. The Master of Occupational Safety and Health Risk Management programme is relevant to my career and I am able to put the knowledge I have gained into practice. It has definitely enhanced my skills and helped me improve my work performance.</h6>
							<h5 class="testimonial-title">Siti Rahimah Ramli</h5>
							<p class="testimonial-text">Assistant Director, Pahang<br>Graduate, Master of Occupational Safety and Health Risk Management</p>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="testimonial-col m-5">
					<div class=" testimonial-wrap">
						<img class="testimonial-img" src="images/test-3.png" alt="Card image cap">
						<div class="testimonial-copy">
							<h6 class="testimonial-subtitle mb-2 text-muted">I find the Master of Occupational Safety and Health Risk Management programme comprehensive as it addresses various aspects of OSH that I can implement at the workplace. The lecturers are very supportive too as they make the effort to explore relevant areas beyond the syllabus. For me, the programme is about learning how to apply what I learn.</h6>
							<h5 class="testimonial-title">Lim Chin Kang</h5>
							<p class="testimonial-text">Safety and Health Officer, Selangor<br>Learner, Master of Occupational Safety and Health Risk Management</p>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="testimonial-col m-5">
					<div class="testimonial-wrap" >
						<img class="testimonial-img" src="images/test-4.png" alt="Card image cap">
						<div class="testimonial-copy">
							<h6 class="testimonial-subtitle mb-2 text-muted">Online learning at OUM is great because it allows me to save money during these difficult times. It’s also flexible, cost-effective, and easily accessible. Another plus is that a wide range of programmes can utilise this approach. At OUM, a customised learning experience through online learning is a real boon for learners.</h6>
							<h5 class="testimonial-title">Rajinderjit Singh Sawaran Singh</h5>
							<p class="testimonial-text">Aviation Instructor, Selangor<br>Learner, Doctor of Business Administration</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<section class="layer9">
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-sm-12 col-md-5 col-custom-width-tab">
				<div class="layer6-copy layer9-copy">
					<h3 class="color-blue">Where OUM <br class="hidden-xs">Alumni Are Now</h3>
					<p>Together, we can make your higher<br class="hidden-tab hidden-xs">education dreams a reality. Join our<br class="hidden-tab hidden-xs">excellent alumni who are changning<br class="hidden-tab hidden-xs">the world with reputable companies.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-7 col-custom-width-tab">
				<div class="img-responsive">
					<picture>
						<source srcset="images/alumni-desktop.png" media="(min-width: 1240px)">
						<source srcset="images/alumni-desktop.png" media="(min-width: 940px)">
						<source srcset="images/alumni-desktop.png" media="(min-width: 724px)">
						<img srcset="" src="images/alumni-mobile.png" alt="" />
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="layer5 layer10">
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-sm-12 col-md-6 col-custom-width-tab d-flex align-items-center justify-content-center blue-bg">
				<div class="layer5-copy">
					<h3 class="color-white">We Are Ready For You.<br class="hidden-tab hidden-xs">Are You?</h3>
					<p class="color-white">Take the next srep towards your personal<br class="hidden-tab hidden-xs">and professional goals with OUM today!</p>
					<a onclick="scrolltoTop();"><button class="btn btn-custom mt-5">enquire now </button></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-custom-width-tab p-0">
				<div class="img-wrap">
					<picture>
						<source srcset="images/layer10.jpg" media="(min-width: 1240px)">
						<source srcset="images/layer10.jpg" media="(min-width: 940px)">
						<source srcset="images/layer10.jpg" media="(min-width: 724px)">
						<img srcset="" src="images/layer10.jpg" alt="" />
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>
<footer>
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-sm-12 col-md-6 p-4 text-center">
				Copyright &copy; <?php echo date('Y'); ?>. All rights reserved.
			</div>
		</div>
	</div>
<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  
</script>-->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<!--<script src="js/jquery-3.2.1.slim.min.js"></script>-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/jquery-ui.min.js"></script>
<script>
  $( function() {
    $( "#apeltabs" ).tabs();
  } );
  
</script>
<script type="text/javascript">

const scriptURL = '';//'https://script.google.com/macros/s/AKfycbzQ5OOPyWErz2fd8IYpNcnWHhZvcRZBp2nW8CsPqDe2VbM-isml/exec'
const form = document.forms['submit-to-google-sheet']
const loading = document.querySelector('.js-loading')
const successMessage = document.querySelector('.js-success-message')
const errorMessage = document.querySelector('.js-error-message')

jQuery.validator.addMethod("lettersonly", function (value, element) {
return this.optional(element) || /^[a-z," ".]+$/i.test(value);
}, "Letters and spaces only please");
jQuery.validator.addMethod("alphanumeric", function (value, element) {
return this.optional(element) || /^[a-z0-9-]+$/i.test(value);
}, "Letters and Number only please");
jQuery.validator.addMethod("numeric", function (value, element) {
return this.optional(element) || /^[0-9-]+$/i.test(value);
}, "Allowed Number only");
jQuery.validator.addMethod("valueNotEquals", function (value, element, arg) {
return arg != value;
}, "Value must not equal arg.");
jQuery("#scpForm").validate({
rules: {
fullname: {
required: true, 
lettersonly: true, 
minlength: 3
}, 
emailId: {
required: true, 
email: true
}, 
mobile: {
required: true, 
maxlength: 15, 
minlength: 8, 
numeric: true
},
city: {
required: true, 
},
ic_passport: {
required: true, 
minlength: 12, 
},
}, 

messages: {
fullname: {
required: "Please Enter your Name", 
lettersonly: "Please Enter the Character Only", 
minlength: "Minimum 3 Characters"
}, 
emailId: {
required: "Please Enter your Email ID", 
email: "Please Enter the Valid Email"
}, 
mobile: {
required: "Please Enter your Mobile Number", 
numeric: "Contain only Number.", 
maxlength: "Mobile Number Maximum 15 Digits", 
minlength: "Mobile Number Minimum 8 Digits"
}, 
city: {
required: "Please Enter your City", 
}, 
ic_passport: {
required: "Please Enter the IC/Passport Number", 
minlength: "I/C Number Minimum 12 Digits"
},
}, 
submitHandler: function (form) {
jQuery('#sbn_btn').attr("disabled", true);
fetch(scriptURL, { method: 'POST', body: new FormData(form)})
.then(response => showSuccessMessage(response))
.catch(error => showErrorMessage(error))
return false;
}
});
$(document).ready(function(){
	
navigate_page('1');

$('#alumni_check').change(function(){

if($(this).is(':checked')){
$("#alumni").val('Alumni');
}
else
{
$("#alumni").val('No');
}    

}); 
$('#nextbotton').click(function(){
	var courses = $('#courses').val();
	var learning_centers = $('#learning_centers').val();
	if(courses === ''){
		$("#courses-error").show();
		if (learning_centers === ''){
			$("#learning_centers-error").show();
		}
	} else if (learning_centers === ''){
		$("#learning_centers-error").show();
	} else { console.log('else');
		$('#step--two').trigger('click');
		$('#step-term').html('Step 2/2');
	}
	return false;
});
$("select#courses").focus(function() {
$("#courses-error").hide();
$("#learning_centers-error").hide();
});
$("select#learning_centers").focus(function() {
$("#courses-error").hide();
$("#learning_centers-error").hide();
});
});
</script>
<script>
function showLoadingIndicator () {
//form.classList.add('is-hidden')
loading.classList.remove('is-hidden')
}

function showSuccessMessage (response) {
console.log('Success!', response)
form.submit();
}

function showErrorMessage (error) {
//console.log('Error!', error.message)
}
function select_course(){
var level = jQuery('#study_level').val();
var cod = '';
/*if(level == ''){ jQuery('#form').submit(); }
else */
if (level !== ''){
if (level == 'Undergraduate'){cod = 1;}
else if(level == 'Postgraduate') {cod = 2;}

jQuery.ajax({
method: 'POST',
dataType: 'HTML',
url: 'courses.php',
data: { data: cod },
success: function(response) {                                   
//console.log(response);
$('#courses').html(response);
}
});
}
}
function select_region(){
var region = jQuery('#region').val();
if(region !== ''){
jQuery.ajax({
method: 'POST',
dataType: 'HTML',
url: 'courses.php',
data: { data: region },
success: function(response) {                                   
//console.log(response);
$('#learning_centers').html(response);
}
});
}
}
function verify_num(){
// set endpoint and your access key
var access_key = 'e3a294af9b6f4b1fe5661018f53a8917';
var phone_number = jQuery('#mobile').val();


// verify phone number via AJAX call
$.ajax({
url: 'https://apilayer.net/api/validate?access_key=' + access_key + '&number=' + phone_number,   
dataType: 'json',
success: function(json) {
// Access and use your preferred validation result objects
//console.log(json.valid);
//console.log(json.country_code);
//console.log(json.carrier);
if(json.valid == true){jQuery('#mobile_verified').val('Verified');} 
return json.valid;
}
});
}
function fix_format(){
var phone = jQuery('#mobile').val();
if(phone.substr(0, 1) == '6'){
jQuery('#mobile').val(phone);
} else if(phone.substr(0, 1) == '0'){
jQuery('#mobile').val('6'+phone);
} else {
jQuery('#mobile').val('60'+phone);
}
//verify_num();
} 
function navigate_page(pagenum){
	$('#page1').hide();
	$('#page2').hide();
	$('#page3').hide();
	$('#page'+pagenum).show();
}
function scrolltoTop(){
    $('html,body').animate({
        scrollTop: $(".hero-form").offset().top - 40},
        'slow');
}
function filterProgram(){
	var faculty = jQuery('#faculty_id').val();
	var level_of_study = jQuery('#level_of_study__id').val();
	var cod = '';
	//if (faculty !== ''){
		if (level_of_study == 'Undergraduate'){cod = faculty+'Undergraduate';}
		else if(level_of_study == 'Postgraduate') {cod = faculty+'Postgraduate';}
		else {cod = faculty;}
	console.log(cod);
	jQuery.ajax({
		method: 'POST',
		dataType: 'HTML',
		url: 'data.php',
		data: { data: cod },
		success: function(response) {                                   
			//console.log(response);
			$('.card-wrapper').html(response);
		}
	});
	//}
	
	setTimeout(function() { navigate_page('1'); }, 100);
}
filterProgram();
</script>
</footer>
</body>
</html>