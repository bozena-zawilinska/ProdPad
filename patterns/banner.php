<?php

function custom_block_patterns_banner() {

    // Register the pattern.
    register_block_pattern(
		'custom_block_patterns_banner/bz-banner',
		array(
			'title'       => __( 'Banner with image on the right', 'bz-block-patterns' ),
			
			'description' => _x( 'Two columns banner with text on the left and image on the right', 'bz-block-patterns' ),
			
			'content'     => "<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"100%\",\"style\":{\"color\":{\"background\":\"#183b5c\"}}} -->\r\n<div class=\"wp-block-column has-background\" style=\"background-color:#183b5c;flex-basis:100%\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"80%\"} -->\r\n<div class=\"wp-block-column\" style=\"flex-basis:80%\"><!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"1.6rem\"}},\"textColor\":\"white\"} -->\r\n<h3 class=\"has-white-color has-text-color\" id=\"can-t-see-what-you-need-build-it\" style=\"font-size:1.6rem\">Can't see what you need? Build it!</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"textColor\":\"white\"} -->\r\n<p class=\"has-white-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales nisl lobortis nisi mattis iaculis. Duis vitae ante leo. Vestibulum diam neque, fringilla sed urna id, sagittis lacinia eros.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:buttons -->\r\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#59d146\"}},\"className\":\"is-style-fill\"} -->\r\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-background\" style=\"background-color:#59d146\">Find out more</a></div>\r\n<!-- /wp:button --></div>\r\n<!-- /wp:buttons -->\r\n\r\n<!-- wp:columns -->\r\n<div class=\"wp-block-columns\"><!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":21,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-large\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/purple-dot.svg\" alt=\"\" class=\"wp-image-21\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"id\":22,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} -->\r\n<figure class=\"wp-block-image size-large\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/grey-dot.svg\" alt=\"\" class=\"wp-image-22\"/></figure>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column -->\r\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"right\",\"id\":23,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\r\n<div class=\"wp-block-image\"><figure class=\"alignright size-full\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/rainbow-box.svg\" alt=\"\" class=\"wp-image-23\"/></figure></div>\r\n<!-- /wp:image --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
			
			'categories'  => array( 'prodpad' ),
		)
	);
}

add_action( 'init', 'custom_block_patterns_banner' );
