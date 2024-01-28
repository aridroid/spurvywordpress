<?php

/* Block Patterns - Removals */
remove_theme_support( 'core-block-patterns' );
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/* Block Patterns - Categories */
register_block_pattern_category( 'pages', array( 'label' => _x( 'Full Pages', 'Block Pattern Category', 'bergify' ) ) );
