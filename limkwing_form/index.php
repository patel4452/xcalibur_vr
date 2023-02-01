<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lim Kok Wing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
    <!-- Banner Section Start -->
    <section id="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 col-sm-12 desk--form">
                    <div class="form-box">
                        <form id="scpForm" method="post" name="submit-to-google-sheet">
                            <h3>Join Our 2021 Intake Now</h3>
                            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="step--tab" data-toggle="tab" href="#step-one"
                                        role="tab" aria-controls="home" aria-selected="true">Step 1</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="step--two" data-toggle="tab" href="#step-two" role="tab"
                                        aria-controls="profile" aria-selected="false">Step 2</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active step1" id="step-one" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="steps">
                                        <h6>What is your level of study?</h6>
                                        <div class="checkbox d-flex flec-wrap">
                                            <div class="col-4 col-md-4 pl-0 pr-2">
                                                <label class="container-radio ">
                                                    <input type="radio" id="level_of_study_pre" checked="checked" value="Pre-University" name="level_of_study">
                                                    <span class="checkmark">Pre-University</span>
                                                </label>
                                            </div>
                                            <div class="col-4 col-md-4 px-1">
                                                <label class="container-radio">
                                                    <input type="radio" id="level_of_study_dip" value="Diploma" name="level_of_study">
                                                    <span class="checkmark">Diploma</span>
                                                </label>
                                            </div>
                                            <div class="col-4 col-md-4 pl-2 pr-0">
                                                <label class="container-radio">
                                                    <input type="radio" id="level_of_study_degr" value="Degree" name="level_of_study">
                                                    <span class="checkmark">Degree</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select name="area_of_interest"  id="area_of_interest" class="form-control" style="display: none;">
                                                <option value="">Select Interest Area</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="program" id="program" class="form-control">
                                                <option value="">Select Program of Interest</option>
                                                <option value="Foundation in Design">Foundation in Design</option>
												<option value="Foundation in Built Environment">Foundation in Built Environment</option> 
												<option value="Foundation in Information Technology">Foundation in Information Technology</option>
												<option value="Foundation in Communication">Foundation in Communication</option> 
												<option value="Foundation in Business">Foundation in Business</option>
												<option value="Foundation in Sound & Music">Foundation in Sound & Music</option>
                                            </select>
                                        </div>
                                        <button class="btn" id="nextbotton">Next Step</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade step2" id="step-two" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="steps">
                                        <h6>Tell us about yourself</h6>
                                        <div class="checkbox"></div>
                                        <div class="form-group">
                                            <input type="text" id="full_name" name="full_name"  class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="ic_passport"  name="ic_passport" placeholder="IC/Passport No.">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="mobile_no"  name="mobile_no" placeholder="Mobile Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email_address"  name="email_address" placeholder="Email Address">
                                        </div>
                                        <button id="sbn_btn" type="submit" class="btn">Submit</button>
                                    </div>
                                </div>
                            </div>
							<div class="form-group" style="display:none;">
								<input type="hidden" class="form-control" id="utm_source"  name="utm_source" value="<?php if (isset($_GET['utm_source']))echo $_GET['utm_source']; ?>">
								<input type="hidden" class="form-control" id="utm_medium"  name="utm_medium" value="<?php if (isset($_GET['utm_medium']))echo $_GET['utm_medium']; ?>">
								<input type="hidden" class="form-control" id="utm_campaign"  name="utm_campaign" value="<?php if (isset($_GET['utm_campaign']))echo $_GET['utm_campaign']; ?>">
								<input type="hidden" class="form-control" id="utm_term"  name="utm_term" value="<?php if (isset($_GET['utm_term']))echo $_GET['utm_term']; ?>">
								<input type="hidden" class="form-control" id="utm_content"  name="utm_content" value="<?php if (isset($_GET['utm_content']))echo $_GET['utm_content']; ?>">
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Section End -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js" integrity="sha512-+m6t3R87+6LdtYiCzRhC5+E0l4VQ9qIT1H9+t1wmHkMJvvUQNI5MKKb7b08WL4Kgp9K0IBgHDSLCRJk05cFUYg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script>
        $(document).ready(function(){
			
			/*$('#myTab a').click(function(e){
				e.preventDefault();
				var area_of_interest = $('#area_of_interest').val();
                var program = $('#program').val();
                var level_of_study = $('input[name="level_of_study"]:checked').val();

                if(level_of_study == 'Pre-University'){
					if(program != ''){
                        //$('#step--two').trigger('click');
						$('#step--two').tab('show');
						return false;
                    }

                }else{
                    if(area_of_interest !='' && program !=''){
                        //$('#step--two').trigger('click');
						$('#step--two').tab('show');
						return false;
                    }
                }
				
			});*/
            $('#nextbotton').click(function(){
                var area_of_interest = $('#area_of_interest').val();
                var program = $('#program').val();
                var level_of_study = $('input[name="level_of_study"]:checked').val();

                if(level_of_study == 'Pre-University'){

                    if(program !=''){
                        $('#step--two').trigger('click');
                    }

                }else{
                    if(area_of_interest !='' && program !=''){
                        $('#step--two').trigger('click');
                    }
                }
                return false;
                
            });

            $('#level_of_study_dip').click(function(){
                $('#area_of_interest').html('');
                $('#area_of_interest').show();
                var area_of_interest = '<option value="">Select Interest Area</option><option value="Design Innovation">Design Innovation</option><option value="Mutlimedia Creativity">Mutlimedia Creativity</option><option value="Architecture & The Built Environment">Architecture & The Built Environment</option><option value="Information & Communication Technology">Information & Communication Technology</option><option value="Communication, Media & Broadcasting">Communication, Media & Broadcasting</option><option value="Business Management & Globalisation">Business Management & Globalisation</option><option value="Hospitality & Tourism">Hospitality & Tourism</option><option value="Fashion & Lifestyle Creativity">Fashion & Lifestyle Creativity</option><option value="Limkokwing Sound & Music Design Academy">Limkokwing Sound & Music Design Academy</option>';
                $('#area_of_interest').html(area_of_interest);
                $('#program').html('');
                $('#program').html('<option value="">Select Program of Interest</option>');

            });


            $('#level_of_study_degr').click(function(){
                $('#area_of_interest').html('');
                $('#area_of_interest').show();
                var area_of_interest = '<option value="">Select Interest Area</option><option value="Design Innovation">Design Innovation</option><option value="Mutlimedia Creativity">Mutlimedia Creativity</option><option value="Architecture & The Built Environment">Architecture & The Built Environment</option><option value="Information & Communication Technology">Information & Communication Technology</option><option value="Communication, Media & Broadcasting">Communication, Media & Broadcasting</option><option value="Business Management & Globalisation">Business Management & Globalisation</option><option value="Hospitality & Tourism">Hospitality & Tourism</option><option value="Fashion & Lifestyle Creativity">Fashion & Lifestyle Creativity</option><option value="Limkokwing Sound & Music Design Academy">Limkokwing Sound & Music Design Academy</option>';
                $('#area_of_interest').html(area_of_interest);
                $('#program').html('');
                $('#program').html('<option value="">Select Program of Interest</option>');

            });


            $('#level_of_study_pre').click(function(){
                $('#program').html('');
                $('#area_of_interest').html('');
                $('#area_of_interest').hide();
                var program_value = '<option value="">Select Program of Interest</option><option value="Foundation in Design">Foundation in Design</option><option value="Foundation in Built Environment">Foundation in Built Environment</option> <option value="Foundation in Information Technology">Foundation in Information Technology</option><option value="Foundation in Communication">Foundation in Communication</option> <option value="Foundation in Business">Foundation in Business</option><option value="Foundation in Sound & Music">Foundation in Sound & Music</option>'; 
                $('#program').html(program_value);

            });

            $('#area_of_interest').change(function(){

                var level_of_study = $('input[name="level_of_study"]:checked').val();
                var thisValue = $(this).val();
                var program_value = '';

                if(level_of_study == 'Diploma'){
                    if(thisValue == 'Design Innovation'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Product Design">Diploma in Product Design</option><option value="Diploma in Graphic Design Technology">Diploma in Graphic Design Technology</option><option value="Diploma in Graphic Design">Diploma in Graphic Design</option><option value="Diploma in Digital Photography">Diploma in Digital Photography</option><option value="Diploma in Advertising">Diploma in Advertising</option><option value="Diploma in Packaging Design & Technology">Diploma in Packaging Design & Technology</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Mutlimedia Creativity'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Animation & Multimedia Design">Diploma in Animation & Multimedia Design</option><option value="Diploma in Games Art">Diploma in Games Art</option><option value="Diploma in Interactive and Multimedia Design">Diploma in Interactive and Multimedia Design</option><option value="Diploma in Creative Multimedia">Diploma in Creative Multimedia</option><option value="Diploma in Animation">Diploma in Animation</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Architecture & The Built Environment'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Architectural Technology">Diploma in Architectural Technology</option><option value="Diploma in Interior Design">Diploma in Interior Design</option><option value="Diploma in Civil Engineering">Diploma in Civil Engineering</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Information & Communication Technology'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Information Technology">Diploma in Information Technology</option>  <option value="Diploma in Software Engineering">Diploma in Information Technology</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Communication, Media & Broadcasting'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Multimedia, Advertising & Broadcasting">Diploma in Multimedia, Advertising & Broadcasting</option><option value="Diploma in Peformance Arts & Creativity">Diploma in Peformance Arts & Creativity</option><option value="Diploma in Broadcasting (Radio & TV)">Diploma in Broadcasting (Radio & TV)</option><option value="Diploma in Digital Video">Diploma in Digital Video</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Business Management & Globalisation'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Civil Engineering">Diploma in Civil Engineering</option><option value="Diploma in Mechanical Engineering">Diploma in Mechanical Engineering</option><option value="">Select Program of Interest</option><option value="Diploma in Tourism Management">Diploma in Tourism Management</option><option value="Diploma in Business Management">Diploma in Business Management</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Fashion & Lifestyle Creativity'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Fashion & Retail Design">Diploma in Fashion & Retail Design</option><option value="Diploma in Hair Design">Diploma in Hair Design</option><option value="Diploma in Batik Design">Diploma in Batik Design</option><option value="Diploma in Fashion & Apparel Design">Diploma in Fashion & Apparel Design</option>';
                        $('#program').html(program_value);
                    }
					if(thisValue == 'Limkokwing Sound & Music Design Academy'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Diploma in Sound & Music Technology">Diploma in Sound & Music Technology</option>';
                        $('#program').html(program_value);
                    }
                }


                if(level_of_study == 'Degree'){
                    if(thisValue == 'Design Innovation'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Design (Hons) in Professional Design (Visual Communication)">Bachelor of Design (Hons) in Professional Design (Visual Communication)</option><option value="Bachelor of Arts (Hons) in Industrial Design">Bachelor of Arts (Hons) in Industrial Design </option><option value="Bachelor of Arts (Hons) of Creative Imaging in Digital Photography">Bachelor of Arts (Hons) of Creative Imaging in Digital Photography </option><option value="Bachlelor of Design (Hons) in Transport Design">Bachlelor of Design (Hons) in Transport Design</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Mutlimedia Creativity'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Arts (Hons) in Animation">Bachelor of Arts (Hons) in Animation</option><option value="Bachelor of Arts (Hons) in Creative Multimedia">Bachelor of Arts (Hons) in Creative Multimedia </option><option value="Bachelor of Arts (Hons) in Games Art Development">Bachelor of Arts (Hons) in Games Art Development</option><option value="Bachelor of Arts (Hons) in Games Design">Bachelor of Arts (Hons) in Games Design</option><option value="Bachlelor of Arts (Hons) in Motion Graphics and Visual Effects">Bachlelor of Arts (Hons) in Motion Graphics and Visual Effects </option><option value="Bachelor of Arts (Hons) in Digital Creative Content">Bachelor of Arts (Hons) in Digital Creative Content</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Architecture & The Built Environment'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Arts in Interior Architecture">Bachelor of Arts in Interior Architecture </option><option value="Bachelor of Arts (Hons) in Urban Planning & Design">Bachelor of Arts (Hons) in Urban Planning & Design</option><option value="Bachelor of Arts (Hons) in Landscape Architecture">Bachelor of Arts (Hons) in Landscape Architecture</option><option value="Bachelor of Science (Hons) of Construction Management">Bachelor of Science (Hons) of Construction Management </option><option value="Bachelor of Science (Architecture Studies)">Bachelor of Science (Architecture Studies)</option><option value="Bachlelor of Civil Engineering">Bachlelor of Civil Engineering </option><option value="Bachelor of Electrical and Electronic Engineering">Bachelor of Electrical and Electronic Engineering</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Information & Communication Technology'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Computer Science (Hons) in Mobile Computing">Bachelor of Computer Science (Hons) in Mobile Computing </option><option value="Bachlelor of Compute Science (Hons) Cloud Computing Technology">Bachlelor of Compute Science (Hons) Cloud Computing Technology</option> <option value="Bachelor of Science (Hons) in Business Information Technology">Bachelor of Science (Hons) in Business Information Technology </option><option value="Bachelor of Science (Hons) in Software Engineering with Multimedia">Bachelor of Science (Hons) in Software Engineering with Multimedia</option><option value="Bachelor of Science (Hons) in Information Technology">Bachelor of Science (Hons) in Information Technology</option><option value="Bachelor of Science (Hons) in Electronic Commerce">Bachelor of Science (Hons) in Electronic Commerce</option><option value="Bachelor of Science (Hons) In Information & Communication Technology">Bachelor of Science (Hons) In Information & Communication Technology</option><option value="Bachelor of Science (Hons) in Games Technology">Bachelor of Science (Hons) in Games Technology</option><option value="Bachelor of Science (Hons) in Business Intelligence System">Bachelor of Science (Hons) in Business Intelligence System</option><option value="Bachelor of Information Technology with Technopreneurship (Hons)">Bachelor of Information Technology with Technopreneurship (Hons) </option><option value="Bachelor of Information Technology (Hons) in Cyber Security">Bachelor of Information Technology (Hons) in Cyber Security</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Communication, Media & Broadcasting'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Arts (Hons) in Professional Communication">Bachelor of Arts (Hons) in Professional Communication</option><option value="Bachelor of Arts (Hons) in Digital Film & Television">Bachelor of Arts (Hons) in Digital Film & Television</option><option value="Bachelor of Arts (Hons) in Broadcasting & Journalism">Bachelor of Arts (Hons) in Broadcasting & Journalism</option><option value="Bachelor of Arts (Hons) in Event Management">Bachelor of Arts (Hons) in Event Management </option><option value="Bachelor of Arts (Hons) Communication with Psychology">Bachelor of Arts (Hons) Communication with Psychology</option><option value="Bachelor of Communication (Hons) in Digital Media">Bachelor of Communication (Hons) in Digital Media</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Business Management & Globalisation'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Business Administration (Hons)">Bachelor of Business Administration (Hons)</option><option value="Bachelor of Business (Hons) in Entrepreneurship">Bachelor of Business (Hons) in Entrepreneurship</option><option value="Bachelor of Business (Hons) in International Business">Bachelor of Business (Hons) in International Business</option><option value="Bachelor fo Business (Hons) in Marketing">Bachelor fo Business (Hons) in Marketing </option><option value="Bachelor of Arts (Hons) in Sports Management">Bachelor of Arts (Hons) in Sports Management</option><option value="Bachelor of Public Management (Hons)">Bachelor of Public Management (Hons)</option><option value="Bachelor of Business (Hons) in Human Resource Management">Bachelor of Business (Hons) in Human Resource Management</option><option value="Bachelor of Business (Hons) in Accounting">Bachelor of Business (Hons) in Accounting</option><option value="Bachelor of Arts (Hons) in Tourism Management">Bachelor of Arts (Hons) in Tourism Management</option><option value="Bachelor of Business (Hons) in Hopsitality Management">Bachelor of Business (Hons) in Hopsitality Management</option><option value="Bachelor of Arts (Hons) in Banking in Finance">Bachelor of Arts (Hons) in Banking in Finance</option>';
                        $('#program').html(program_value);
                    }

                    if(thisValue == 'Fashion & Lifestyle Creativity'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor of Arts (Hons) in Fashion Design">Bachelor of Arts (Hons) in Fashion Design</option><option value="Bachelor of Arts (Hons) in Fashion and Retailing">Bachelor of Arts (Hons) in Fashion and Retailing</option>';
                        $('#program').html(program_value);
                    }
					if(thisValue == 'Limkokwing Sound & Music Design Academy'){
                        $('#program').html('');
                        program_value = '<option value="">Select Program of Interest</option><option value="Bachelor (Hons) in Recording Arts">Bachelor (Hons) in Recording Arts</option>';
                        $('#program').html(program_value);
                    }
                }

             });
            

        });
		const scriptURL = 'https://script.google.com/macros/s/AKfycbx8mYyHhnTfhc_rJ0scnHTX1U8EdRy1AfpOJaSL6ZcEqnAXvWUN/exec';
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
				full_name: {
					required: true, 
					lettersonly: true, 
					minlength: 3
				}, 
				email_address: {
					required: true, 
					email: true
				}, 
				mobile_no: {
					required: true, 
					maxlength: 15, 
					minlength: 8, 
					numeric: true
				},
				ic_passport: {
					required: true, 
				}, 
				program: {
					required: true, 
				},
				
			}, 
			
			messages: {
				full_name: {
					required: "Please enter your name", 
					lettersonly: "Please enter the character only", 
					minlength: "minimum 3 characters"
				}, 
				email_address: {
					required: "Please enter your email ID", 
					email: "Please enter the valid email"
				}, 
				mobile_no: {
					required: "Please enter your mobile number", 
					numeric: "Contain only number.", 
					maxlength: "Mobile number maximum 15 digits", 
					minlength: "Mobile number minimum 8 digits"
				}, 
				ic_passport: {
					required: "Please enter the IC/Passport number", 
				},
				program: {
					required: "Please select a Program", 
				},
			} , 
			submitHandler: function (form) {
					if ($('.nav-link.active').attr('id') == 'step--two') { 
						jQuery('#sbn_btn').attr("disabled", true);
						fetch(scriptURL, { method: 'POST', body: new FormData(form)})
							.then(response => showSuccessMessage(response))
							.catch(error => showErrorMessage(error))
					}
					//form.preventDefault();
					return false;
				}
    	});
		/*var current_tab_id = $('.nav-link.active').attr('id');
		if (($('#scpForm').valid()) && current_tab_id =='step--two') { 
			jQuery('#sbn_btn').attr("disabled", true);
			fetch(scriptURL, { method: 'POST', body: new FormData(form)})
				.then(response => showSuccessMessage(response))
				.catch(error => showErrorMessage(error))
			//return false;
		}*/
	function showLoadingIndicator () {
      //form.classList.add('is-hidden')
      //loading.classList.remove('is-hidden')
    }

    function showSuccessMessage (response) {
      console.log('Success!', response)
	  //form.submit();
	  location.href = "thankyou.php"
	}

    function showErrorMessage (error) {
      console.log('Error!', error.message)
    }		
         // magnificPopup init
         var imagepopup = $('.image-popup');
                if(imagepopup.length){
                    $('.image-popup').magnificPopup({
                        type: 'image',
                        callbacks: {
                            beforeOpen: function() {
                            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure animated zoomInDown');
                            }
                        },
                        gallery: {
                            enabled: true
                        }
                    });
                }
        $('.gallery').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 6,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            
  ]
});
    </script>
<script type="text/javascript" src="assets/js/jquery.flexslider.js"></script>
<script>
$(document).ready(function(){
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
</body>
</html>