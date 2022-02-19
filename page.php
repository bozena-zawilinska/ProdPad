<?php
/**
 * ProdPad 2017 Website - blog Article (aka Default Page)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="wrapper-100 border-bottom">
	<div class="container">
	
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
				<p class="breadcrumb">','</p>
			');
			}
		?>

		<div class="wysiwyg-content">

			<div class="padded-content wrapper-100">
				
				<?php if (have_posts()) : while (have_posts()) : the_post();?>

					<h1 class="content--center"><?php echo get_the_title($ID); ?></h1>

					<?php the_content(); ?>
				
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
</div><!-- end main-content-->

<footer>
<?php get_footer();

