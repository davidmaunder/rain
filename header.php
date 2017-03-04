<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	
	<?php wp_head(); ?>
</head>
<body>
	<!-- Nav Bar -->
	<svg style="display:none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
		<symbol id="icon-phone"><path d="M146.6,120.1c-13.3,13.3-13.3,26.7-26.7,26.7c-13.3,0-26.7-13.3-40-26.7c-13.3-13.3-26.7-26.7-26.7-40 c0-13.3,13.3-13.3,26.7-26.7C93.2,40,53.2,0,39.9,0c-10.6,0-29.6,25.3-37,35.7c-2.2,3-3,7.1-2.7,9.7C3,73.4,28.9,122.5,53.2,146.8 c23.4,23.4,69.5,48.3,98.1,52.6c4.6,0.7,10.7-0.3,15.3-3.8c11.2-8.5,33.5-25.5,33.5-35.5C200,146.8,160,106.8,146.6,120.1 L146.6,120.1z M146.6,120.1"/></symbol>
	</svg>
	<svg style="display:none;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
		<symbol id="icon-mail">
			<path d="M198.9,49.5c0-3.3-0.9-6.4-2.5-9.1l-71.8,64l71.5,55.5c1.7-2.8,2.7-6,2.7-9.5V49.5z"/><path d="M91,105.2c5.1,4.6,12.8,4.6,17.9,0l80.3-71.5c-2.5-1.3-5.2-2-8.2-2H19c-3,0-5.7,0.7-8.2,2L91,105.2z"/><path d="M75.4,104.5l-71.8-64c-1.6,2.7-2.5,5.7-2.5,9.1v101c0,3.5,1,6.7,2.7,9.5L75.4,104.5L75.4,104.5z"/><path d="M117.1,111.2l-1.6,1.4c-4.4,3.9-10,5.9-15.5,5.9c-5.6,0-11.1-2-15.5-5.9l-1.6-1.4l-71.5,55.5c2.3,1.1,4.9,1.7,7.6,1.7h162 c2.7,0,5.3-0.6,7.6-1.7L117.1,111.2z"/>
		</symbol>
	</svg>


	<!-- Nav Bar -->
	<div id="navbar" class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="main-logo svg" href="<?php echo get_bloginfo( 'wpurl' ); ?>">
					<object class="rain-nav" type="image/svg+xml" data="<?php bloginfo('template_directory');?>/images/svg/rain-logo.svg"></object>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</div>