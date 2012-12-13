var superheroes = [{
	name:"Superman",
	secret_identity:{first_name:"Clark",last_name:"Kent"},
	powers:["Heat vision","Frost breath","etc"],
	wins:10000,
	losses:0,
},{
	name:"Spiderman",
	secret_identity:{first_name:"Peter",last_name:"Parker"},
	powers:["Web slinging","Sticks to walls","Spidey sense","Super strength"],
	wins:50,
	losses:50
}];


superheroes[1].secret_identity.last_name;
superheroes[1]["secret_identify"]["last_name"];



for(var i=0;i<superheroes.length;i++) {
	var hero = superheroes[i];

	var template = $("#superhero-template").clone();
	template.find("h1").text(hero.name);
	template.find("h2").text(hero.secret_identity.first_name + " " + hero.secret_identity.first_name);

	for(var j=0;j<hero.powers.length;j++) {
		template.find(".super-powers").append("<li>" + hero.powers[j] + "</li>")

	}


	$("#superhero-container").append(template);
}

$.each(superheroes[0].secret_identity,function(key,value) {
	$("h1").text(value);	
})

$("#superhero-template").remove();
