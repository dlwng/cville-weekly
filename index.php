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

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main-container" role="main">

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



			$threenews = new WP_Query( array (
				'category_name' => 'News', 
				'posts_per_page' => 3,
			));

			$threearts = new WP_Query( array (
				'posts_per_page' => 3,
				'category_name' => 'Arts'
			));

			$threeliving = new WP_Query( array (
				'posts_per_page' => 3,
				'category_name' => 'Living'
			));

			?>

			<h1 class="Newscolor">News</h1>
			<div class="underline"></div>

			<?php
			while ( $threenews -> have_posts() ) : $threenews -> the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-preview-left', get_post_format() );

			endwhile;
			?>

			<h1 class="Artscolor">Arts</h1>

			<?php
			while ( $threearts -> have_posts() ) : $threearts -> the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-preview-right', get_post_format() );

			endwhile;
			?>

			<h1 class="Livingcolor">Living</h1>

			<?php
			while ( $threeliving -> have_posts() ) : $threeliving -> the_post();
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
