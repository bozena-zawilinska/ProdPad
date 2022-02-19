<?php
/**
 * ProdPad 2017 Website - Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 * @version 1.0
 */

//SEt home class
$setClass="home";

get_header(); ?>

<!-- HERO -->
<div class="hero bg--brand-gradient">
	<div class="container">
		<div class="padded-content">
			<h1 class="visuallyhidden">Product Management Software</h1>
			<h2 class="h1">Everything you need to build <br/>amazing products</h2>
			<p><a href="https://app.prodpad.com/signup" class="btn btn--primary" id="heroFreeTrial">Start your free trial</a></p>
			<p class="secondary-link"><a href="<?php the_permalink(4622); ?>" id="exploreProdPadBtn">Explore ProdPad</a></p>
		</div>

		<div class="hero__image">
			<img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/homepage-hero.png" alt="Screenshot of ProdPad dashboard"/>
		</div>
	</div>

	<div class="wave-container animated">
		<div class="wave wave--orange"></div>
		<div class="wave wave--pink"></div>
	</div>
</div><!-- /HERO -->


<!-- LOGO BLOCK -->
<section class="wrapper-100 border-bottom border-top">
	<div class="container">
		<div class="logo-block filter--grey">
			<ul class="no-style" id="logoBlockGenerated">

			</ul>
		</div>
	</div>
</section><!-- /LOGO BLOCK -->

<!-- PRODUCT HIGHLIGHTS -->
<article class="product-highlight wrapper-container with-equal-height">

	<div class="wrapper-50 wrapper-50--from-tablet product-highlight__image bg--grey-base ">
		<a href="<?php the_permalink(4624); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/homepage-roadmap.svg" alt="Screenshot of ProdPad roadmaps"/></a>
	</div>

	<div class="wrapper-50 wrapper-50--from-tablet vert-align">
		<div class="product-highlight__content">
			<div class="padded-content until-desktop">

				<h2><a href="<?php the_permalink(4624); ?>">Lead the way forward with your product roadmap</a></h2>
				<p>A lot can happen on the road to product-market fit. Share your product strategy on a powerful lean product roadmap that keeps everyone informed and aligned.</p>
				<p class="secondary-link"><a href="<?php the_permalink(4624); ?>">Learn more</a></p>

				<div class="testimonial">
					<div class="testimonial__logo"> 
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/15five.png" alt="15Five Logo"/>
					</div>

					<blockquote>
						<p>"Customers look forward to calls with me because I'm informed about what's going on. It builds credibility every time I'm able to come to the table and tell them what we have planned next."</p>
					</blockquote>


					<div class="testimonial__author">
						<div class="avatar">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/testimonials/priscilla-zorrilla.jpg" alt="Priscilla Zorrilla"/>
						</div>

						<p><strong>Priscilla Zorrilla, Customer Success Manager @ 15Five</strong></p>
					</div>
				</div>
			</div>	
		</div>
	</div>
</article>

<article class="product-highlight wrapper-container with-equal-height">

	<div class="wrapper-50 wrapper-50--from-tablet product-highlight__image bg--grey-base ">
		<a href="<?php the_permalink(4625); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/homepage-ideas.svg" alt="Screenshot of ProdPad ideas"/></a>
	</div>

	<div class="wrapper-50 wrapper-50--from-tablet vert-align">
		<div class="product-highlight__content">
			<div class="padded-content until-desktop">

				<h2><a href="<?php the_permalink(4625); ?>">Prioritize the right ideas for your business</a></h2>
				<p>Pull together internal discussions, customer feedback and key product context to help you make high-impact product decisions.</p>
				<p class="secondary-link"><a href="<?php the_permalink(4625); ?>">Learn more</a></p>

				<div class="testimonial">
					<div class="testimonial__logo"> 
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/elsevier.png" alt="Elsevier Logo"/>
					</div>

					<blockquote>
						<p>"I know my organisation has great ideas about how to improve our products, but my question has always been "yes, but where are they?!" The great thing about ProdPad is it integrates all the critical fuzzy front end stuff into one place – it captures feedback, hosts ideas for discussion, and is the single source of truth for our future plans. It's been a revelation for us."</p>
					</blockquote>

					<div class="testimonial__author">
						<div class="avatar">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/testimonials/matt-stratford.jpg" alt="Matt Stratford"/>
						</div>

						<p><strong>Matthew Stratford, Senior Product Manager @ Elsevier</strong></p>
					</div>
				</div>
			</div>	
		</div>
	</div>
</article>

<article class="product-highlight wrapper-container with-equal-height">

	<div class="wrapper-50 wrapper-50--from-tablet product-highlight__image bg--grey-base ">
		<a href="<?php the_permalink(4626); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/homepage-customer-feedback.svg" alt="Screenshot of ProdPad customer feedback"/></a>
	</div>

	<div class="wrapper-50 wrapper-50--from-tablet vert-align">
		<div class="product-highlight__content">
			<div class="padded-content until-desktop">

				<h2><a href="<?php the_permalink(4626); ?>">Understand what your customers really want</a></h2>
				<p>Bring in customer feedback and suggestions across all your channels to help you identify the problems you really need to solve.</p>
				<p class="secondary-link"><a href="<?php the_permalink(4626); ?>">Learn more</a></p>

				<div class="testimonial">
					<div class="testimonial__logo"> 
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/time-doctor.svg" alt="Time Doctor Logo"/>
					</div>

					<blockquote>
						<p>"Before we started using ProdPad, all of our customer feedback was "organized" in dozens of spreadsheets and other tools. Now everything is actually organized in the same place."</p>
					</blockquote>

					<div class="testimonial__author">

						<div class="avatar">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/cms-images/testimonials/adam-wintle.jpg" alt="Adam Wintle"/>
						</div>

						<p><strong>Adam Wintle, Product Manager @ Time Doctor</strong></p>
					</div>
				</div>
			</div>	
		</div>
	</div>
</article>
<!-- /PRODUCT HIGHLIGHTS -->

<!-- MINOR BANNER -->
<section class="banner-minor ">
	<div class="container">
		<div class="padded-content  ">

			<div class="banner-minor__content">
				<h3>Want to see what else we've got up our sleeves?</h3>
				<p class="secondary-link"><a href="<?php the_permalink(4622); ?>">See all features</a></p>

			</div>

		</div>
	</div>
</section>
<!-- /MINOR BANNER -->

<!-- /AS SEEN ON BANNER -->
<section class="banner-minor banner-minor--seen-on 	bg--grey-base
	">
	<div class="container">
		<div class="padded-content vertical">

			<h3 class="neutral-neg2">As seen on</h3> 

			<div class="logo-block">
				<ul class="no-style">
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/tnw.svg" alt="The Next Web"/>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/the-sunday-times.svg" alt="The Sunday Times"/>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/invision.svg" alt="inVision"/>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/intercom.svg" alt="Intercom"/>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/trello.svg" alt="Trello"/>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/mind-the-product.svg" alt="Mind the Product"/>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section><!-- /AS SEEN ON BANNER -->


<!-- SIGN UP BANNER -->
 <section class="banner-minor banner-minor--signup">
	<div class="container">
		<div class="padded-content padded-content--large">
			<div class="banner-minor__image">
				<div class="banner-minor__image-bg"></div>
				<div class="note">
					<p>Ideas just waiting to be captured</p>
				</div>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/illustrations/globe.svg" alt="Globe Illustration"/>
			</div>
			<div class="banner-minor__content">
				<h3> Join thousands of companies building amazing <br/>products with ProdPad</h3>
				<p class="neutral-neg2 text--small margin-bottom">No credit card required.</p>
				<a href="https://app.prodpad.com/signup" class="btn btn--primary" id="bannerFreeTrialBtn">Start your free trial</a>
			</div>
		</div>
	</div>
</section>
<!-- /SIGN UP BANNER -->

</div><!-- end main-content-->

<script>
document.addEventListener('DOMContentLoaded', function(){
	var imgArray = ['spotify.svg','airbus.svg','ling.svg','amazon.svg','telefonica.svg','economist.svg','rackspace.svg','homedepot.svg','runkeeper.svg','citizenlab.svg','automattic.svg','elsevier.svg','verifone.svg','7plus.svg','siemens.svg','bose.svg'];
	function randOrd(){return (Math.round(Math.random())-0.5); }
	imgArray.sort(randOrd);
	var pic1 = imgArray[0]; // first random image
	var pic2 = imgArray[1]; // second random image
	var pic3 = imgArray[2]; // third random image
	var pic4 = imgArray[3]; // fourth random image
	var pic5 = imgArray[4]; // fifth random image
	var pic6 = imgArray[5]; // sixth random image

	for (i = 0; i < 6; i++) 
	document.getElementById("logoBlockGenerated").innerHTML +=  "<li><img alt='Featured Logo' src='<?php bloginfo('template_directory'); ?>/assets/images/logos/" + imgArray[i] + "'/></li>";
}, false);
</script>

<footer>
	<div class="wave-container">
		<div class="wave wave--green"></div>
		<div class="wave wave--blue"></div>
	</div>


<?php get_footer();