<?php include('data_old.php'); ?>
<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta name="description" content="">
	    <meta name="author" content="">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"
		 <script src=""></script> 
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
	</head>
	<body>
		<section id="content">
			<div id="Maintitle">
				<h1>TOP:10</h1>
			</div>
			
			 <div id="keyTitles">
			  	<h2> <span class="rank">Rank |</span> <span class="song">Song |</span> <span class="artist">Artist |</span> <span class="year">Year |</span></h2>
			 </div>
			  
			<div id="list">
				<ul>
					<?php //for each item inside our array songs 
						$j = 0;//
						foreach($songs as $song){
							echo '<li class="'.'link' . $j . '">';
							echo '<span class="rank">' .$song['rank']. '</span>';
							echo '<span class="link"><a href="' .$song['link']. '" target="_blank">'.$song['name'].'</a></span>';//the structure of a link
							//echo '<span class="name">' .$song['name']. '</span>';
							echo '<span class="artist">' .$song['artist']. '</span>';
							//echo '<span class="album">' .$song['album']. '</span>';
							echo '<span class="year">' .$song['year']. '</span>';
							//echo '<span class="duration">' .$song['duration']. '</span>';
							echo '</li>';
							$j++;
						}
					?>
				</ul>
			  </div>
				<div id="albums"> 
					<?php
					$i = 0;
					foreach($songs as $song){
					echo '<img class="album ' . 'image' . $i . '" src="' . $song['img'] . '"/>';//adding a unique class to each one so it can grab the unique url
					$i++;
					}
					?>
				</div>
				
		</section>
	
	</body>
</html>
	
	
		
	
	
	
	
	
