<?php get_header(); ?>

	<div class="page-main">
	
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
  
			get_template_part( 'content-page', get_post_format() );
 
		endwhile; endif;
		?>

	</div><!-- /.blog-main -->

<?php get_footer(); ?>