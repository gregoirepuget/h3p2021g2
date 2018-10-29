<?php add_action("after_setup_theme","aside_menu");

function aside_menu()
{
  register_nav_menu( "header", "Menu de l'entête" );
  register_nav_menu( "footer", "Menu du footer" );
}
