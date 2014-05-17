<?php
// Define global path variables
define('MY_WORDPRESS_FOLDER',$_SERVER['DOCUMENT_ROOT']);
define('MY_THEME_FOLDER',str_replace("\\",'/',dirname(__FILE__)));
define('MY_THEME_PATH','/' . substr(MY_THEME_FOLDER,stripos(MY_THEME_FOLDER,'wp-content')));

function my_scripts_method()
{
	// Load for all pages
	wp_deregister_script('jquery');
   	wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-latest.min.js", false, null);
   	wp_enqueue_script('jquery');
	
	wp_enqueue_script('cycle2 carousel', get_template_directory_uri().'/js/vendor/jquery.cycle2.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('cycle2 carousel swipe', get_template_directory_uri().'/js/vendor/jquery.cycle2.swipe.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('doubletap', get_template_directory_uri().'/js/vendor/doubletaptogo.js', array('jquery'), '1.0', true);
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

// truncate function
function truncate($string, $limit, $break=" ", $pad="...")
{
	// Remove any formatting first
	//$string = strip_tags($string);
	// return with no change if string is shorter than $limit
	if(strlen($string) <= $limit) return $string;
	// is $break present between $limit and the end of the string?
	if(false !== ($breakpoint = strpos($string, $break, $limit)))
	{
		if($breakpoint < strlen($string) - 1)
		{
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}
	return $string;
}

// Adds pagination to news page
if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;

// Add except to pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// Remove width and height from images
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

// Page slug as class
$page_slug = '';
if (is_page())
{
	$page_slug = 'page-'.basename(get_permalink());
	
	if ($post->post_parent)
	{
		$page_slug.= ' parent-'.basename(get_permalink($post->post_parent));
	}
}


// adds menus to the appearance tab in the admin area
register_nav_menu( 'primary', 'Primary Menu');
register_nav_menu( 'footer-nav', 'Primary Menu');

// Add "has-submenu" CSS class to navigation menu items that have children in a submenu.
function nav_menu_item_parent_classing( $classes, $item )
{
    global $wpdb;
    
$has_children = $wpdb -> get_var( "SELECT COUNT(meta_id) FROM {$wpdb->prefix}postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='" . $item->ID . "'" );
    
    if ( $has_children > 0 )
    {
        array_push( $classes, "has-subnav" );
    }
    
    return $classes;
}
 
add_filter( "nav_menu_css_class", "nav_menu_item_parent_classing", 10, 2 );

// add featured image support
add_theme_support( 'post-thumbnails' ); 
//add_image_size('person', 193, 196, TRUE);
//add_image_size('person-large', 300, 999, TRUE);
//add_image_size('blogpost', 488, 300, TRUE);
//add_image_size('pagefeat', 489, 455, TRUE);


?>