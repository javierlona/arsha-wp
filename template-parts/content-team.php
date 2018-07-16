<?php
// Advanced Custom Fields
$team_heading = get_field('team_heading');
?>

<div class="container"> <!--Our Team Begin-->
  <div class="row">
    <div class="recent">
      <button class="btn-primarys">
      <h3><?php echo $team_heading; ?></h3></button>
      <hr>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="content">
      <?php $loop = new WP_Query( array( 'post_type' => 'team_member', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while($loop->have_posts()) : $loop->the_post(); ?>

        <div class="col-md-4">
          <div class="wow fadeInUp">
            <div class="align-center">
              <?php
                if(has_post_thumbnail()) {
                  the_post_thumbnail();
                }
              ?>
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_query();?>

    </div><!--content-->
  </div><!--row-->
</div><!--Our Team End-->
