<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'page-thumb', 1700, 1133, true );

    add_image_size('portfolio-thumb',600, 999999, false);
}
