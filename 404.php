<?php
/* The template for displaying 404 pages (Not Found) */
?>

<?php get_header(); ?>

<div class="page-main">
	<div class="col-md-12 page-header">
		<div class="title">
			<h1>Well this is awkward...</h1>
			<h3>The page you're looking for doesn't exist... Error 404</h3>
			<div class="title-link-container">
				<a href="<?php echo get_home_url() ?>" class="btn btn-black-outline btn-icon">
					Go Home
				</a>
				<a href="mailto:hello@rain.studio" class="btn btn-black-outline btn-icon">
					<svg class="btn-svg" viewBox="0 0 200 200"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-mail"></use></svg>
					hello@rain.studio
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
