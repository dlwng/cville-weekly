<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cville-weekly
 */

get_header(); ?>
		<div id="primary" class="content-area make660">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			$prev = get_previous_posts_link();
			echo $prev;

			get_template_part( 'template-parts/content', get_post_format() );



			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="relatedposts make660">
	<div class="thumbnail-container">
<h3>Related posts</h3>
<?php
  $orig_post = $post;
  global $post;
  $tags = wp_get_post_tags($post->ID);
   
  if ($tags) {
  $tag_ids = array();
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
  $args=array(
  'tag__in' => $tag_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=>4, // Number of related posts to display.
  'caller_get_posts'=>1
  );
   
  $my_query = new wp_query( $args );
 
  while( $my_query->have_posts() ) {
  $my_query->the_post();
  ?>
   
  <div class="relatedthumb">
    <a 	rel="external" 
    	href="<? the_permalink()?>"
    	class="<?php echo esc_html( $categories[0]->name);?> single-back <?php echo esc_html( $categories[0]->name);?>color">
    	<?php
            $categories = get_the_category();
            $category_link = get_category_link($categories[0]->cat_ID);
            $arrow = " >";
            ?>
	
    	<?php the_post_thumbnail(array(660,335)); ?><br />
    		<div class="box-header related single <?php echo esc_html( $categories[0]->name);?>color-border-related boxImg-<?php echo esc_html( $categories[0]->name);?>color" id="main-box-header" >
    			<?php the_title(); ?>
    		</div>
    </a>

  </div>
   
  <? }
  }
  $post = $orig_post;
  wp_reset_query();
  ?>
  </div>
</div>

<?php

get_footer();
?>

<div class="smbuttons uno">
	<a href="https://twitter.com/cvillenews_desk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-01.png" alt=""></a>
	<a href="https://www.facebook.com/cville.weekly/"><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-02.png" alt=""></a>
	<a onclick='window.print()' href=""><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-03.png" alt=""></a>
	<a href="mailto:"><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-04.png" alt=""></a>
	<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-05.png" alt=""></a>
</div>