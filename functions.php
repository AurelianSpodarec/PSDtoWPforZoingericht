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



///////////////////////////////////////////////
//
// Walker Class Menu: Header
//
///////////////////////////////////////////////

class Primary_Walker_Nav_Menu extends Walker_Nav_menu {

	function start_lvl( &$output, $depth ) {
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"site-nav__dropdown-list$submenu depth_$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'site-nav__item--dropdown' : '';
		$classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
		$classes[] = 'menu-item-'. $item->$ID;
		if( $depth && $args->walker->has_children ) {
			$classes[] = 'site-nav__item--dropdown';
		}

		$class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = 'class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

		$attributes .= ! ( $args->walker->has_children ) ? ' class="site-nav__dropdown-list"' : '';

		$item_output = $args->before;
		$item_output .= '<a class="site-nav__link"' . $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= ( $depth == 0 && $args->walker->has_children ) ? '</span></a>' : '</span></a>';
		$item_output .= $args->after;

		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}


///////////////////////////////////////////////
//
// PROJECT CUSTOM POST TYPES AND TAXONOMY
//
///////////////////////////////////////////////

 
function projecten_taxonomy() {  
    register_taxonomy(  
        'projecten_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'projecten',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Projectens',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'projecten', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'projecten_taxonomy');
	
function filter_post_type_link($link, $post)
{
    if ($post->post_type != 'projecten')
        return $link;

    if ($cats = get_the_terms($post->ID, 'projecten_categories'))
        $link = str_replace('%projecten_categories%', array_pop($cats)->slug, $link);
    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);

//Registering Custom Post Type projecten
add_action( 'init', 'register_themepost', 20 );
function register_themepost() {
    $labels = array(
        'name' => _x( 'projecten', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Project', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New Project Post', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit Project Post', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New Project Post', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View Project Post', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search Project Posts', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No ProjectPosts found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No Project Posts found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent Project Post:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Projectens', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Project Posts',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'post_tag','projecten_categories'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'projecten/%projecten_categories%','with_front' => FALSE),
        'public' => true,
        'has_archive' => 'projecten',
        'capability_type' => 'post'
    );  
    register_post_type( 'projecten', $args );//max 20 charachter cannot contain capital letters and spaces
}  



///////////////////////////////////////////////
//
// SERVICES CUSTOM POST TYPE
//
///////////////////////////////////////////////

function services() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Diensten'),
        'supports' => array( 'title', 'editor', 'thumbnail', ),
        'singular_name'       => __( 'diensten', 'Post Type Singular Name', 'wpheirarchy' ),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );	
    register_post_type( 'services', $args );
}
add_action( 'init', 'services' );