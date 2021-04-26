$("#submit").click(function() {
	$.post($("#admin1").attr("action"),
		$("#admin1 :input").serializeArray(), function(info){
			$("#msg").html(info);
		});
	clearinput();
});

$("#admin1").submit( function(){
	return false;
});

function clearinput(){
	$("#admin1 :input").each( function() {
		$(this).val('');
	});
}