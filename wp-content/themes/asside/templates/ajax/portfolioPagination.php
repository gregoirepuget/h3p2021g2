<?php
$args =  array(
  'post_type' => 'portfolio',
  'posts_per_page' => 6,
  'paged' => $pagination
);
$the_query = new WP_Query( $args );
if($the_query-> have_posts())
{
  while($the_query-> have_posts())
  {
    $the_query-> the_post();
  ?>
  <div class="card img-loaded">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <?php the_post_thumbnail( 'portfolio-thumb', array(
      'class' =>"card-img-top ",
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
