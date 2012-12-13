$(document).ready(function() {
	var dog = "ralph";
	console.log(dog); // ralph

	$("h1").click(function() {
		console.log(dog); // ralph

		var dog = "kermit";
		console.log(dog); // kermit
	});

	console.log(dog); // ralph

});