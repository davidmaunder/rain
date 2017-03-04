<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'holla@davidmaunder.com';

	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "You have a new testimonial:
	From:  $_POST[name]
	E-Mail: $_POST[email]
	Testimonial: $_POST[message]";

	// use this to echo in the post submission message
	$customerName = "$_POST[name]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Testimonial Submission', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Brookhouse Gas</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="theme-color" content="#1659A1"/ ><!-- Android Chrome header colour -->
	<!-- Icons -->
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="apple-touch-icon" href="images/icon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="images/icon/apple-touch-icon-152x152.png" />
	<link rel="icon" sizes="192x192" href="images/icon/icon-hd.png" />
	<link rel="icon" sizes="128x128" href="images/icon/icon-sd.png" />
	<!-- Combined CSS -->
  	<link rel="stylesheet" href="css/build/global.css">
  	<link rel="stylesheet" href="css/bootstrap-global.css">
  	<!-- Google Font-->
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  	<!-- Legacy -->
  	<script src="js/respond.js"></script>
</head>
<body>
<?php include "include/navigation.php" ?>
<div class="container-fluid">
	<div class="col-md-12 intro">
		<svg class="icon-medium icon-comments" viewBox="0 0 32 32">
			<use src="comments.png" xlink:href="#icon-comments"></use>
		</svg>
		<h2>Thanks for the testimonial <br><?php echo $customerName;?>.</h2>
		<h4>We appreciate your feedback.</h4>
		<a href="testimonials.html" class="btn btn-blue">Back to Testimonials</a>
	</div>
</div>

</body>
</html>