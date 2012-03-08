$(document).on("ready", function(){
	
	$(".close").click(function(){
		$("#alert-message").fadeOut();
	});
	
	$("#countries").change(function(){
		var val = $(this).find(":selected").val();
		
		$.ajax({
			type 		: "POST",
			url			: "feedback/getCities/",
			data  		:  val,
			dataType	: "json",
		
			success: function(data) {
				console.log(data);
			}
		});
	});
	
});
