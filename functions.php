<?php

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* Change Excerpt length */
function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
    function wpex_mce_text_sizes( $initArray ){
        $initArray['fontsize_formats'] = "0.25rem 0.5rem 0.75rem 1rem 1.25rem 1.5rem 1.75rem 2rem 2.25rem 2.5rem 2.75rem 3rem 3.25rem 3.5rem 3.75rem 4rem 4.25rem 4.5rem 4.75rem 5rem 5.25rem 5.5rem 5.75rem 6rem";
        return $initArray;
    }
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

?>