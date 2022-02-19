<?php

function custom_block_patterns_columns() {

    // Register the pattern.
    register_block_pattern(
		'custom_block_patterns_columns/bz-columns',
		array(
			'title'       => __( 'Integration Columns', 'bz-block-patterns' ),
			
			'description' => _x( 'Set of three columns with an image, title, text and link', 'bz-block-patterns' ),
			
			'content'     => "<!-- wp:columns {\"align\":\"wide\",\"className\":\"d-flex f-wrapper\"} -->\r\n<div class=\"wp-block-columns alignwide d-flex f-wrapper\"><!-- wp:column {\"verticalAlignment\":\"top\",\"style\":{\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"backgroundColor\":\"white\",\"textColor\":\"black\",\"className\":\"round-borders\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-top round-borders has-black-color has-white-background-color has-text-color has-background has-link-color\" style=\"padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:image {\"align\":\"center\",\"id\":17,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"pin-top\"} -->\r\n<div class=\"wp-block-image pin-top\"><figure class=\"aligncenter size-large\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/slack.svg\" alt=\"Slack\" class=\"wp-image-17\"/></figure></div>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"1.6rem\"}}} -->\r\n<h3 class=\"has-text-align-center\" id=\"slack\" style=\"font-size:1.6rem\">Slack</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"lineHeight\":\"1.5\"}},\"fontSize\":\"normal\"} -->\r\n<p class=\"has-text-align-center has-normal-font-size\" style=\"line-height:1.5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales nisl lobortis nisi mattis iaculis.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"lineHeight\":\"1.5\"}},\"className\":\"more-link\",\"fontSize\":\"normal\"} -->\r\n<p class=\"has-text-align-center more-link has-normal-font-size\" style=\"line-height:1.5\"><a href=\"http://prodpad.com\" data-type=\"URL\" data-id=\"prodpad.com\" target=\"_blank\" rel=\"noreferrer noopener\">Find out more</a></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"top\",\"style\":{\"color\":{\"text\":\"#000000\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"backgroundColor\":\"white\",\"className\":\"round-borders\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-top round-borders has-white-background-color has-text-color has-background has-link-color\" style=\"color:#000000;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:image {\"align\":\"center\",\"id\":19,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"pin-top\"} -->\r\n<div class=\"wp-block-image pin-top\"><figure class=\"aligncenter size-large\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/jira-software.svg\" alt=\"Jira Software\" class=\"wp-image-19\"/></figure></div>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"1.6rem\"}}} -->\r\n<h3 class=\"has-text-align-center\" id=\"jira-software\" style=\"font-size:1.6rem\">Jira Software</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"lineHeight\":\"1.5\"}},\"fontSize\":\"normal\"} -->\r\n<p class=\"has-text-align-center has-normal-font-size\" style=\"line-height:1.5\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales nisl lobortis nisi mattis iaculis.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"lineHeight\":\"1.5\"}},\"className\":\"more-link\",\"fontSize\":\"normal\"} -->\r\n<p class=\"has-text-align-center more-link has-normal-font-size\" style=\"line-height:1.5\"><a href=\"http://prodpad.com\" data-type=\"URL\" data-id=\"prodpad.com\" target=\"_blank\" rel=\"noreferrer noopener\">Find out more</a></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column -->\r\n\r\n<!-- wp:column {\"verticalAlignment\":\"top\",\"style\":{\"color\":{\"text\":\"#000000\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#000000\"}}},\"spacing\":{\"padding\":{\"top\":\"2em\",\"right\":\"2em\",\"bottom\":\"2em\",\"left\":\"2em\"}}},\"backgroundColor\":\"white\",\"className\":\"round-borders\"} -->\r\n<div class=\"wp-block-column is-vertically-aligned-top round-borders has-white-background-color has-text-color has-background has-link-color\" style=\"color:#000000;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em\"><!-- wp:image {\"align\":\"center\",\"id\":20,\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"className\":\"pin-top\"} -->\r\n<div class=\"wp-block-image pin-top\"><figure class=\"aligncenter size-large\"><img src=\"http://prodpad.local/wp-content/uploads/2022/02/roadmap-publishing.svg\" alt=\"Roadmap Publishing\" class=\"wp-image-20\"/></figure></div>\r\n<!-- /wp:image -->\r\n\r\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"1.6rem\"}}} -->\r\n<h3 class=\"has-text-align-center\" id=\"roadmap-publishing\" style=\"font-size:1.6rem\">Roadmap Publishing</h3>\r\n<!-- /wp:heading -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"normal\"} -->\r\n<p class=\"has-text-align-center has-normal-font-size\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales nisl lobortis nisi mattis iaculis. </p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"more-link\",\"fontSize\":\"normal\"} -->\r\n<p class=\"has-text-align-center more-link has-normal-font-size\"><a href=\"http://prodpad.com\" data-type=\"URL\" data-id=\"prodpad.com\" target=\"_blank\" rel=\"noreferrer noopener\">Find out more</a></p>\r\n<!-- /wp:paragraph --></div>\r\n<!-- /wp:column --></div>\r\n<!-- /wp:columns -->",
			
			'categories'  => array( 'prodpad' ),
		)
	);
}

add_action( 'init', 'custom_block_patterns_columns' );
