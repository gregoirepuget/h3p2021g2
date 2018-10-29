<?php
add_action( 'init', 'ajout_custom_type_porfolio' );

function ajout_custom_type_porfolio()
{

$post_type = "portfolio";
$labels = array(
        'name'               => 'Portfolios',
        'singular_name'      => 'Portfolio',
        'all_items'          => __("All portfolio",'aside'),
        'add_new'            => __("Add portfolio",'aside'),
        'add_new_item'       => __("Add portfolio",'aside'),
        'edit_item'          => __("Edit portfolio",'aside'),
        'new_item'           => __("New portfolio",'aside'),
        'view_item'          => __("Read portfolio",'aside'),
        'search_items'       => __("Search portfolio",'aside'),
        'not_found'          => __("No result",'aside'),
        'not_found_in_trash' => __("No result",'aside'),
        'parent_item_colon'  => __("portfolio parent",'aside'),
        'menu_name'          => 'Portfolio',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-gallery',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

  register_post_type($post_type, $args );


  $taxonomy = "theme";
  $object_type = array("portfolio");
  $args = array(
          'label' => __( 'Thématique' ),
          'rewrite' => array( 'slug' => 'theme' ),
          'hierarchical' => true,
  );
  register_taxonomy( $taxonomy, $object_type, $args );

}
