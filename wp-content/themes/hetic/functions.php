<?php

add_action('wp_footer', 'ajout_commentaire_footer');
function ajout_commentaire_footer(){
    echo '<!-- Je suis un commentaire -->';
}


add_action('wp_enqueue_scripts', 'ajout_css_js');

function ajout_css_js(){
  //get_template_directory_uri() => racine du theme
  wp_register_script('main_script_header', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'),'1.1', false);

  wp_enqueue_script('main_script_header');

  wp_register_script('main_script_footer', get_template_directory_uri() . '/assets/scripts/main_footer.js', array('jquery'),'1.1', true);
  wp_enqueue_script('main_script_footer');






}
