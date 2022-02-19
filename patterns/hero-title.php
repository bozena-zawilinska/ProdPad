<?php

function custom_block_patterns() {

    // Register the pattern.
    register_block_pattern(
		'custom_block_patterns/bz-header-text',
		array(
			'title'       => __( 'Homepage hero title', 'bz-block-patterns' ),
			
			'description' => _x( 'Centered title with text', 'bz-block-patterns' ),
			
			'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"className\":\"hero-heading\"} -->\r\n<h2 class=\"has-text-align-center hero-heading\" id=\"unlock-the-full-potential-of-prodpad-1\">Unlock the full potential of ProdPad</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"hero-heading\"} -->\r\n<h3 class=\"has-text-align-center hero-heading\" id=\"with-apps-integrations-and-extensions-1\">with <strong>Apps</strong>, <strong>Integrations</strong> and <strong>Extensions</strong></h3>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
			
			'categories'  => array( 'prodpad' ),
		)
	);
}

add_action( 'init', 'custom_block_patterns' );
