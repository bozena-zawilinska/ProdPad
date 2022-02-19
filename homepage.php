<?php
/**
 * Template Name: Homepage
 * Template Post Type: post, page
 *
 * @author Bozena Zawilinska
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 * @version 1.0
 * 
 */


// Add custom body class to the head
add_filter( 'body_class', 'add_body_class');
function add_body_class( $classes ) {

	$classes[] = 'bz-custom-page';
	return $classes;

}

//SEt home class
$setClass="home";

get_header(); ?>

<!-- site container -->
<div class="site-container">
    <div class="wave-container">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#143350" fill-opacity="1" d="M0,288L48,277.3C96,267,192,245,288,250.7C384,256,480,288,576,282.7C672,277,768,235,864,218.7C960,203,1056,213,1152,213.3C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </div>
    <div class="site-inner">
        <?php
        // display page content
        while ( have_posts() ) : the_post(); ?>
        <div class="entry-content">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content -->
        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
    </div><!-- end site-inner-->
</div><!-- end site-container-->

<?php get_footer();
