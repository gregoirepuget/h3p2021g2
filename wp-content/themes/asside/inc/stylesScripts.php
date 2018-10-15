<?php

function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('main_script', get_template_directory_uri() . '/scripts/main.js', array('jquery'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('main_script');

// enregistrement d'un nouveau style
wp_register_style( 'google_font', 'https://fonts.googleapis.com/css?family=Work+Sans' );
wp_enqueue_style( 'google_font' );

wp_register_style( 'bootstrap', CSS_URL . '/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap' );

wp_register_style( 'open-iconic-bootstrap', CSS_URL . '/open-iconic-bootstrap.min.css' );
wp_enqueue_style( 'open-iconic-bootstrap' );

wp_register_style( 'owl.carousel', CSS_URL . '/owl.carousel.min.css' );
wp_enqueue_style( 'owl.carousel' );

wp_register_style( 'owl.theme.default', CSS_URL . '/owl.theme.default.min.css' );
wp_enqueue_style( 'owl.theme.default' );

wp_register_style( 'icomoon', CSS_URL . '/icomoon.min.css' );
wp_enqueue_style( 'icomoon' );

wp_register_style( 'animate', CSS_URL . '/animate.min.css' );
wp_enqueue_style( 'animate' );

wp_register_style( 'style', CSS_URL . '/style.css' );
wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

/*
<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>

<script src="js/main.js"></script>

*/
