<?php
function specia_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'specia_custom_header_args', array(
		'default-image'          => '',
		'header-text'            => false,
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
	) ) );
}
add_action( 'after_setup_theme', 'specia_custom_header_setup' );