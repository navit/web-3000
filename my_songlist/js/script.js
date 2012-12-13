
			var songList =  new Array(
			  {//this means we are creating a new object = song1
				  rank: '1',
				  song: 'daniel',
				  album: 'Two Suns',
				  artist:'Bat for Lashes',
				  year:'2008',
				  duration:'2:09'
			  },
			  
			  {//this means we are creating a new object = song2
				  rank: '2',
				  song: 'Stem',
				  album: 'Endtroducin',
				  artist:'DH Shadow',
				  year:'1996',
				  duration:'3:10'
			  },
			  
			  {//this means we are creating a new object = song3
				  rank: '3',
				  song: 'White Chalk',
				  album: 'White Chalk',
				  artist:'PJ Harvey',
				  year:'2006',
				  duration:'2:40'
			  }
		);
		
			/*
			or i could do this:
			var song = new Object()://creating an object for a song
	
			var song = { name:'', album:'', rank:'', year:''};//initializing the object with items- content
	 
			var songList = new Array(song1, song2, song3); //creating an array for all songs!
			*/
	
	
	


		 			$(document).ready(function(){   //for each member of the song list do this function
			$.each(songList, function(){    //another for each loop- goes to key and value and gets it
				document.write ('<ul>');
				$.each(this,function(variable, value){
				document.write('<li>' + value + '</li>');
					console.log(variable);
					console.log(value);
				});
				document.write('</ul>');
			});
		});
			