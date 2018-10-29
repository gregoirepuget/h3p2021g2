<?php
add_action( 'wp_ajax_ajax-portfolioMore', 'aside_portfolioMore' );
add_action( 'wp_ajax_nopriv_ajax-portfolioMore', 'aside_portfolioMore' );

function aside_portfolioMore()
{
  global $wpdb, $_POST;

  $pagination = $_POST['pagination'];

  include(TEMPLATE_PATH.'/ajax/portfolioPagination.php');

  die();
}
