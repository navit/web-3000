$("#submitBtn").click(function() {

	var data = {};
	data["whatIsGreat"] = $("#whatIsGreat").val();
	data["hl"] = "en";
	data["xhr"] = "t";

	$.get("insertSomthing.php",data,function(theDataWeGotBackFromTheServer) {
		if(theDataWeGotBackFromTheServer["status"] == "okay") {
			$("#whatIsGreat").remove();
		}
		else {
			alert("THERE WAS AN ERROR");
		}

	},"json");


	return false;
});