<?php
/**
 * Template part for displaying banner ads
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 *
 * Access by use of the following tag:
 * get_template_part( 'template-parts/content-advert-banner', get_post_format() );
 */

?>

<div class="banner-ad">
   <img class="banner-ad-img" src="<?php  $picture = get_bloginfo('template_url'); echo $picture; ?>/images/Banner-Ad.jpg" />
</div>
