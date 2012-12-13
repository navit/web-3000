//mongo DB:

//we should have a list an array 
[{
	name:"power",
	id:"990000",
	image:"http://foo.com",
	info_link:"http://lwjljle"
	ranking:0,
	wins:0, //increment the win of this specific object need id
	losses:0
	},{...},{...}]
	
	
//API CALLS //connecting with the data base
//GETTHINGS.PHP
//thing 2 has to be different than thing1 
//may want to keep track of things that appeared

{
	THING1:{},
	THING2:{}


}

results:[{},{}],
nextThings:[]

//winnerChosen.php

on the client we just know who won this round..
on the server we ++ the wins to each picture...we increament. the server goe to the data base and stores the info
everythin that impacts what people see- gets stored on the server


server / client side
php     html


php talks to a database

we need to store the win to the server and to the client
increment the win of this specific object need id- its unique never changes!!!! all the other data could change but if the id is fixed we are ok.

winnerid=34343434,
looserid=3434343,


think about how many api pings u want to make


api folder returns JSON all the time

get post methods for forms: one shows the reuslts on the search bar and the other does not.

make a form - a interface to add more items to the database.