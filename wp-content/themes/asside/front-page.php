<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="card-columns">
    <?php
    $args =  array(
      'post_type' => 'portfolio',
      'posts_per_page' => -1
    );
    $the_query = new WP_Query( $args );
    if($the_query-> have_posts())
    {
      while($the_query-> have_posts())
      {
        $the_query-> the_post();
      ?>
      <div class="card">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail( 'portfolio-thumb', array(
          'class' =>"card-img-top probootstrap-animate",
          'alt' => get_the_title()
        ) ); ?>
        </a>
      </div>
      <?php
      }

    }
    else{
      echo "Pas d'item dans le portfolio";
    }
     wp_reset_postdata();
    ?>
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
