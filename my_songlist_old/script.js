	
<script>
		
		//makes an array of the li in the doc
		var myListItems = document.getElementsByTagName("li");
		
		//creating a variable- can use it to access the html
		var myElement = document.getElementsByTagName("container");
		
		
		document.write(document.getElementByTagName("li");
		
				

		
		
			
		
	
		var song = new Object():	//an array of objects
		//declaring and intializing it	
		var song1 = {rank:1, name:"Daniel", band:"Bat for Lashes", album:"Two suns"};
		var song2 = {rank:2, name:"Daniel", band:"Bat for Lashes", album:"Two suns"};
		
		function songDetails();{
		//display info about each song
		console.log(this.rank + this.name + this.band + this.album);
		}	
		
		song1.logDetails = songDetails;
		song2.logDetails = songDetails;
			
		//call the logDetails function
		
		song1.logDetails();
		song2.logDetails();
		
		
		
		
</script>