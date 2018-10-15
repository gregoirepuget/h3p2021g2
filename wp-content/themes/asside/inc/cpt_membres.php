<?php
add_action( 'init', 'ajout_custom_type_membre' );

function ajout_custom_type_membre()
{

$post_type = "team";
$labels = array(
        'name'               => 'Membres',
        'singular_name'      => 'Membre',
        'all_items'          => 'Tous les membres',
        'add_new'            => 'Ajouter un membre',
        'add_new_item'       => 'Ajouter un membre',
        'edit_item'          => "Editer le membre",
        'new_item'           => 'Nouveau membre',
        'view_item'          => "Voir le membre",
        'search_items'       => 'Chercher un membre',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Membre Parent',
        'menu_name'          => 'Membre',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

  register_post_type($post_type, $args );

  $taxonomy = "profil";
  $object_type = array("team");
  $args = array(
          'label' => __( 'Profil' ),
          'rewrite' => array( 'slug' => 'profil' ),
          'hierarchical' => true,
  );
  register_taxonomy( $taxonomy, $object_type, $args );

}
