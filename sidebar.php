<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cville-weekly
 *
 * Accessable through  <?php get_sidebar(); ?>
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebarE" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php get_template_part( 'template-parts/content-advert-block', get_post_format() );?>
	<?php get_template_part( 'template-parts/content-advert-block', get_post_format() );?>
</aside><!-- #secondary -->
