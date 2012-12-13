var $hero = new Array("Superman", "Clark Kent", new Array("Fly","Fight fucking crazy shit","Beat up bad people"), "This is some other stuff about him");

hero[0];
hero[3];
hero[2][4];//accessing the new arraya and within this array accessing the 4 element


// using objects
var hero new Object(); // or`
// key has no quotes around it 
var hero = {
	name: "Superman",
	alias: "Clark Kent",
	superpowers:new Array("Fly","Fligth","Jump over trains","whatever"),
	origin:"Didn't come from moon"
	};
	
hero.name;
hero.secret_identity;



var song = new Object()://creating an object for a song

var song = { name:'', album:'', rank:'', year:''};//initializing the object with items- content
 
 
 
var songList = new Array(song1, song2, song3); //creating an array for all songs!

for(var i=0; i<superheroes.length; i++)//how many superheores do we have  //if it is true then do this stuff {      
		$(".mylogo .container").html("hello");
		//jquery find all the h1 or all elements with a class mylogo adding html to it and replace it with the word hello
				
	}
	
	$("h1 a").html("what the fuck")//replacing
	
	
for(var i=0; i<superheroes.length; i++){
	var hero =superhero[i];//a varaible substitue
	var template= $(".superhero-template").clone
	template.find("h1").text(hero.name);//finds and replaces
		
}



//we are creating a template in html so people can fill it and then using jquery we are duplicating it. presenting it on the page. this is what cloe is doing