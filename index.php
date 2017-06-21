<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- while loop starts -->
		<!-- get template part ( new thing you make) -->
		<!-- how to change the loop to display fewer posts -->
		<!-- while loop ends -->

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;



			// $threenews = new WP_Query( array (
			// 	'$post_count' => 3,
			// 	'$category_name' => 'News'
			// );

			// $threearts = new WP_Query( array (
			// 	'$post_count' => 3,
			// 	'$category_name' => 'Arts'
			// );

			// $threeliving = new WP_Query( array (
			// 	'$post_count' => 3,
			// 	'$category_name' => 'Living'
			// );

			// $threeevents = new WP_Query( array (
			// 	'$post_count' => 3,
			// 	'$category_name' => 'Events'
			// );

			
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-preview-right', get_post_format() );

			endwhile;

			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-preview-left', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
