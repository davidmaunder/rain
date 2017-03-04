<div class="blog-sidebar">
	<div class="sidebar-module">
		<h4>Categories</h4>
		<ol class="categories list-unstyled">
			<?php wp_list_categories( array(
				'orderby'    => 'name',
				'show_count' => true,
				'title_li'	 => '',
			) ); ?> 
		</ol>
	</div>
</div><!-- /.blog-sidebar -->
