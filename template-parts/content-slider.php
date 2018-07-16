<?php
// Advanced Custom Fields
$image_1 = get_field('image_1');
$image_1_text_1 = get_field('image_1_text_1');
$image_1_text_2 = get_field('image_1_text_2');
$image_1_text_3 = get_field('image_1_text_3');

$image_2 = get_field('image_2');
$image_2_text_1 = get_field('image_2_text_1');
$image_2_text_2 = get_field('image_1_text_2');
$image_2_text_3 = get_field('image_2_text_3');

$image_3 = get_field('image_3');
$image_3_text_1 = get_field('image_3_text_1');
$image_3_text_2 = get_field('image_3_text_2');
$image_3_text_3 = get_field('image_3_text_3');

$slider_subheading_large = get_field('slider_subheading_large');
$slider_subheading_tiny = get_field('slider_subheading_tiny');

?>

<div class="slider"> <!--Responsive Slider Begin-->
  <div class="container">
    <div class="row">
      <div class="responsive-slider" data-autoplay="true" data-spy=
      "responsive-slider">
        <div class="slides" data-group="slides">
          <ul>
            <li>
              <div class="slide-body" data-group="slide">
                <?php if(!empty($image_1)) : ?>
                  <img alt="<?php echo $image_1['alt']?>" src="<?php echo $image_1['url'] ?>">
                <?php endif; ?>

                <div class="caption header" data-animate=
                "slideAppearUpToDown" data-delay="500" data-length="300">
                  <button class="btn btn-primary">
                  <h2><?php echo $image_1_text_1; ?></h2></button>
                  <div class="caption-sub" data-animate="slideAppearDownToUp"
                  data-delay="1200" data-length="300">
                    <button class="btn btn-primary">
                    <h4><span><?php echo $image_1_text_2; ?></span></h4></button>
                  </div>
                  <div class="caption-sub" data-animate=
                  "slideAppearLeftToRight" data-delay="900" data-length=
                  "300">
                    <button class="btn btn-primary">
                    <h3><?php echo $image_1_text_3; ?></h3></button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="slide-body" data-group="slide">

                <?php if(!empty($image_2)) : ?>
                  <img alt="<?php echo $image_2['alt']?>" src="<?php echo $image_2['url'] ?>">
                <?php endif; ?>

                <div class="caption header" data-animate=
                "slideAppearDownToUp" data-delay="500" data-length="300">
                  <button aria-pressed="false" class="btn btn-primary"
                  data-toggle="button" type="button">
                  <h2><?php echo $image_2_text_1; ?></h2></button>
                  <div class="caption-sub" data-animate="slideAppearUpToDown"
                  data-delay="800" data-length="300">
                    <button class="btn btn-primary">
                    <h4><span><?php echo $image_2_text_2; ?></span></h4></button>
                  </div>
                  <div class="caption-sub" data-animate=
                  "slideAppearRightToLeft" data-delay="1200" data-length=
                  "300">
                    <button class="btn btn-primary">
                    <h3><?php echo $image_2_text_3; ?></h3></button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="slide-body" data-group="slide">
                <?php if(!empty($image_3)) : ?>
                  <img alt="<?php echo $image_3['alt']?>" src="<?php echo $image_3['url'] ?>">
                <?php endif; ?>

                <div class="caption header" data-animate=
                "slideAppearUpToDown" data-delay="500" data-length="300">
                  <button aria-pressed="false" class="btn btn-primary"
                  data-toggle="button" type="button">
                  <h2><?php echo $image_3_text_1; ?></h2></button>
                  <div class="caption-sub" data-animate=
                  "slideAppearLeftToRight" data-delay="800" data-length=
                  "300">
                    <button class="btn btn-primary">
                    <h4><?php echo $image_3_text_2; ?></h4></button>
                  </div>
                  <div class="caption-sub" data-animate="slideAppearDownToUp"
                  data-delay="1200" data-length="300">
                    <button class="btn btn-primary">
                    <h3><span><?php echo $image_3_text_3; ?></span></h3></button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div><a class="slider-control left" data-jump="prev" href=
        "#"><i class="fa fa-angle-left fa-2x"></i></a> <a class=
        "slider-control right" data-jump="next" href="#"><i class=
        "fa fa-angle-right fa-2x"></i></a>
      </div>
    </div>
  </div>
</div><!-- Responsive slider - END -->

<div class="container"> <!-- Responsive slider Subheadings Begin -->
  <div class="row">
    <div class="col-lg-12">
      <div class="contents">
        <h2><?php echo $slider_subheading_large; ?></h2>
        <p><?php echo $slider_subheading_tiny; ?></p>
      </div>
    </div>
  </div>
</div> <!-- Responsive slider Subheadings END -->
