$(document).ready(function() {
	$("h1").click(function() {


//		 FB.login() is a function.
		 FB.login(function(response) {
		 	console.log(response);
		 	if(response.authResponse) {
			 	console.log("LOGGED IN");

		 		FB.api("/me",function(response) {
		 			var me = response;

		 			console.log("API FOR ME FINISHED");
		 			console.log(response);

					$("#fb-data").removeClass("is-hidden");
					$("#fb-data h2").text(me.name);

					var imageSource = "http://graph.facebook.com/" + response.id + "/picture";
					$("#fb-data .image-container").html("<img src=" + imageSource + " />");

					FB.api("/" + response.location.id,function(response) {
						console.log("LOCATION LOADED");
						console.log(response);
					});


		 		});
		 	}
		 	else {
		 		alert("YOU HIT CANCEL, YOU ASSHOLE");
		 	}
		 });		
	});
});