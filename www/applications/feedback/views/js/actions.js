$(document).on("ready", function(){
	
	$(".close").click(function(){
		$("#alert-message").fadeOut();
	});
	
	$("#countries").change(function(){
		var val = $(this).find(":selected").val();
		
		$("#city").empty();
		
		if(val !== "") {
			$.ajax({
				type 		: "POST",
				url			: "feedback/ajax/getcities/"+val,
				dataType	: "json",
			
				success: function(data) {
					$.each(data,function(index, value){
						$("#city").append($("<option/>", { value: value.District, text: value.District }));
					});
				
				}
			});
		} else {
			$("#city").append($("<option/>", { value: "", text: "Debe seleccionar un País" }));
		}
	});
	
});
