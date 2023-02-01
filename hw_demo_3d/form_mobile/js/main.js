
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input2').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
            
  
    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="first_name"]');
    var email = $('.validate-input input[name="emailId"]');
    var last_name = $('.validate-input input[name="last_name"]');
	var mobile = $('.validate-input input[name="mobile"]');
	var user_type = $('.validate-input select[name="user_type"]');

	const scriptURL = 'https://script.google.com/macros/s/AKfycbyNFayQ-44nqF6pxL_SPNUyhuT0lLGyr5d2NvoVhfFj9FKnzbRQ/exec'
	const form = document.forms['submit-to-google-sheet']
	const loading = document.querySelector('.js-loading')
	const successMessage = document.querySelector('.js-success-message')
	const errorMessage = document.querySelector('.js-error-message')
	
    $('.validate-form').on('submit',function(e){ e.preventDefault(e);
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }


        if($(last_name).val().trim() == ''){
            showValidate(last_name);
            check=false;
        }


        if($(user_type).val().trim() == ''){
            showValidate(user_type);
            check=false;
        }


        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(mobile).val().trim().match(/^[0-9]+$/) == null) {
            showValidate(mobile);
            check=false;
        }

        /*if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }*/
        if( check == true ){ 
			$(".thank-you").show();
			$("#formM").hide();
			$(".wrap-contact1").hide();
			$(".wrap-contact2").addClass('full-border');
			jQuery('#sbnform').attr("disabled", true);
			fetch(scriptURL, { method: 'POST', body: new FormData(form)})
				.then(response => showSuccessMessage(response))
				.catch(error => showErrorMessage(error))
			//return false;
			var form_submit = $(this);
                $.ajax({
					url: "email.php",
					method: 'post',
					data: form_submit.serialize(),
					success: function(result){
						console.log(result);
					}
				});
			e.preventDefault(e);
			return false;
		}
		
		e.preventDefault(e);
        return check;
    });
	

    $('.validate-form .input2').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });
	$(document).on('focus', '.select2-selection.select2-selection--single', function (e) {
		hideValidate($('.validate-input select[name="user_type"]'));
	});
	

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
	function formatState (state) {
	  if (!state.id) {
		return state.text;
	  }
	  var baseUrl = "images/dropdown";
	  var $state = $(
		'<span class="img-container"><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-icons-select" /> <span>' + state.text + ' </span></span>'
	  );
	  return $state;
	};
    $('.js-example-basic-single').select2({
	  placeholder: "I AM A*",
      allowClear: true,
	  templateResult: formatState ,
	  minimumResultsForSearch: -1,
	  dropdownAutoWidth : true,
	  width: '100%',
	  theme: "material"
	});
	
    function showLoadingIndicator () {
      loading.classList.remove('is-hidden')
    }

    function showSuccessMessage (response) {
      console.log('Success!', response)
	}

    function showErrorMessage (error) {
      console.log('Error!', error.message)
    }

})(jQuery);