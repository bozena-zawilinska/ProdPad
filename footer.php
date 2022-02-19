<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 * @version 1.0
 */

?>

<div class="wrapper-100 bg--white">
	<div class="container">
		<div class="wrapper-container with-margin padded-content until-desktop">
			<div class="wrapper-40">
				<div class="logo">
		            <a href="/">
			             <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-full.svg" alt="ProdPad Logo SVG"/>
		            </a>
		        </div>    
		        <p class="margin-bottom">Everything you need to build amazing products.</p>
		        <p><a href="https://app.prodpad.com/signup" class="btn btn--primary margin-bottom" id="footerFreeTrialBtn">Start your free trial</a></p>
		        <ul class="social-icons margin-bottom">
		        	<li><a href="https://twitter.com/prodpad" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/social-twitter.svg" alt="Twitter Logo"/></a></li>
		        	<li><a href="https://www.facebook.com/ProdPad/" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/social-facebook.svg" alt="Facebook Logo"/></a></li>
		        	<li><a href="#"><a href="https://www.linkedin.com/company/prodpad" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/social-linkedin.svg" alt="LinkedIn Logo"/></a></li>
		        	<li><a href="https://www.youtube.com/channel/UCXHOx5Ed-6sHPujypIlhdMA" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/social-youtube.svg" alt="Youtube Logo"/></a></li>
		        </ul>
		    </div>
			<div class="wrapper-60 primary-footer">
			    <div class="wrapper-container with-margin">
			    	<div class="wrapper-25 wrapper-25--from-tablet">
			    		<h4>ProdPad</h4>
			    		
		 				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_prodpad' )); ?>
			    	</div>
			    	<div class="wrapper-25 wrapper-25--from-tablet">
			    		<h4>About</h4>
			    		
		 				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_about' )); ?>
			    	</div>
			    	<div class="wrapper-25 wrapper-25--from-tablet">
			    		<h4>Resources</h4>

		 				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_resources' )); ?>

			    	</div>
			    	<div class="wrapper-25 wrapper-25--from-tablet">
			    		<h4>Features</h4>

		 				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu_features' )); ?>

			    	</div>
			    </div>
		    </div>
	    </div>
	</div>
	<div class="secondary-footer">
		<div class="container">
			<div class="padded-content until-desktop">
			
		 	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>

			<p>Made with <img src="<?php bloginfo('template_directory'); ?>/assets/images/icons/made-with-love.svg" alt="love"/> by product managers</p>
		
			</div>
		</div>
	</div>
</div>
</footer>

<!-- Roadmap guide and handy guide -->
<script type="text/javascript">
  var _dcq = _dcq || [];
  var _dcs = _dcs || {};
  _dcs.account = '9198433';

  (function() {
    var dc = document.createElement('script');
    dc.type = 'text/javascript'; dc.async = true;
    dc.src = '//tag.getdrip.com/9198433.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(dc, s);
  })();
</script>

<?php wp_footer(); ?>

</body>
</html>