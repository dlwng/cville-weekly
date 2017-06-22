<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

get_header(); ?> 

	<div id="primary" class="content-area main-container">
		<main id="content" class="site-main" role="main">

			<?php 
				// Check if there are any posts to display
			if ( have_posts() ) : ?>

			<header class="cat-header">
				<h1 class="cat-title cat-title-<?php echo single_cat_title( "", true );?> <?php echo single_cat_title( "", true );?>color""><?php single_cat_title( "", true ); ?></h1>


				<?php
					// Display optional category description
				if ( category_description() ) : ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header>

			<?php

			$top_id = [];

			$mainarticle = new WP_Query( array (
				'posts_per_page' => 1,
				'category_name' => single_cat_title( "", false )
				));

			while ( $mainarticle -> have_posts() ) : $mainarticle -> the_post();
				get_template_part( 'template-parts/content-hero', get_post_format() );
				array_push($top_id, get_the_ID());
			endwhile;

			$cat_post = new WP_Query( array (
				'post__not_in' => $top_id,
				'category_name' => single_cat_title( "", false )
			));

					// The Loop
			while ( $cat_post -> have_posts() ) : $cat_post -> the_post();
				get_template_part( 'template-parts/cat-list', get_post_format() );
			endwhile; 

		else: ?>
			<p>Sorry, no posts matched your criteria.</p>


		<?php endif; ?> 




		</main>	
	</div>
<?php get_footer(); ?>