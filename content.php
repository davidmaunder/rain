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
</div><!-- /.blog-post -->