<?php 

	function theme_styles()
	{
	    wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/public/css/app.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' ); 

	function theme_js()
	{
	    global $wp_scripts;
	    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
		wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
		$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
	    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/public/js/app.bundle.js', array('jquery'), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_js' );

	// Add Theme Support
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
	add_theme_support( 'html5' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'starter-content' );

	add_filter('show_admin_bar', '__return_false');


	define('ALLOW_UNFILTERED_UPLOADS', true);


	// Register Menu Locations
	register_nav_menus( [
		'main-menu' => esc_html__( 'Main Menu', 'wpheirarchy' ),
		'footer-menu' => esc_html__('Footer Menu', 'wpheirarchy')
	]);


	// Custom Menu
	class Primary_Walker_Nav_Menu extends Walker_Nav_menu {

		function start_lvl( &$output, $depth ) {
			$indent = str_repeat("\t", $depth);
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"site-nav-desktop__dropdown-list$submenu depth_$depth\">\n";
		}

		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

			$indent = ($depth) ? str_repeat("\t", $depth) : '';

			$li_attributes = '';
			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			$classes[] = ($args->walker->has_children) ? 'site-nav-desktop__item--dropdown' : '';
			$classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
			$classes[] = 'menu-item-'. $item->$ID;
			if( $depth && $args->walker->has_children ) {
				$classes[] = 'site-nav-desktop__item--dropdown';
			}

			$class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = 'class="' . esc_attr($class_names) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

			$attributes .= ! ( $args->walker->has_children ) ? ' class="site-nav-desktop__dropdown-list"' : '';

			$item_output = $args->before;
			$item_output .= '<a class="site-nav-desktop__link"' . $attributes .'><span>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= ( $depth == 0 && $args->walker->has_children ) ? '</span></a>' : '</span></a>';
			$item_output .= $args->after;

			$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

	}


	// Projects Categories
	function 	custom_projects() {

	    $labels = array(
	        'name'                => _x( 'Projecten', 'Post Type General Name', 'wpheirarchy' ),
	        'singular_name'       => _x( 'Projecten', 'Post Type Singular Name', 'wpheirarchy' ),
	        'menu_name'           => __( 'Projectens', 'wpheirarchy' ),
	        'parent_item_colon'   => __( 'Parent Projecten', 'wpheirarchy' ),
	        'all_items'           => __( 'All Projectens', 'wpheirarchy' ),
	        'view_item'           => __( 'View Projecten', 'wpheirarchy' ),
	        'add_new_item'        => __( 'Add New Projecten', 'wpheirarchy' ),
	        'add_new'             => __( 'Add New', 'wpheirarchy' ),
	        'edit_item'           => __( 'Edit Projecten', 'wpheirarchy' ),
	        'update_item'         => __( 'Update Projecten', 'wpheirarchy' ),
	        'search_items'        => __( 'Search Projecten', 'wpheirarchy' ),
	        'not_found'           => __( 'Not Found', 'wpheirarchy' ),
	        'not_found_in_trash'  => __( 'Not found in Trash', 'wpheirarchy' ),
	    );

	    $args = array(
	        'label'               => __( 'Projecten', 'wpheirarchy' ),
	        'description'         => __( 'Projectens for web developers', 'wpheirarchy' ),
	        'labels'              => $labels,
	        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	        'taxonomies'          => array( 'genres' ),
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
	        'menu_icon' 		  => 'dashicons-category',
	        'taxonomies'          => array( 'category' ), 
	    );
	     
	    // Registering your Custom Post Type
	    register_post_type( 'projectens', $args );
	 
	}	 
	add_action( 'init', 'custom_projects', 0 );

	function projects_taxonomy() {  
	    register_taxonomy(  
	        'projecten_categories',
	        'projecten',
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Projecten Category',
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'projecten',
	                'with_front' => false
	            )
	        )  
	    );  
	}  
	add_action( 'init', 'projects_taxonomy');