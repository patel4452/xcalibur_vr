$(document).ready(function() {
	//option A
	$("#formM").submit(function(e){
		$(".thank-you").show();
		$("#formM").hide();
		e.preventDefault(e);
	});
});