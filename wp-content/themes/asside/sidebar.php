<aside class="probootstrap-aside js-probootstrap-aside">
  <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
  <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">

    <a href="index.html" class="mb-2 d-block probootstrap-logo"><?php bloginfo( 'title'); ?></a>
    <p class="mb-0"><?php bloginfo( 'description'); ?></p>
  </div>
  <div class="probootstrap-overflow">

    <nav class="probootstrap-nav">
    <?php
    $args=array(
        'theme_location' => 'header', // nom du slug
        'menu' => 'header_fr', // nom à donner cette occurence du menu
        'menu_class' => 'header_menu', // class à attribuer au menu
        'menu_id' => 'menu_id' // id à attribuer au menu
        // voir les autres arguments possibles sur le codex
    );
    wp_nav_menu($args);

     ?>
     </nav>
    <!--
      <ul>
        <li class="probootstrap-animate active" data-animate-effect="fadeInLeft"><a href="index.html">Home</a></li>
        <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="about.html">About</a></li>
        <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="services.html">Services</a></li>
        <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="portfolio.html">Portfolio</a></li>
        <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="contact.html">Contact</a></li>
      </ul>-->

    <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
      <ul class="list-unstyled d-flex probootstrap-aside-social">
        <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
        <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
        <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
      </ul>
      <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved.</p>
        <ul><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>
    </footer>
  </div>
</aside>
