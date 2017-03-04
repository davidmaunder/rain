<?php
//----------- Theme Clean Up -----------//
add_action('init', 'init_theme_clean_up');
function init_theme_clean_up()
{
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_generator' );
    add_filter( 'show_admin_bar', '__return_false' );
}

//----------- Scripts & CSS -----------//
// Add scripts and stylesheets
function rain_styles() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-global.css' );
	wp_enqueue_style( 'global', get_template_directory_uri() . '/css/build/global.css' );
}
add_action( 'wp_enqueue_scripts', 'rain_styles' );

//----------- Fonts -----------//
// Add Google Fonts
function rain_google_fonts() {
	wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'Montserrat');
}
add_action('wp_print_styles', 'rain_google_fonts');

//----------- Theme Support -----------//
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');


//----------- Projects - Custom Post Types -----------//
function custom_post_project() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name' ),
		'menu_name'           => __( 'Projects' ),
		'parent_item_colon'   => __( 'Parent Project' ),
		'all_items'           => __( 'All Projects' ),
		'view_item'           => __( 'View Project' ),
		'add_new_item'        => __( 'Add New Project' ),
		'add_new'             => __( 'Add New' ),
		'edit_item'           => __( 'Edit Project' ),
		'update_item'         => __( 'Update Project' ),
		'search_items'        => __( 'Search Project' ),
		'not_found'           => __( 'Not Found' ),
		'not_found_in_trash'  => __( 'Not found in Trash' ),
	);

// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'Projects' ),
		'description'         => __( 'Our work' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'projects', $args );
}
/* Hook into the 'init' action so that the function containing our
* post type registration is not unnecessarily executed. 
*/
add_action( 'init', 'custom_post_project', 0 );

function create_project_taxonomies() {
    register_taxonomy(
        'project_categories',
        'projects',
        array(
            'labels' => array(
                'name' => 'Project Categories',
                'add_new_item' => 'Add New Project Category',
                'new_item_name' => "New Project Category Type"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}
add_action( 'init', 'create_project_taxonomies', 0 );

//----------- Menus -----------//
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Numeric Pagination
function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";
}

//----------- Disqus -----------//
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}

?>