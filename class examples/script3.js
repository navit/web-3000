var superheroes = new Array({
	name: "Superman",
	secretId: {firstMame:"Mani",lastName:"Nilchiani"},
	powers:["Bad Breath", "Looks like Godzila"],
	wins:10000,
	losses:8,
	genre:"male",
	origin:"Grew up in Kansas but OMG he's an alien"
	},
	{
	name: "Spiderman",
	secretId: {firstMame:"some",lastName:"guys"},
	powers:["swinging", "cracking bad jokes"],
	wins:50,
	losses:50,
	gender:"male",
	origin:"Grew up in Kansas but OMG he's an alien"
	
});

superheroes[1].secretIdentity.first_name; // or 
superhereos[1]['secretIdentity']['first_name'];

supereheroes[0].powers[1];

// associative arrays in php and ruby is the equivilent of objects in javascript