<?php /* Template Name: Blog Page */ ?>

<?php get_header(); ?>
	<div class="blog-header page-header">
		<div class="title">
			<h1 class="blog-title">design &amp; stuff</h1>
		</div>
	</div>

	<div class="blog-main">
		<div class="blog-wrapper">
			<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<div class="blog-post">
			<a class="card" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium_large', array( 'class' => 'lazy' )); ?>
				<div class="blog-post-details">
					<p class="blog-post-date"><?php the_date(); ?></p>
					<h2 class="blog-post-title"><?php the_title(); ?></h2>
					<div class="blog-post-excerpt"><?php the_excerpt(); ?></div>
					<p class="blog-post-link">Read more</p>
				</div>
			</a>
		</div>

		<?php endwhile;
		?>

		</div>

		<?php wpbeginner_numeric_posts_nav(); ?>


	</div><!-- /.blog-main -->
<?php get_footer(); ?>