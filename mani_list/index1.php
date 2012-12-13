<?php include('data.php'); ?>
<!doctype html>
<html>
	<head>
		<title>List!</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/stylesheet.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</head>

	<body>
		<div class="container">
			<h1>MANI'S : PLAYLIST</h1>
				<section class="listItem" id="one">
					<!-- <a href="#two"><img id="arrow"src="images/arrow.png" alt="arrow"/></a> -->
					<img class="cover" src="http://userserve-ak.last.fm/serve/500/82298575/Babel+Deluxe+Edition.png"<?php echo $data['coverSrc']; ?> />
					<div class= "details">
						<h2><?php echo $data['list'][0]['title']; ?></h2>
						<ul>
							<li><?php echo $data['list'][1]['artist']; ?></li>
							<li class="album"><?php echo $data['list'][2]['album']; ?></li>
							<li class="label"><?php echo $data['list'][3]['label']; ?></li>
							<li class="listeners"><?php echo $data['list'][4]['listeners']; ?></li>
							<li class="duration"><?php echo $data['list'][5]['duration']; ?></li>
						</ul>
					</div>	
				</section>
				
				<section class="listItem" id="one">
					<!-- <a href="#two"><img id="arrow"src="images/arrow.png" alt="arrow"/></a> -->
					<img class="cover" src="http://userserve-ak.last.fm/serve/500/82298575/Babel+Deluxe+Edition.png"<?php echo $data['coverSrc']; ?> />
					<div class= "details">
						<h2><?php echo $data['list'][0]['title']; ?></h2>
						<ul>
							<li><?php echo $data['list'][1]['artist']; ?></li>
							<li class="album"><?php echo $data['list'][2]['album']; ?></li>
							<li class="label"><?php echo $data['list'][3]['label']; ?></li>
							<li class="listeners"><?php echo $data['list'][4]['listeners']; ?></li>
							<li class="duration"><?php echo $data['list'][5]['duration']; ?></li>
						</ul>
					</div>	
				</section>
				
		
				
				
				
			
			

		</div> <!--ends container-->



		<div class="is-bottom"></div>
	</body>
</html>