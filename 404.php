<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cville-weekly
 *
 * Unused Code that displays content in the 404 page. Seemed unnecessary.
 *
 *<div class="page-content">
 *	<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the *links below or a search?', 'cville-weekly' ); ?></p>
 *
 *	<?php
 *	get_search_form();
 *
 *	the_widget( 'WP_Widget_Recent_Posts' );
 *
 *	// Only show the widget if site has multiple categories.
 *	if ( cville_weekly_categorized_blog() ) :
 *?>
 *
 *<div class="widget widget_categories">
 *	<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'cville-weekly' ); ?></h2>
 *	<ul>
 *<?php
 		*	wp_list_categories( array(
 			*	'orderby'    => 'count',
 		*		'order'      => 'DESC',
 		*		'show_count' => 1,
 		*	'title_li'   => '',
 		*		'number'     => 10,
 *		) );
 *	?>
 *	</ul>
 *</div><!-- .widget -->
 *
 *<?php
 *	endif;
 *
 *	 translators: %1$s: smiley
 	*$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cville-weekly' ), convert_smilies( ':)' ) ) . '</p>';
 *	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
 *
 *	the_widget( 'WP_Widget_Tag_Cloud' );
 *?>
 *
 *</div><!-- .page-content -->
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header text-404">
					<h1 class="page-title super-size-me"><?php esc_html_e( '404'); ?></h1>
					<p class="page-title err"><?php esc_html_e( 'Looks like this page doesn&rsquo;t exist. Maybe go back to the homepage? That might help.'); ?></p>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
