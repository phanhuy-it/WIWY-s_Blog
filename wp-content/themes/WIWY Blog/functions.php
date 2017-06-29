<?php



if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('custom-size-01', 730, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

/* Modify the read more link on the_excerpt() */
 
function et_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '...';
}
add_filter('excerpt_more', 'et_excerpt_more');


?>