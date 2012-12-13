$("#submitBtn").click(function() {

	var data = {};
	data["whatIsGreat"] = $("#whatIsGreat").val();
	data["hl"] = "en";
	data["xhr"] = "t";

	$.get("index.php",data,function(theDataWeGotBackFromTheServer) {
		if(theDataWeGotBackFromTheServer["status"] == "okay") {
			$("#answer").remove();
		}
		else {
			alert("THERE WAS AN ERROR");
		}

	},"json");


	return false;
});