<?php
//update_option('siteurl','http://localhost/epidemic');
//update_option('home','http://localhost/epidemic');
function dequeue_devicepx() {
wp_dequeue_script( 'devicepx' );
}
define( 'ACF_LITE', true );
add_action( 'wp_enqueue_scripts', 'dequeue_devicepx', 20 );
	// Add RSS links to <head> section
	automatic_feed_links();
	// Load jQuery
	if ( !is_admin() ) {
//	   wp_deregister_script('jquery');
//	   wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false);
//	   wp_enqueue_script('jquery');
//	   
//	   wp_deregister_script('jquery-ui');
//	   wp_register_script('jquery-ui', ("//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"), false);
//	   wp_enqueue_script('jquery-ui');
//	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
//	   wp_enqueue_script('jquery');
//	   wp_deregister_script('jquery');
//	   wp_register_script('jquery', ( get_stylesheet_directory_uri(). "/js/jquery/jquery.min.js" ), false); //jquery-1.11.2
//	   wp_enqueue_script('jquery'); 
//	   wp_deregister_script('jquery-carousel');
//	   wp_register_script('jquery-carousel', ( get_stylesheet_directory_uri(). "/js/jquery/jquery.carousel.js" ), false);
//	   wp_enqueue_script('jquery-carousel'); 
		//wp_deregister_script('jquery');
		//wp_register_script('jquery', ( get_stylesheet_directory_uri(). "/js/jquery/jquery.min.js" ), false, null, false); //jquery-1.11.2
		//wp_enqueue_script('jquery'); 
        
		function wpgnik_register_js() {
            wp_deregister_script('jquery');
            wp_register_script('jquery', ( get_stylesheet_directory_uri(). "/js/jquery/jquery.min.js" ), false, null, false); //jquery-1.11.2
            wp_enqueue_script('jquery'); 
            
			wp_deregister_script('respond');
			wp_register_script('respond', ( get_stylesheet_directory_uri(). "/js/respond.js" ),'', '', true);
			wp_enqueue_script('respond');  
			wp_deregister_script('bootstrap');
			wp_register_script('bootstrap', ( get_stylesheet_directory_uri(). "/js/bootstrap.min.js" ),'', '', true);
			wp_enqueue_script('bootstrap'); 
			wp_deregister_script('flexslider');
			wp_register_script('flexslider', ( get_stylesheet_directory_uri(). "/js/jquery/jquery.flexslider.js" ),'', '', true);
			wp_enqueue_script('flexslider'); 

            
			//wp_deregister_script('wow');
			//wp_register_script('wow', ( get_stylesheet_directory_uri(). "/js/wow.min.js" ),'', '', true);
			//wp_enqueue_script('wow');  
            
			wp_register_script('customgnik', ( get_stylesheet_directory_uri(). "/js/customgnik.js" ),'', '', true);
			wp_enqueue_script('customgnik');   
		}
		add_action( 'wp_enqueue_scripts', 'wpgnik_register_js', 10 );
		function wpgnik_register_css() {
			wp_register_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css' );
			wp_enqueue_style( 'bootstrapcss' ); 
			
			wp_register_style( 'flexslider-style', get_template_directory_uri() . '/css/flexslider.css' );
			wp_enqueue_style( 'flexslider-style' );
			
			//wp_register_style( 'bootstrapthemecss', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
			//wp_enqueue_style( 'bootstrapthemecss' ); 
            
			//wp_register_style( 'animatecss', get_template_directory_uri() . '/css/animate.css' );
			//wp_enqueue_style( 'animatecss' ); 
            
            
            
			wp_register_style( 'custom_style', get_bloginfo('stylesheet_url') );
			wp_enqueue_style( 'custom_style' );
      
			wp_register_style( 'custom_style_layout2', get_template_directory_uri() . '/css/style-layout2.css' );
			wp_enqueue_style( 'custom_style_layout2' );
      
			if(is_page_template( 'template_lader1.php' ) || is_page_template( 'template_seopage.php' ) || is_page_template( 'template_wl_seo.php' ) ):
				wp_register_style( 'lander1', get_template_directory_uri() . '/css/lander1.css' );
				wp_enqueue_style( 'lander1' ); 
			endif;
			
			if(is_page_template( 'template_wl_seo.php' )):
				wp_register_style( 'wl_seo', get_template_directory_uri() . '/css/wl_seo.css' );
				wp_enqueue_style( 'wl_seo' ); 
			endif;
			
			if(is_page_template( 'template_seopage.php' )):
				wp_register_style( 'seopage', get_template_directory_uri() . '/css/seopage.css' );
				wp_enqueue_style( 'seopage' ); 
			endif;
			
			if(is_page_template( 'template_pricing.php' )):
				wp_register_style( 'cpricing', get_template_directory_uri() . '/css/pricing.css' );
				wp_enqueue_style( 'cpricing' ); 
			endif;
		}
		add_action( 'wp_enqueue_scripts', 'wpgnik_register_css', 5 );	 
        
        
		function wpgnik_register_scripts_ftr() {
			wp_register_style( 'googlewebfont-k', "//fonts.googleapis.com/css?family=Open+Sans:300,400,700" );
			wp_enqueue_style( 'googlewebfont-k' );
		}
		add_action( 'wp_footer', 'wpgnik_register_scripts_ftr', 10 );
        
	}
/**
 * Automatically move JavaScript code to page footer, speeding up page loading time.
 * Solve's javascript render block issue on google 
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);
 */
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'title-tag' );
		//add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	}
	if ( function_exists( 'add_image_size' ) ) { 
		//add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
		add_image_size( 'hp-lnpost-thumb', 290, 205, true ); //(cropped)
	}
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		//'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Widgets',
    		'id'   => 'footer-widgets',
    		//'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget-f col-sm-3 %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Hidden Widgets',
    		'id'   => 'hidden-widgets',
    		//'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget-hidden %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2 class="wh-heading">',
    		'after_title'   => '</h2>'
    	));
    }
	//reg nav
  	//if (function_exists('register_nav_menus')) {
	//	register_nav_menus(array('main_nav' => 'Main Navigation' ));	
	//}
	// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
	add_action( 'after_setup_theme', 'wpgnik_setup' );
	if ( ! function_exists( 'wpgnik_setup' ) ):
		function wpgnik_setup() { 
		register_nav_menu( 'main_nav', __( 'Main Navigation', 'wpgnik' ) );
	} endif;
	// Display Spam & Delete links when logged in
	function spam_delete_links($id) {
		global $id;
		if (current_user_can('edit_post')) {
			echo ' | <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&c='.$id.'">Delete</a>';
			echo ' | <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&dt=spam&c='.$id.'">Spam</a>';
		}
	}

/*
add_filter( 'wp_get_attachment_image_attributes', 'myReturnFeaturedImagesTitles', 10, 2 );
function myReturnFeaturedImagesTitles($attr, $attachment) {
  if (!isset($attr['title']) && isset($attachment->post_title) && $attachment->post_title !='') {
    $attr['title'] = $attachment->post_title;
	$attr['alt'] = $attachment->post_title ."image";
  }
  return $attr;
}
*/


    // This is for product woo
    add_filter( 'wp_get_attachment_image_attributes', 'myReturnFeaturedImagesTitles', 10, 2 );
    function myReturnFeaturedImagesTitles($attr, $attachment) {	
      if (!isset($attr['title']) && isset($attachment->post_title) && $attachment->post_title !='') {	  
        $attr['title'] = $attachment->post_title;	
        $attr['alt'] = $attachment->post_title;	
      } else {
          $attr['title'] = get_the_title();
          $attr['alt'] = get_the_title();
      }  
      return $attr;  
    }

    // This is for the images inside the content
    function add_alt_tags($content) {
        global $post;
        preg_match_all('/<img (.*?)\/>/', $content, $images);
        if(!is_null($images)) {
            foreach($images[1] as $index => $value) {
                if(!preg_match('/title=/', $value)) {
                    $new_img = str_replace('<img', '<img title="'.$post->post_title.'"', $images[0][$index]);
                    $content = str_replace($images[0][$index], $new_img, $content);
                }
                if(!preg_match('/alt=/', $value)) {
                    $new_img = str_replace('<img', '<img alt="'.$post->post_title.'"', $images[0][$index]);
                    $content = str_replace($images[0][$index], $new_img, $content);
                }
            }
        }
        return $content;
    }
    add_filter('the_content', 'add_alt_tags', 99999);


function replace_content($text) {
	$alt = get_the_author_meta( 'display_name' );
	$text = str_replace('alt=\'\'', 'alt=\'Avatar for '.$alt.'\' title=\'Gravatar for '.$alt.'\'',$text);
	return $text;
}
add_filter('get_avatar','replace_content');
  add_filter ('the_content', 'insertCallToAction');
  function insertCallToAction($content) {
     if(is_page() && !is_page('appointment') ) {
        //$content.= '<div class="btn-group btn-group-justified" role="group">';
        $content.= '<a href="tel:3035866728" class="btn btn-info btn-lg onscreen fadeIn"><span class="glyphicon glyphicon-earphone"> </span> Call Us</a> ';
        $content.= '<a href="mailto:info@epidemic-marketing.com" class="btn btn-info btn-lg onscreen fadeIn" data-wow-delay="1s"><span class="glyphicon glyphicon-envelope"> </span> Email Us</a>';
        //$content.= '</div>';
     }
     return $content;
  }

// Adding custom metadata


//add_filter( 'amp_post_template_metadata', 'amp_modify_json_metadata', 10, 2 ); 
function amp_modify_json_metadata( $metadata, $post ) {
    if( 'post'=== $post->post_type ){

        $metadata['@type'] = 'Article';

        $metadata['publisher']['name'] = ' Epidemic Marketing ';

        $metadata['publisher']['logo'] = array(
            '@type' => 'ImageObject',
            'url' => get_stylesheet_directory_uri().'/images/logo.png',
            'height' => 60,
            'width' => 250,
        );


    return $metadata;
    }
}


?>