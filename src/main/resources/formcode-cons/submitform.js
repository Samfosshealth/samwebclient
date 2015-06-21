$(document).ready(function(){
	$("#submitcons").click(function(){					   				   
		$(".error").hide();
		var hasError = false;
		var emailpdfReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	
	var emailpdfVal = $("#emailpdf").val();
		emailpdfVal = emailpdfVal.trim();
		if ((emailpdfVal == '')|| (emailpdfVal.lowercase() == 's&auml;hk&ouml;postisi') || (emailpdfVal.lowercase() == 's&auml;hk&ouml;postisi:') ) {
			$("#emailpdf").after('<span class="error" style="position:absolute;margin-left:10px;margin-top:5px;">*</span>');
			hasError = true;
		} else if(!emailpdfReg.test(emailpdfVal)) {	
			$("#emailpdf").after('<span class="error" style="position:absolute;margin-left:10px;margin-top:5px;">*</span>');
			hasError = true;
		}

		var ipVal = $("#ip").val();
		
		
		if(hasError == false) {
			$(this).hide();
			$("#sendconstant li.buttons").append('Loading');
			
			$.post("http://www.helpten.fi/en/wp-content/themes/helptenger/formcode-cons/sendemail.php",
   				{emailpdf: emailpdfVal, ip: ipVal },
   					function(data){
						$("#sendconstant").slideUp("normal", function() {				   
							
							$("#sendconstant").before('<p style="color:#595959;padding-left:10px;padding-top:5px;">Voit ladata pdf-tiedoston nyt <br><a href="http://www.helpten.fi/en/wp-content/themes/helpten/pdf/PDF-English.pdf">Helpten PDF.pdf</p>');											
						});
   					}
				 );
		}
		
		return false;
	});						   
});