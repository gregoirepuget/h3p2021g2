<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="card-columns">
    <?php
    $args =  array(
      'post_type' => 'portfolio',
      'posts_per_page' => 6
    );
    $the_query = new WP_Query( $args );
    if($the_query-> have_posts())
    {
      while($the_query-> have_posts())
      {
        $the_query-> the_post();
      ?>
      <div class="card  img-loaded">
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
      echo __( "No item on portfolio", 'aside' );
    }
     wp_reset_postdata();
    ?>
  </div>
  <div>
    <a href="#" class="readMore" data-page="1" title="<?php _e("Read more", "aside"); ?>"><?php _e("Read more", "aside"); ?></a>
  </div>
  <div class="container-fluid d-md-none">
    <div class="row">
      <div class="col-md-12">
        <ul class="list-unstyled d-flex probootstrap-aside-social">
          <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
          <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
          <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
        </ul>
        <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br>
          <?php _e('All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a>', "aside"); ?> </p>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
