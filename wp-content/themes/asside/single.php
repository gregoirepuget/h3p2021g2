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

if( have_rows('content') ):

     // loop through the rows of data
    while ( have_rows('content') ) : the_row();

        include( TEMPLATE_PATH.'/flexible/'.get_row_layout().'.php');
        //include(TEMPLATE_PATH./fleible/get_row_layout().'php');

    endwhile;
endif;
?>
</div>

<section class="probootstrap-section">
  <div class="container-fluid">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="h1 mb-5 mt-0">The Team</h2>
          </div>
        </div>

      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="owl-carousel probootstrap-owl">
          <?php
          $args =  array(
            'post_type' => 'team',
            'posts_per_page' => -1
          );
          $the_query = new WP_Query( $args );
          if($the_query-> have_posts())
          {
            while($the_query-> have_posts())
            {
              $the_query-> the_post();
            ?>

            <div class="item">
              <?php the_post_thumbnail( 'member-thumb', array(
                'class' =>"img-fluid",
                'alt' => get_the_title()
              ) ); ?>
              <div class="p-4 border border-top-0">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </div>

            <?php
            }

          }
          else{
            echo "Pas d'item dans le portfolio";
          }
           wp_reset_postdata();
          ?>

          <!-- <div class="item">
            <img src="images/person_1.jpg" class="img-fluid" alt="Free Template by uicookies.com">
            <div class="p-4 border border-top-0">
              <h4>James Carl</h4>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div> -->

        </div>
      </div>
    </div>



  </div>
</section>

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
