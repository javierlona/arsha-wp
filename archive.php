<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Arsha
 * the page that pulls the similar tags or categories depending on the user
 */

get_header(); ?>


<div class="container">
	<div class="row">
		<main class="col-md-8">
		<?php
		if ( have_posts() ) : ?>


				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</main>
				<aside class="col-md-4">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>


<?php get_footer();
