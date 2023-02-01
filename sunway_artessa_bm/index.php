<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Branded Content Demo</title>
  </head>
  <body>
    <div class="container">
      <header class="text-center mx-auto d-block">
		<img src="assets/logo_sunway.png" class="img-responsive" >
		<h2>Hubungi <strong>Sunway Property</strong> untuk maklumat lanjut</h2>
	  </header>
      <div class="form">
        <form id="form" method="post" name="submit-to-google-sheet" action="thankyou.php">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h6>Maklumat anda</h6>
              <div class="form-group">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nama">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email_id" name="email_id" placeholder="Emel">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="No. Telefon">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h6>Mesej anda</h6>
              <div class="form-group">
                <textarea class="form-control" id="message" name="message"  rows="5" cols="40" placeholder="Saya ingin mengetahui maklumat lanjut tentang…"></textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="submit">
              <!--<button class="btn btn-default btn-custom btn-primary">Send to Sunway Property</button>-->
			  <input id="sbn_btn" class="btn btn-default btn-custom btn-primary" type="submit" value="Hantar kepada Sunway Property ">
            </div>
          </div>
        </form>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.5.1.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8ce160842a.js" crossorigin="anonymous"></script>
    <script>
      /*function myFunction() {
        var x = document.getElementById("message");
        if (window.matchMedia("(max-width: 767px)").matches) {
          x.rows = "2";
        } else {document.getElementById("message").rows = "2";
          x.rows = "6";
        }
      }*/
      </script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">

    	const scriptURL = 'https://script.google.com/macros/s/AKfycbxVBpib0osu36OicgtOtDvofC-V-uFiRxij4sYl9bsHCf2VBTk/exec'
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
				first_name: {
					required: true, 
					lettersonly: true, 
					minlength: 3
				}, 
				email_id: {
					required: true, 
					email: true
				}, 
				phone_number: {
					required: true, 
					maxlength: 15, 
					minlength: 8, 
					numeric: true
				},
				
			}, 
			
			messages: {
				first_name: {
					required: "Sila masukkan nama pertama anda", 
					lettersonly: "Sila masukkan aksara sahaja", 
					minlength: "Minimum 3 aksara"
				}, 
				email_id: {
					required: "Sila masukkan emel ID anda", 
					email: "Sila masukkan emel yang sah"
				}, 
				phone_number: {
					required: "Sila masukkan nombor telefon anda", 
					numeric: "Hendaklah mengandungi nombor sahaja", 
					maxlength: "Nombor telefon maksimum 15 digit", 
					minlength: "Nombor telefon minimum 8 digit"
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
		function showLoadingIndicator () {
		  loading.classList.remove('is-hidden')
		}

		function showSuccessMessage (response) {
		  console.log('Success!', response)
		  form.submit();
		}

		function showErrorMessage (error) {
		  console.log('Error!', error.message)
		}
    </script>
  </body>
</html>