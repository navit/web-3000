<?php include('config.php'); ?>
<!doctype html>
<html>
	<head>
		<title>Facebook API</title>

		<link rel="stylesheet" href="./css/reset.css" />
		<link rel="stylesheet" href="./css/site.css" />

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="./js/site.js"></script>
	</head>

	<body>
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '<?php echo $config['facebook']['appId']; ?>', // App ID
		      channelUrl : '//chicken-parm.local/channel.html', // Channel File
		      status     : true, // check login status
		      cookie     : true, // enable cookies to allow the server to access the session
		      xfbml      : true  // parse XFBML
		    });

		    // Additional initialization code here
		  };

		  // Load the SDK Asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		</script>

		<h1>Sign In</h1>

		<div id="fb-data" class="is-hidden">
			<h2>Name</h2>
			<div class="image-container"></div>
		</div>

	</body>
</html>