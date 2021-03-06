<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cville-weekly
 */

get_header(); ?>

	<section id="primary" class="content-area main-container">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'cville-weekly' ), '<span>' . get_search_query() . '</span>' );
				?></h2>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/search-list', 'search' );

			endwhile;


		else :?>
			<div class="no-search">
			<h2 class="page-title"><?php
					/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'cville-weekly' ), '<span>' . get_search_query() . '</span>' );
				?></h2>

			<h2 class="sorry-bro">Sorry, we didn't find any results for '<?php printf( esc_html__( '%s', 'cville-weekly' ), '<span>' . get_search_query() . '</span>'); ?>' :( </h2>
			</div>

		<?php
		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
?>