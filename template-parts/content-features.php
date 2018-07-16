<?php
// Advanced Custom Fields
$features_heading = get_field('features_heading');
$feature_1_title = get_field('features_heading');
$feature_1_excerpt = get_field('feature_1_excerpt');
$feature_2_title = get_field('feature_2_title');
$feature_2_excerpt = get_field('feature_2_excerpt');
$feature_3_title = get_field('feature_3_title');
$feature_3_excerpt = get_field('feature_3_excerpt');
$feature_4_title = get_field('feature_4_title');
$feature_4_excerpt = get_field('feature_4_excerpt');
$feature_5_title= get_field('feature_5_title');
$feature_5_excerpt = get_field('feature_5_excerpt');

?>
<div class="container"> <!-- Features Begin-->
  <div class="row">
    <div class="recent">
      <button class="btn-primarys">
      <h3><?php echo $features_heading; ?></h3></button>
      <hr>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="content">
      <div class="col-md-4">
        <div class="wow flipInY" data-wow-delay="0.4s" data-wow-offset="0">
          <div class="align-center">
            <h4><?php echo $feature_1_title; ?></h4>
            <div class="icon">
              <i class="fa fa-desktop fa-3x"></i>
            </div>
            <p><?php echo $feature_1_excerpt; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wow flipInY" data-wow-delay="0.8s" data-wow-offset="0">
          <div class="align-center">
            <h4><?php echo $feature_2_title; ?></h4>
            <div class="icon">
              <i class="fa fa-cloud fa-3x"></i>
            </div>
            <p><?php echo $feature_2_excerpt; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="wow flipInY" data-wow-delay="1.2s" data-wow-offset="0">
          <div class="align-center">
            <h4><?php echo $feature_3_title; ?></h4>
            <div class="icon">
              <i class="fa fa-location-arrow fa-3x"></i>
            </div>
            <p><?php echo $feature_3_excerpt; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="box">
      <div class="col-md-6">
        <div class="wow bounceIn" data-wow-delay="0.8s" data-wow-offset="0">
          <div class="align-center">
            <h4><?php echo $feature_4_title; ?></h4>
            <div class="icon">
              <i class="fa fa-heart-o fa-3x"></i>
            </div>
            <p><?php echo $feature_4_excerpt; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="wow bounceIn" data-wow-delay="1.3s" data-wow-offset="0">
          <div class="align-center">
            <h4><?php echo $feature_5_title; ?></h4>
            <div class="icon">
              <i class="fa fa-laptop fa-3x"></i>
            </div>
            <p><?php echo $feature_5_excerpt; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Features End-->
