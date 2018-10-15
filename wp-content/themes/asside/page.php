<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-12">
        <p class="mb-5"><?php echo get_the_post_thumbnail( get_the_ID(), 'page-thumb' , array("class"=>"img-fluid")); ?></p>
        <div class="row">
          <div class="col-xl-8 col-lg-12 mx-auto">
<?php

  // boucle WordPress
  if(have_posts())
  {
    while(have_posts())
    {
      the_post();
    ?>
    <h1 class="mb-3"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php
    }
  }

?>
</div>
</div>

</div>
</div>
<div class="container-fluid d-md-none">
  <div class="row">
    <div class="col-md-12">
      <ul class="list-unstyled d-flex probootstrap-aside-social">
        <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
        <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
        <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
      </ul>
      <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
    </div>
  </div>
</div>

</main>

<?php get_footer(); ?>
