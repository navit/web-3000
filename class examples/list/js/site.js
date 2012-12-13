// the breakdown:
// $ = the jQuery function.
// document = an argument we send to the jQuery function.
// .ready = function that takes one parameter.
$(document).ready(function() {
	// alert("Meat and potatoes!"); // uncomment this to test that it loads correctly. if you don't get an alert then nothing happened.
	var options = { offset:'100%' };
	var bottomEl = $(".is-bottom");

	// use jQuery "waypoints" to detect when we hit the bottom of the screen.
	bottomEl.waypoint(function() {
		console.log('We are at the bottom of the page!');

		bottomEl.waypoint("remove"); // kill waypoints while we load.

		$.get('./api.php',function(twitterData) {
			// data is a JSON object.
			console.log("API FINISHED LOADING!");

			console.log(twitterData);

			// copy the first article in the section tag
			for(var i=0;i<twitterData.tweets.length;i++) {
				var template = $("section article").first().clone();

				var tweet = twitterData.tweets[i];

				template.find(".avatar").attr("src",twitterData.profile_image);
				template.find("h1").text(twitterData.name);
				template.find("h2").text("@" + twitterData.username);

				template.find(".content time").text(tweet.time);
				template.find(".content p").text(tweet.body);

				template.addClass("is-ajax-tweet");

				$("section").append(template);
			}

			console.log("Re-add the waypoint");
			bottomEl.waypoint(options);
		},"json");

	},options);

});