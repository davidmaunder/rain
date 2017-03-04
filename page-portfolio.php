<?php
/* 
Template Name: Portfolio
*/ 

get_header();
?>
<div class="portfolio-header page-header">
	<div class="title">
		<h1 class="portfolio-title"><?php the_title(); ?></h1>
	</div>
</div>

<div class="portfolio-main">
	<div class="portfolio-wrapper">
		<?php 
			// the query
			$the_query = new WP_Query( array('post_type' => 'projects') ); ?>
 
			<?php if ( $the_query->have_posts() ) : ?>
 
				<!-- pagination here -->
 
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<div class="portfolio-item">
					<a class="card" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium_large', array( 'class' => 'lazy' )); ?>
						<div class="portfolio-item-details">
							<h2 class="portfolio-item-title"><?php the_title(); ?></h2>
							<div class="portfolio-item-excerpt"><?php the_excerpt(); ?></div>
							<p class="btn btn-black-outline portfolio-item-btn">View Project</p>
						</div>
					</a>
				</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
 
				<!-- pagination here -->
 
				<?php wp_reset_postdata(); ?>
 
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

	</div>

	<div class="col-md-12 contact-us">
		<h2>Get in touch</h2>
		<p>If you’ve got a project or idea, big or small, we’d love to chat with you.</p>
		<p>Get in touch today and see what Rain Creative can do for your business.</p>
		<a href="contact-us/" class="btn btn-black-outline">Get in touch today</a>
	</div>

</div><!-- /.portfolio-main -->

<?php get_footer(); ?>