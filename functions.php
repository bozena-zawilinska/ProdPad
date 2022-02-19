<?php

/**
 *
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
// add_filter('protected_title_format', 'blank');
// function blank($title) {
//        return '%s';
// }


/**
 * Deregister WordPress default jQuery
 * Register and Enqueue Google CDN jQuery
 */
function pp_js () {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri().'/assets/scripts/jquery-1.11.3.min.js', false, null, true  );
   wp_enqueue_script( 'jquery' );
  wp_enqueue_script('custom',get_template_directory_uri().'/assets/scripts/custom.min.js',array('jquery'), '1.35', true);
  
}
add_action('wp_enqueue_scripts','pp_js','0');

function pp_setup () {
    remove_action('wp_head', 'wp_generator');                // #1
    remove_action('wp_head', 'wlwmanifest_link');            // #2
    remove_action('wp_head', 'rsd_link');                    // #3
    remove_action('wp_head', 'wp_shortlink_wp_head');        // #4

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);    // #5

    add_filter('the_generator', '__return_false');            // #6
   // add_filter('show_admin_bar','__return_false');            // #7

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action('after_setup_theme', 'pp_setup');


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

function register_footer_menu_prodpad() {
  register_nav_menu('footer_menu_prodpad',__( 'Footer Menu ProdPad' ));
}
add_action( 'init', 'register_footer_menu_prodpad' );

function register_footer_menu_about() {
  register_nav_menu('footer_menu_about',__( 'Footer Menu About' ));
}
add_action( 'init', 'register_footer_menu_about' );


function register_footer_menu_resources() {
  register_nav_menu('footer_menu_resources',__( 'Footer Menu Resources' ));
}
add_action( 'init', 'register_footer_menu_resources' );


function register_footer_menu_features() {
  register_nav_menu('footer_menu_features',__( 'Footer Menu Features' ));
}
add_action( 'init', 'register_footer_menu_features' );

/* Custom template for post categories */

//Gets post cat slug and looks for single-[cat slug].php and applies it
// add_filter('single_template', create_function(
// 	'$the_template',
// 	'foreach( (array) get_the_category() as $cat ) {
// 		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
// 		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
// 	return $the_template;' )
// );

add_filter( 'single_template', 'wpml_single_template' );
function wpml_single_template( $single_template ) {
 
    foreach( (array) get_the_category() as $cat ) {
 
        //get the default language category
        $cat = get_category( $get_category_id_default_language );
 
        //switch back to current language
 
        if ( file_exists(STYLESHEETPATH . "/single-{$cat->slug}.php") )
            return STYLESHEETPATH . "/single-{$cat->slug}.php";
    }
 
    return $single_template;
}

//Custom excerpt length

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = strip_shortcodes( $excerpt );
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'...';
  return $excerpt;
}

//remove migrate
function dequeue_jquery_migrate( &$scripts){
  if(!is_admin()){
  $scripts->remove( 'jquery');
  $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
  }
}

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate');

// numbered pagination


function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><p>Page ".$paged." of ".$pages."</p><ul>";
         if($paged > 1 && $showitems < $pages) echo "<li><a class='pagination__prev' href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"current\"><a href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<li><a class='pagination__next' href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a></li>";  
         echo "</ul></div>\n";
     }
}



add_action('pre_get_posts','pagination');

//Omit pages from search results
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','SearchFilter');

////////////////////////////////////
// BuddyPress Profile URL Integration //////////////////////////////////

add_filter('wpdiscuz_profile_url', 'wpdiscuz_bp_profile_url', 10, 2);
function wpdiscuz_bp_profile_url($profile_url, $user) {
    if ($user && class_exists('BuddyPress')) {
        $profile_url = bp_core_get_user_domain($user->ID);
    }
    return $profile_url;
}


add_action( 'wp_footer', 'ecourseSharingOptions' );
 
function ecourseSharingOptions() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '5572' == event.detail.contactFormId ) {
      $('#sharingModal').fadeIn();
      $('body').addClass("modalOpen");
      return false;
    }
}, false );
</script>


<?php
}


add_action( 'wp_footer', 'handyGuideSharingOptions' );
 
function handyGuideSharingOptions() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '5571' == event.detail.contactFormId ) {
      $('#sharingModal').fadeIn();
      $('body').addClass("modalOpen");
      return false;
    }
}, false );
</script>


<?php
}


add_action( 'wp_footer', 'consultantPopUpModal' );
 
function consultantPopUpModal() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '5715' == event.detail.contactFormId ) {
      $('#trialModal').fadeIn();
      $('body').addClass("modalOpen");
      return false;
    }
}, false );
</script>


<?php
}

?>

<?php

/**********************************
* Project: Technical Test - Junior Front-end Developer - Hybrid / Remote - ProdPad
* Author: Bozena Zawilinska 
* Last update: 18/02/2022
 **********************************/
function custom_scripts() {
  // Enqueue Compiled SCSS
  wp_register_style( 'style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all' );
  wp_enqueue_style( 'style');

  // wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true );
  // wp_enqueue_script( 'app');

  // Enqueue Bootstrap Styles and Scripts 
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' ); 
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js' );
}

add_action('wp_enqueue_scripts', 'custom_scripts');


// Custom patterns
require_once( 'patterns/banner.php' );
require_once( 'patterns/columns.php' );
require_once( 'patterns/hero-title.php' );
require_once( 'patterns/pattern-categories.php');
require_once( 'patterns/top-banner.php' );