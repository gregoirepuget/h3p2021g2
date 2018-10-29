<?php get_header();?>
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

<section class="probootstrap-section">
  <div class="container-fluid">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="h1 mb-5 mt-0">Related Projects</h2>
          </div>
        </div>

      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="owl-carousel probootstrap-owl">
          <?php
          $post_id= get_the_ID();
          $args =  array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6,
            'post__not_in' => array($post_id),
            'orderby'        => 'rand',
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

<?php get_footer(); ?>
