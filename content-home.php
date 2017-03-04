<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active slide slide1">
			<div class="container-fluid carousel-text">
				<div class="title">
					<div class="title-inner">
						<h1>
							We’re a design &amp; digital studio based in Manchester. We deliver beautifully crafted projects with passion. 
						</h1>
						<a href="contact-us/" class="btn btn-black-outline">Get in touch today</a>
					</div>
				</div>
				<canvas id="c" class="fireworks"></canvas>
			</div>
		</div>
	</div>

</div>

<div class="container-fluid homepage-grid">
	<div class="col-md-6 services">
		<h2>Our Services</h2>
		<ul>
			<li>Branding &amp; Logo Design</li>
			<li>Website Design &amp; Development</li>
			<li>Email Marketing</li>
			<li>UI/UX Design</li>
			<li>Brochure Design</li>
			<li>App Design</li>
			<li>Digital Marketing</li>
		</ul>
	</div>
	<div class="col-md-6 project project-mine">
		<div class="logo-table">
			<div class="logo-container">
				<img src="<?php bloginfo('template_directory');?>/images/homepage-grid/mine-logo.jpg" alt="MINE Productions">
			</div>
		</div>
	</div>
	<div class="col-md-6 what-we-do pull-right">
		<div class="left-border-container">
			<h2>What can we do for&nbsp;your&nbsp;brand?</h2>
			<p>We offer a range of creative services from rebrands to websites, email marketing to creative digital campaigns to deliver the best of your brand to your customers.</p>
			<a href="contact-us/">Get in touch</a>
		</div>
	</div>
	<div class="col-md-6 project project-anvc"></div>
	<div class="col-md-12 contact-us">
		<h2>Get in touch</h2>
		<p>If you’ve got a project or idea, big or small, we’d love to chat with you.</p>
		<p>Get in touch today and see what Rain Creative can do for your business.</p>
		<a href="contact-us/" class="btn btn-black-outline">Get in touch today</a>
	</div>

</div>

<?php the_content(); ?>