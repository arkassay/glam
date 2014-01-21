jQuery(document).ready(function($) {
$('.advanced_editor').hide();
	$("#advance").click(function() {
	
	if ( $('.advanced_editor').is(':visible') ){
		$("#advance").text('Show Advanced Editor');
		$('.advanced_editor').hide();
		
		}else{
		$("#advance").text('Hide Advanced Editor');
		$('.advanced_editor').show();
		}		
	});   

	
$('.create_schedule').hide();  
	$("#create").click(function() {
	
	if ( $('.create_schedule').is(':visible') ){
		$("#create").text('Show Schedule Creator');
		$('.create_schedule').hide();
		$("#advance").text('Show Advanced Editor');
		$('.advanced_editor').hide();		
		}else{
		$("#create").text('Hide Schedule Creator');
		$('.create_schedule').show();
		}		
	}); 	

 });