<?php

function register_my_pattern_categories() {
    // Register category.
    register_block_pattern_category(
        'prodpad',
        array( 'label' => __( 'ProdPad', 'bz-block-patterns' ) )
    );
}
 
add_action( 'init', 'register_my_pattern_categories' );