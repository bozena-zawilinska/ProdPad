<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 * @version 1.0
 */

get_header('blog'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
			


<!-- HERO -->
<div class="hero <?php the_field('blog_colour'); ?>">
	<div class="container">
		
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
				<div class="breadcrumb mobile-margin wrapper-100"><a href="/blog">Blog</a>','</div>
			');
			}
		?>


		<div class="wrapper-100 mobile-margin">
			<div class="avatar-block">
				<?php if( get_field('blog_icon') ): ?>
					<img src="<?php the_field('blog_icon'); ?>" alt="Blog post icon"/>
				<?php endif; ?>
			
				<h1><?php echo the_title(); ?></h1>

				<p class="date"><?php the_date(); ?></p>
				<p><span class="category"><?php the_category(' '); ?></span></p>
			</div>
		</div>
	</div>
	
	<div class="wave-container">
		<div class="wave wave--grey"></div>
		<div class="wave wave--white"></div>
	</div>

</div>
<!-- /HERO -->

<!-- RICH CONTENT -->
<section class="section-margin-bottom wrapper-100">
	<div class="wysiwyg-content">
		<div class="padded-content horizontal wrapper-100">
			<?php the_content(); ?>
	
	<div class="comment list">
	    <?php wp_list_comments( array( 'style' => 'div' ) ); ?>
	</div>

			</div>
	</div>
</section>

<div class="wrapper-100 mobile-margin article-footer">
	<div class="container">
			<div class="share-bar">
				<p class="text--small">Share to:</p>
				<ul class="sharing-links no-style">
				
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/share-facebook.svg" alt="Facebook Icon"/></a></li>
   	<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/share-twitter.svg" alt="Twitter Icon"/></a></li>
					<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/share-linkedin.svg" alt="Linkedin Icon"/></a></li>
				</ul>
			</div>

			<ul class="tags no-style"> 
				<?php the_tags( '<li><span class="tag">', '</span></li><li><span class="tag">', '</span></li>' ); ?>
			</ul>

			<div class="avatar-block section-margin-bottom">
				<div class="avatar">
					<? echo get_avatar( get_the_author_meta('user_email'), $size = '80'); ?>
				</div>
				<p class="avatar-title"><?php the_author_posts_link(); ?></p>
				<p><?php the_author_meta('description'); ?></p>
			</div>
	</div>
</div>


<div class="wrapper-100 mobile-margin">
<?php comments_template(); ?>
</div>


<!-- /RICH CONTENT -->

<?php endwhile; endif; ?>

<?php
	// Reference : http://codex.wordpress.org/Function_Reference/wp_get_post_tags
	// we are using this function to get an array of tags assigned to current post
	$tags = wp_get_post_tags($post->ID);
	 
	if ($tags) {
		
	    $first_tag = $tags[0]->term_id; // we only need the id of first tag
	 
	    // arguments for query_posts : http://codex.wordpress.org/Function_Reference/query_posts
	    $args = array(
	            'tag__in' => array($first_tag),
	            'post__not_in' => array($post->ID),
	            'showposts' => 3, // these are the number of related posts we want to display
	            'ignore_sticky_posts' => 1 // to exclude the sticky post
	            );
	 
	    // WP_Query takes the same arguments as query_posts
	    $related_query = new WP_Query($args);
	 
	    if ($related_query->have_posts()) {
	    ?>

<!-- RELATED ARTICLES -->
<div class="wrapper-100 bg--grey-base">
<section class="wrapper-100 mobile-margin">
	<div class="container">
		<div class="padded-content vertical ">
			<h3 class="content--center">Related articles</h3>
			<ul class="blog-listing wrapper-container with-equal-height">
				
 				<?php
	            while ($related_query->have_posts()) : $related_query->the_post();
	            ?>

				<li class="bg--white border-radius--large">	
					<article class="post">
						<div class="post__image <?php the_field('blog_colour'); ?>">
							<?php if( get_field('blog_icon') ): ?>
								<a href="<?php the_permalink() ?>"><img src="<?php the_field('blog_icon'); ?>" alt="Blog post icon"/></a>
							<?php endif; ?>
							<span class="category"><?php the_category(' '); ?></span>
						</div>
						<div class="post__content bg--white">
							<div class="padded-content">
								<h3><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h3>

								<div class="post__author vert-align vert-align--left">
									<div class="avatar">
										 <? echo get_avatar( get_the_author_meta('user_email'), $size = '32'); ?>
									</div>
									<div class="author-details">
										<p>
											<?php the_author_posts_link(); ?>
										</p>
										<p class="date"><?php the_date(); ?></p>
									</div>
								</div>

								<p><?php echo get_excerpt(180); ?></p>

									<a href="<?php the_permalink() ?>" class="btn btn--block btn--outline">Read article</a>
							</div>
						</div>

					</article>
				</li>
				
				
				<?php
	            endwhile;
	            ?>
	            <?php }
	   			 wp_reset_query(); // to reset the loop : http://codex.wordpress.org/Function_Reference/wp_reset_query
				}
				?>


			</ul>
		</div>
	</div>
</section>	
<!-- /RELATED ARTICLES -->
</div>


<?php get_footer('blog');