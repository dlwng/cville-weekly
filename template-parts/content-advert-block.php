<?php
/**
 * Template part for displaying block ads
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 *
 * Access by use of the following tag:
 * get_template_part( 'template-parts/content-advert-block', get_post_format() );
 */


?>

<div class="block-ad">
   <img class="block-ad-img" src="<?php  $picture = get_bloginfo( 'template_url'); echo $picture; ?>/images/Block-Ad.jpg" />
</div>
