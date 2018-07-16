<?php
// Advanced Custom Fields
$about_us_heading = get_field('about_us_heading');
$about_us_image_1 = get_field('about_us_image_1');
$about_us_image_2 = get_field('about_us_image_2');
$about_us_image_3 = get_field('about_us_image_3');
$about_us_excerpt = get_field('about_us_excerpt');
$about_us_excerpt_heading = get_field('about_us_excerpt_heading');

?>

<div class="container"><!--about Begin-->
  <div class="about">
    <div class="row">
      <div class="recent">
        <button class="btn-primarys">
        <h3><?php echo $about_us_heading;?></button>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="row-slider">
        <div class="wow fadeInUp" data-wow-delay="0.2s" data-wow-offset="0">
          <div class="col-lg-6 mar-bot30">
            <div class="responsive-slider" data-autoplay="true" data-spy=
            "responsive-slider">
              <div class="slides" data-group="slides">
                <div style="margin-left: 2em">
                  <div class="slide-bodys" data-group="slide">
                    <ul>
                      <li>
                        <?php if(!empty($about_us_image_1)) : ?>
                          <img alt="<?php echo $about_us_image_1['alt']?>" src="<?php echo $about_us_image_1['url'] ?>">
                        <?php endif; ?>
                      </li>
                      <li>
                        <?php if(!empty($about_us_image_2)) : ?>
                          <img alt="<?php echo $about_us_image_2['alt']?>" src="<?php echo $about_us_image_2['url'] ?>">
                        <?php endif; ?>
                      </li>
                      <li>
                        <?php if(!empty($about_us_image_3)) : ?>
                          <img alt="<?php echo $about_us_image_3['alt']?>" src="<?php echo $about_us_image_3['url'] ?>">
                        <?php endif; ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-offset=
          "0">
            <div class="thumnails">
              <h4><?php echo $about_us_excerpt_heading;?></h4>
              <p><?php echo $about_us_excerpt;?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!--about End-->
