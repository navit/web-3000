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

		$.get('http://ec2-54-245-14-74.us-west-2.compute.amazonaws.com/songs-api/api.php',function(data) {
			// data is a JSON object.
			console.log("API FINISHED LOADING!");

			console.log(data);

			// copy the first article in the section tag
			for(var i=0;i<data.list.length;i++){
			
				var template = $("section.listItem").first().clone();

				var song = data.list[i];//going through all the songs
				
				template.find("h2").text(song.title); //h2
				template.find("img.cover").attr("src", song.coverSrc );//image add the attr src
				/* template.find("div.keys h3").text("Artist:"); */
				template.find("li.artist").text("Artist: " + song.artist);
				template.find("li.album").text( "Album: " + song.album);
				template.find("li.label").text("Label: " + song.label);
				template.find("li.listeners").text("Listeners: " + song.listeners);
				template.find("li.duration").text(song.duration);
			
				$(".container").append(template);
			}

			//console.log("Re-add the waypoint");
			//bottomEl.waypoint(options);
		},"json");

	},options);

});
