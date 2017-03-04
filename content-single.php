<div class="blog-post-header page-header">
	<div class="title">
		<h1 class="blog-post-title"><?php the_title(); ?></h1>
	</div>
	<div class="page-header-wrapper">
		<div class="page-header-background" <?php 
		if ( $thumbnail_id = get_post_thumbnail_id() ) {
			if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
				printf( ' style="background-image: url(%s);"', $image_src[0] );     
		}?>
		>
	</div>
</div>
</div>
<div class="blog-main">
	<div class="col-md-9 blog-post-content">
		<p class="blog-post-date"><?php the_date(); ?></p>
		<?php the_content(); ?>
	</div>

	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

	<div class="col-md-12 comment-section">
		<?php
		if( comments_open() ) {
			echo '<h3 class="comment-section__title">Comments</h3>';
		}
		disqus_embed('rain-studio');
		?>
	</div>
</div>