<?php
/*
Template Name: Portfolio Page
*/
get_header();
?>
<div class="container"><!-- Portfolio - START -->
  <div class="row">
    <div class="recent">
      <button class="btn-primarys">
      <h3><?php the_title(); ?></h3></button>
      <hr>
    </div>
  </div>
</div>
<section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="popup-gallery">
        <?php $loop = new WP_Query( array( 'post_type' => 'portfolio_item', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
          <?php
            $portfolio_image = get_field('portfolio_image');
          ?>
          <div class="col-md-3 image-spacing">
            <a href="<?php echo $portfolio_image['url']; ?>" title="<?php echo $portfolio_image['title']; ?>">
              <img src="<?php echo $portfolio_image['url']; ?>" class="img-responsive" alt="<?php echo $portfolio_image['alt']; ?>">
            </a>
          </div><!-- col -->
        <?php endwhile; wp_reset_query();?>
      </div>
    </div>
  </div>
</section><!-- Portfolio END -->

<?php get_footer(); ?>
