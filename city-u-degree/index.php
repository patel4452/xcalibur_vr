<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/style.css">
  
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900&display=swap" rel="stylesheet">
  <title>City University</title>

</head>
<body>
<header class="top_hdr">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4 col-lg-4 col-sm-4">
				<a href="#" class="logo_a"><img src="img/logo.jpg" /></a>
			</div>
		</div>
	</div>
</header>
<section class="layer-1">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-6 col-sm-12">
				&nbsp;
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="layer1-form">
                    <h3 class="city-u-theme layer1-form-title">Level Up With Us</h3>
					<form id="form" method="post" name="submit-to-google-sheet" action="contact-form-handler.php">
						<div class="form-group">
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="NAME *">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="id_details" name="ic_details" placeholder="NRIC/Passport *">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Phone No *" onchange="fix_format();">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="emailId"  name="emailId" placeholder="Email Address *">
						</div>
						<div class="form-group">
							<select class="form-control" id="nationality" name="nationality">
							<option value="">Nationality*</option>
							<option value="Malaysian">Malaysian</option>
							<option value="Non Malaysian">Non Malaysian</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" id="programmes" name="programmes">
								<option value="">Preferred Programme*</option>
								<option value="Bachelor in Graphic Design (Hons)">Bachelor in Graphic Design (Hons)</option>
								<option value="Bachelor of Accounting (Hons)">Bachelor of Accounting (Hons)</option>
								<option value="Bachelor of Applied Psychology (Hons)">Bachelor of Applied Psychology (Hons)</option>
								<option value="Bachelor of Biomedical Sciences (Hons)">Bachelor of Biomedical Sciences (Hons)</option>
								<option value="Bachelor of Business Administration (Hons)">Bachelor of Business Administration (Hons)</option>
								<option value="Bachelor of Business Administration (Hons) in International Marketing">Bachelor of Business Administration (Hons) in International Marketing</option>
								<option value="Bachelor of Civil Engineering with Honours">Bachelor of Civil Engineering with Honours</option>
								<option value="Bachelor of Communication (Hons) (Journalism)">Bachelor of Communication (Hons) (Journalism)</option>
								<option value="Bachelor of Communication (Hons) In Corporate Communication">Bachelor of Communication (Hons) In Corporate Communication</option>
								<option value="Bachelor of Computer Science (Hons) (Software Engineering)">Bachelor of Computer Science (Hons) (Software Engineering)</option>
								<option value="Bachelor of Education (Early Childhood Education) Honours">Bachelor of Education (Early Childhood Education) Honours</option>
								<option value="Bachelor of Education (Hons) in Teaching English as a Second Language (TESL)">Bachelor of Education (Hons) in Teaching English as a Second Language (TESL)</option>
								<option value="Bachelor of Electronic Engineering (Hons)">Bachelor of Electronic Engineering (Hons)</option>
								<option value="Bachelor of Engineering Management (Hons)">Bachelor of Engineering Management (Hons)</option>
								<option value="Bachelor of Hospitality Management (Hons)">Bachelor of Hospitality Management (Hons)</option>
								<option value="Bachelor of Information Technology (Hons)">Bachelor of Information Technology (Hons)</option>
								<option value="Bachelor of Interior Design (Hons)">Bachelor of Interior Design (Hons)</option>
								<option value="Bachelor of Mass Communication (Hons)">Bachelor of Mass Communication (Hons)</option>
								<option value="Bachelor of Mechanical Engineering with Honours">Bachelor of Mechanical Engineering with Honours</option>
								<option value="Bachelor of Multimedia (Hons)">Bachelor of Multimedia (Hons)</option>
								<option value="Bachelor of Occupational Safety and Health (Hons)">Bachelor of Occupational Safety and Health (Hons)</option>
								<option value="Bachelor of Science (Hons) (Accounting & Finance)">Bachelor of Science (Hons) (Accounting & Finance)</option>
								<option value="Bachelor of Science (Hons) (Architectural Design)">Bachelor of Science (Hons) (Architectural Design)</option>
							</select>
						</div>
						<div class="text-center">
							<button id="sbn_btn" type="submit" class="btn btn-primary btn-city-u-theme">APPLY NOW</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="layer-2">
	<div class="container">
		<h2 class="heading-center city-u-theme position-relative">WHATS SETS US APART</h2>
		<div class="row justify-content-center layer2-usp">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<img class="icon-usp" src="img/usp1.png">
				<p class="text-center city-u-theme">Up to <strong>50% Scholarships & 50% Credit Transfer</strong> Into Your 2nd Year</p>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1"><span>&nbsp;</span></div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<img class="icon-usp" src="img/usp2.png">
				<p class="text-center city-u-theme">Begin Your Classes with <strong>Zero Upfront Fees</strong> with Bantuan Prihatin CityU</p>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1"><span>&nbsp;</span></div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<img class="icon-usp" src="img/usp3.png">
				<p class="text-center city-u-theme">Earn A Degree & Your Work Experience Simultaneously with Our Various <strong>Industry Partners</strong></p>
			</div>
		</div>
	</div>
</section>
<section class="layer-3">
	<div class="container">
		<h3 class="text-center">START YOUR CAREER NOW</h3>
		<h2 class="heading-center city-u-theme position-relative">WITH OUR INDUSTRY PARTNERS</h2>
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="text-center city-u-theme">We maintain a close partnership with over 170 different industries. With these connections, our <br class="hidden-xs">graduates won't need to worry about seeking future job oppurtunities.</p>
				<p class="text-center city-u-theme">Delve straight into many potential career paths while you study and earn a salary ranging from <br class="hidden-xs">RM1,200 to RM1,800 in sectors such as food & beverage, engineering, finance, teaching, <br class="hidden-xs">administration, hotel/hospitality and more!</p>
				<img class="img" src="img/Logo-1.jpg">
			</div>
		</div>
	</div>
</section>
<section class="layer-6">
	<div class="container">
		<h2 class="heading-center city-u-theme position-relative">DEGREE PROGRAMMES</h2>
		<div class="row justify-content-center slider-section">
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>BUSINESS & ACCOUNTING</strong></p>
				<ul>
					<li>Bachelors of Accounting (Hons)</li>
					<li>Bachelors of Business Administration (Hons)</li>
					<li>Bachelors of Engineering Management (Hons)</li>
					<li>Bachelors of Science (Hons) Accounting & Finance</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>ARCHITECTURE & BUILT ENVIRONMENT</strong></p>
				<ul>
					<li>Bachelor of Interior Design (Hons)</li>
					<li>Bachelor of Science (Hons) (Architectural Design)</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>EDUCATION & LIBERAL STUDIES</strong></p>
				<ul>
					<li>Bachelor of Applied Psychology (Hons)</li>
					<li>Bachelor of Communication (Hons) Corporate Communication</li>
					<li>Bachelor of Communication (Hons) in Mass Communication</li>
					<li>Bachelor of Communication (Hons) Journalism</li>
					<li>Bachelor of Education (Early Childhood Education) Honours</li>
					<li>Bachelor of Education (Hons) in Teaching English as Second Language (TESL)</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>ENGINEERING</strong></p>
				<ul>
					<li>Bachelor of Civil Engineering with Honours</li>
					<li>Bachelor of Mechanical Engineering with Honours</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>INFORMATION TECHNOLOGY</strong></p>
				<ul>
					<li>Bachelor of Computer Science (Hons) Software Engineering</li>
					<li>Bachelor of Information Technology (Hons)</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>HOSPITALITY & TOURISM</strong></p>
				<ul>
					<li>Bachelor of Hospitality Management (Hons)</li>
					<li>Bachelor of Tourism Management (Hons)</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>ART & DESIGN</strong></p>
				<ul>
					<li>Bachelor of Fashion Design (Hons)</li>
					<li>Bachelor of Graphic Design (Hons)</li>
					<li>Bachelor of Multimedia (Hons)</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 card-bg">
				<p class="text-center city-u-theme"><strong>ALLIED HEALTH SCIENCES</strong></p>
				<ul>
					<li>Bachelor of Biomedical Sciences (Hons)</li>
					<li>Bachelor of Environmental Health (Hons)</li>
					<li>Bachelor of Occupational Safety & Health (Hons)</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="layer-7">
	<div class="container">
		<h2 class="heading-center city-u-theme position-relative">HOW WILL YOU <br class="hidden-xs">LEARN AND WORK?</h2>
		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-3 col-sm-12 layer7-usp">
				<img class="icon-usp2" src="img/usp4.png">
				<p class="text-center city-u-theme">Online Studies or <br>Weekend Classes</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-12 layer7-usp">
				<img class="icon-usp2" src="img/usp5.png">
				<p class="text-center city-u-theme">Weekday After-Hours <br>Classes</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-12 layer7-usp last">
				<img class="icon-usp2" src="img/usp6.png">
				<p class="text-center city-u-theme">2-Day Weekday <br>Classes</p>
			</div>
		</div>
	</div>
</section>
<section class="layer-8">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-12">
			&nbsp;
			</div>
		</div>
	</div>
</section>
<section class="layer-4">
	<div class="container">
		<h2 class="heading-center city-u-theme position-relative">Campus Facilities</h2>
		<p class="layer-5-desc city-u-theme">The impressive arrays of learning facilities available in City University Malaysia are testament to our commitment to excellence. These learning facilities are equipped with the latest technologies to create an envorionment that replicates the real working world. We believe our students are our most valueable assets, hence various interactive courses together with our facilities have been provided to ensure that students are equipped with the relevant skills and be market-ready to face the challenging work environment in the future.</p>
		<div class="row justify-content-center slider-section">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="address-section">
					<p>Other than classrooms and lecture halls in City U, there is also multi purpose hall (MPH), auditorium, computer labs, science labs, library, photography studio, fashion studios, culinary art classroom and more. Faculties, staffs and students thrive at City University because of its best combination of quality and scope, standards as well as its collaborative and innovative culture.</p>
					<p>Having best in-class modules is not enough to become an industry leader. At City U, we rely on efficiency and empowering our academicians and facilities to create the environment that make us the ideal place to study.</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<div id="slider" class="flexslider">
				  <ul class="slides">
					<li>
					  <img src="img/slides/1.jpg" />
					</li>
					<li>
					  <img src="img/slides/2.jpg" />
					</li>
					<li>
					  <img src="img/slides/3.jpg" />
					</li>
					<li>
					  <img src="img/slides/4.jpg" />
					</li>
					<li>
					  <img src="img/slides/5.jpg" />
					</li>
					<li>
					  <img src="img/slides/6.jpg" />
					</li>
					<li>
					  <img src="img/slides/7.jpg" />
					</li>
					<!-- items mirrored twice, total of 12 -->
				  </ul>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div id="carousel" class="flexslider">
				  <ul class="slides">
					<li>
					  <img src="img/slides/1.jpg" />
					</li>
					<li>
					  <img src="img/slides/2.jpg" />
					</li>
					<li>
					  <img src="img/slides/3.jpg" />
					</li>
					<li>
					  <img src="img/slides/4.jpg" />
					</li>
					<li>
					  <img src="img/slides/5.jpg" />
					</li>
					<li>
					  <img src="img/slides/6.jpg" />
					</li>
					<li>
					  <img src="img/slides/7.jpg" />
					</li>
					<!-- items mirrored twice, total of 12 -->
				  </ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="layer-5">
	<div class="container">
		<h2 class="heading-center city-u-theme position-relative">Get In Touch</h2>
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9711082836043!2d101.63542361532724!3d3.102333954302391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4be80e6fe639%3A0xf8bb57d516a5c707!2sCity%20University%20Malaysia!5e0!3m2!1sen!2smy!4v1615712961047!5m2!1sen!2smy" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="col-lg-4 col-md-10 col-sm-12">
				<div class="address-section">
				<table class="table table-borderless">
					<tr>
						<td><i class="fa fa-map-marker" aria-hidden="true"></i></td> <td><span>Menara City U, No. 8, Jalan 51A/223, 46100 Petaling Jaya, Selangor Darul Ehsan, Malaysia.</span></td>
					</tr>
					<tr>
						<td><i class="fa fa-phone" aria-hidden="true"></i></td> <td><span><strong>General Line</strong> <br>+603 7949 1600 <br><strong>Consulting Line</strong> </br>+603 7946 1616</span></td>
					</tr>
					<tr>
						<td><i class="fa fa-envelope" aria-hidden="true"></i></td> <td><span><strong>Local Students:</strong> </br>enquiries@city.edu.my </br><strong>International Students:</strong> </br>imo@city.edu.my </br> <strong>Postgraduates:</strong> </br>pg@city.ed</span></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- footer -->
<footer class="pt-5 pb-5 text-center ftr_wrap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<img src="img/footer.png" class="footer-img" >
			</div>
			<div class="col-lg-4 col-md-10 col-sm-12">
				<div class="social-media city-u-theme">
					<p>Stay Connected</p>
					<a class="social-media city-u-theme" href="https://www.facebook.com/cityumalaysia/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> &nbsp; <a class="social-media city-u-theme" href="https://www.instagram.com/cityuofmalaysia/"><i class="fa fa-instagram" aria-hidden="true"></i></a> &nbsp; <a class="social-media city-u-theme" href="https://www.youtube.com/channel/UC-_nQzqwHLkvIfzggW2oQpw"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script>
$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});
</script>
<script type="text/javascript">

    	const scriptURL = 'https://script.google.com/macros/s/AKfycbxTeYGmdsG3tP63QhFAdR6JjXS8p1bFVumeWYodaY6vBfPYA3ut/exec'
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
		jQuery("#form").validate({
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
				nationality: {
					required: true, 
					valueNotEquals: "default"
				},
				programmes: {
					required: true, 
					valueNotEquals: "default"
				},
				ic_details: {
					required: true, 
				}, 
				
			}, 
			
			messages: {
				fullname: {
					required: "Please enter your name", 
					lettersonly: "Please enter the character only", 
					minlength: "minimum 3 characters"
				}, 
				emailId: {
					required: "Please enter your email ID", 
					email: "Please enter the valid email"
				}, 
				mobile: {
					required: "Please enter your mobile number", 
					numeric: "Contain only number.", 
					maxlength: "Mobile number maximum 15 digits", 
					minlength: "Mobile number minimum 8 digits"
				}, 
				nationality: {
					required: "Please select nationality", 
					valueNotEquals: "Please select nationality"
				}, 
				programmes: {
					required: "Please select the programmes", 
					valueNotEquals: "Please select the programmes"
				}, 
				ic_details: {
					required: "Please enter the IC/Passport number", 
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
    </script>
	<script>
    function showLoadingIndicator () {
      //form.classList.add('is-hidden')
      loading.classList.remove('is-hidden')
    }

    function showSuccessMessage (response) {
      console.log('Success!', response)
	  form.submit();
	  //window.location.href="thankyou.php";
      /*setTimeout(() => {
        successMessage.classList.remove('is-hidden')
        loading.classList.add('is-hidden')
      }, 500)*/
    }

    function showErrorMessage (error) {
      console.log('Error!', error.message)
      /*  errorMessage.classList.remove('is-hidden')
        loading.classList.add('is-hidden')
      }, 500)*/
    }
	</script>
</body>
</html>