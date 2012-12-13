<?php include ('config.php');?>
<!doctype html>
<html>
	<head>
		<title>List!</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/stylesheet.css" />
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</head>

	<body>
		<div id="fb-root"></div>
			<script>
			  window.fbAsyncInit = function() {
			    FB.init({
			      appId      : 'YOUR_APP_ID', // App ID
			      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
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
		<div class="is-bottom"></div>
	</body>
</html>


