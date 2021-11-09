<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * @package csc
 * @since csc 1.0
 */


$theme_path = get_stylesheet_directory_uri();
define( 'THEME_PATH', $theme_path );


function csc_setup() {

    add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( "post-thumbnails" );
    add_image_size("slide", 2166, 1000, true);
    add_image_size("bg", 1600, 1000, true);
    add_image_size("ico76", 100, 76, false);
    add_image_size("ico50", 100, 50, false);
    add_image_size("s768x768", 768, 768, true);
    add_image_size("a1000x500", 1000, 500, true);
    //add_image_size("a500x500", 500, 500, true);
    // add_image_size("a593x500", 593, 500, true);
    // add_image_size("a885x500", 885, 500, true);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
	) );

    register_nav_menus( array(
        'footer_menu' => 'Footer Menu',
    ) );


    /*if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));        
    }*/
}

add_action( 'after_setup_theme', 'csc_setup' );


// disable srcsets
add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

  
// remove the p from around imgs 
// http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');



//disable some queries
function disable_some_queries( $query, $error = true ) {
	global $wp_query, $post;
 	
    if (is_author() || is_attachment() || is_day()) {
        $wp_query->set_404();
    }

    if (is_search()) {
        $wp_query->set_404();
    }

    if (is_feed()) {
        $author     = get_query_var('author_name');
        $attachment = get_query_var('attachment');
        $attachment = (empty($attachment)) ? get_query_var('attachment_id') : $attachment;
        $day        = get_query_var('day');
        $search     = get_query_var('s');
 
        if (!empty($author) || !empty($attachment) || !empty($day) || !empty($search)) {
            $wp_query->set_404();
            $wp_query->is_feed = false;
        }
    }
}
add_action( 'parse_query', 'disable_some_queries' );
add_filter( 'get_search_form', create_function( '$a', "return null;" ) );



function csc_TinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'csc_TinyMCE' );



function insert_br($str){
    return strip_tags(wpautop(trim($str)), '<br>');
}

//  Gallery
add_action( 'wp_loaded', function (){
	if( taxonomy_exists('gallery_cat') ){
        add_action('wp_footer', function (){
	        $cats = get_terms( array(
		        'taxonomy' => 'gallery_cat',
//			    'hide_empty' => false
	        ));

	        if( empty($cats['errors']) ){
		        $galleries = array();
		        foreach ($cats as $cat){
			        $args = array(
				        'post_status' => 'publish',
				        'post_type' => 'gallery',
				        'posts_per_page' => -1,
				        'tax_query' => array(
					        array(
						        'taxonomy' => 'gallery_cat',
						        'field'    => 'term_id',
						        'terms'    => $cat->term_id
					        )
				        )
			        );
			        $gallery = new WP_Query($args);

			        if( $gallery->have_posts() ){
				        while ( $gallery->have_posts() ) { $gallery->the_post();
					        $format = get_field( 'format', get_the_ID() );

					        $galleries[ '#gallery-' . $cat->slug ][] = array(
						        'src'  => get_field( $format, get_the_ID() ),
						        'type' => str_replace( 'video', 'iframe', $format )
					        );
				        }
			        }
			        wp_reset_postdata();
		        }

		        ?>
                <script type="text/javascript">
                    /* <![CDATA[ */
                    var galleries = <?php echo wp_json_encode($galleries); ?>;
                    /* ]]> */
                </script>
        <?php }
        });
	}
});




