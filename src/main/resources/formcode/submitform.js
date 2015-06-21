$(document).ready(function(){

	$("#submit").click(function(){					   				   

		$(".error").hide();

		var hasError = false;

		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;



	var nameVal = $("#name").val();

	    nameVal = nameVal.trim();

		if((nameVal == '') || (nameVal.lowercase() =='name') || (nameVal.lowercase() =='name:')){

			$("#name").after('<span class="error">*</span>');

			hasError = true;

		}	

		

	var phoneVal = $("#phone").val();

	    phoneVal = phoneVal.trim();

		if((phoneVal == '') || (phoneVal.lowercase() =='telephone') || (phoneVal.lowercase() =='telephone:')){

			$("#phone").after('<span class="error">*</span>');

			hasError = true;

		}

		

	

		



	var emailVal = $("#email").val();

		emailVal = emailVal.trim();

		if ((emailVal == '')|| (emailVal.lowercase() == 'e-mail') || (emailVal.lowercase() == 'e-mail:') ) {

			$("#email").after('<span class="error">*</span>');

			hasError = true;

		} else if(!emailReg.test(emailVal)) {	

			$("#email").after('<span class="error">*</span>');

			hasError = true;

		}



		var ipVal = $("#ip").val();

		var urlVal = $("#url").val();

		var organizationVal = $("#organization").val();



		

	

		

		

		if(hasError == false) {

			$(this).hide();

			$("#sendEmail li.buttons").append('Loading');

			

			$.post("http://www.helpten.fi/en/wp-content/themes/helpten/formcode/sendemail.php",

   				{organization: organizationVal,url: urlVal,email: emailVal, phone: phoneVal, name: nameVal, ip: ipVal },

   					function(data){

						$("#sendEmail").slideUp("normal", function() {				   

							

							$("#sendEmail").before('<p style="color:#FFF;padding-left:17px;padding-top:15px;">Thank you for contacting us a represenative will contact you soon.</p>');											

						});

   					}

				 );

		}

		

		return false;

	});						   

});