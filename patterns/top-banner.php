<?php

function custom_block_patterns_top_banner() {

    // Register the pattern.
    register_block_pattern(
		'custom_block_patterns_top_banner/bz-header-text',
		array(
			'title'       => __( 'Top banner with a header and an image', 'bz-block-patterns' ),
			
			'description' => _x( 'Header with an image below', 'bz-block-patterns' ),
			
			'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"white\",\"className\":\"hero-heading\"} -->\r\n<h2 class=\"has-text-align-center hero-heading has-white-color has-text-color\" id=\"unlock-the-full-potential-of-prodpad-1\">Unlock the full potential of ProdPad</h2>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"textColor\":\"white\",\"className\":\"hero-heading\"} -->\r\n<h3 class=\"has-text-align-center hero-heading has-white-color has-text-color\" id=\"with-apps-integrations-and-extensions-1\">with <strong>Apps</strong>, <strong>Integrations</strong> and <strong>Extensions</strong></h3>\r\n<!-- /wp:heading --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"banner-img\"} -->\r\n<div class=\"wp-block-column banner-img\"><!-- wp:image {\"id\":25,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-full\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/rainbow-door.svg\" alt=\"\" class=\"wp-image-25\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
			
			'categories'  => array( 'prodpad' ),
		)
	);
}

add_action( 'init', 'custom_block_patterns_top_banner' );
