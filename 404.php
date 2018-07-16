<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Arsha
 */

get_header(); ?>

<div class="container"><!-- Portfolio - START -->
  <div class="row">
    <div class="recent">
      <button class="btn-primarys">
      <h3>Page not found</h3></button>
			<?php
				wp_list_categories(array(
					'orderby' => 'count',
					'order' => 'DESC',
					'show_count' => 1,
					'title_li' => '',
					'number' => 10,
				));
			?>
      <hr>
			<?php the_widget('WP_Widget_Pages','title=Our Archives','before_title=<h4>&after_title=</h4>'); ?>
			<hr>
			<p>head home<a href="<?php echo esc_url(home_url('/')); ?>">Home Page</a></p>
    </div>
  </div>
</div>

<?php
get_footer();
