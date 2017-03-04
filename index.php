<?php get_header(); ?>
	<div class="blog-header page-header">
		<div class="title">
			<h1 class="blog-title">design &amp; stuff</h1>
		</div>
	</div>

	<div class="blog-main">
		<div class="blog-wrapper">
	
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
 	
			endwhile; ?>

		</div>

		<?php wpbeginner_numeric_posts_nav(); ?>

		<?php endif;
		?>

	</div><!-- /.blog-main -->
<?php get_footer(); ?>