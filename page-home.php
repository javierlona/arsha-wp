<?php
/*
 Template Name: Home Page
 */

get_header(); ?>

<?php get_template_part('template-parts/content','slider');?>
<?php get_template_part('template-parts/content','features');?>
<?php get_template_part('template-parts/content','about-us');?>
<?php get_template_part('template-parts/content','team');?>

<div class="container">
  <div class="row">
    <hr>
  </div>
</div>

<?php get_footer();
