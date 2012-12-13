<?php include('data.php'); ?>
<!doctype html>
<html>
	<head>
		<title>List!</title>

		<link rel="stylesheet" href="./css/reset.css" />
		<link rel="stylesheet" href="./css/site.css" />

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="./js/waypoints.min.js"></script>
		<script type="text/javascript" src="./js/site.js"></script>
	</head>

	<body>
		<div class="container">
			<header class="masthead">
				<img class="avatar" src="http://a0.twimg.com/profile_images/1673907275/image_reasonably_small.jpg" />
				<h1><?php echo $data['name']; ?></h1>
				<h2><a href="#">@<?php echo $data['username']; ?></a></h2>
				<p class="bio"><?php echo $data['bio']; ?></p>
				<ul>
					<li><?php echo $data['hometown']['name']; ?></li>
			</header>
		</div>

		<div class="container">
			<section class="tweets">
				<?php /* loop! */ ?>
				<?php foreach($data['tweets'] as $tweet): ?>
				<article>
					<header>
						<img class="avatar" src="http://a0.twimg.com/profile_images/1673907275/image_reasonably_small.jpg" />
						<h1><?php echo $data['name']; ?></h1>
						<h2><a href="#">@<?php echo $data['username']; ?></a></h2>
					</header>					

					<div class="content">
						<time><?php echo date('F jS, Y',$tweet['time']); ?></time>
						<p><?php echo $tweet['body']; ?></p>
					</div>
				</article>
				<?php endforeach; ?>
			</section>
		</div>

		<div class="is-bottom"></div>
	</body>
</html>