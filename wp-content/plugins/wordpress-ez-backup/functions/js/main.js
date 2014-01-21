jQuery(document).ready(function($) {if ($('#save_custom').is(':checked')) {	$('#custom_location').show();}else{	$('#custom_location').hide();}	$("#save_custom").click(function() {			if ($('#save_custom').is(':checked')) {		$('#custom_location').show();				}else{			$('#custom_location').hide();		}	}); 		
if ($('#enable_email').is(':checked')) {
	$('#email_address').show();
	$('#email_address1').show();		
}else{
	$('#email_address').hide();
	$('#email_address1').hide();	
}

	$("#enable_email").click(function() {	
		if ($('#enable_email').is(':checked')) {
		$('#email_address').show();
		$('#email_address1').show();		
		}else{	
		$('#email_address').hide();
		$('#email_address1').hide();		
		}		
	});   
 });