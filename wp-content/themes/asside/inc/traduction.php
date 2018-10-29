<?php
add_action( 'after_setup_theme', 'aside_language_theme_support' );
function aside_language_theme_support()
{
   load_theme_textdomain( 'aside', get_template_directory() . '/languages' );
}
