<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

?>

<article id="post-<?php the_ID(); ?>" class="art-cont" <?php post_class(); ?>>

	<div class="entry-content event-content">

		<?php
      $title = get_the_title();
      $location = types_render_field( "location", array( ) );
      $date = types_render_field( "date", array( ) );
   //	$date = strtotime($date);
      $price = types_render_field( "price" , array( ) );
      $tickets = types_render_field( "tickets", array( ) );
		$idNum=get_the_ID();
      ?>


      <p class="returnButton" onClick="history.go(-1);return true;"><a >< Return to Event Listing</a></p>
      <div class="EventImgA">
         <?php $eventImg=the_post_thumbnail( array(600,400)); ?>
      </div>

      <?php
      if ( is_singular() ) :
         ?>
         <div class="inset-bocks">
         <?php
			the_title( '<h1 class="entry-title article-head titleP">', '</h1>' );
         ?>
         <h2 class="dateP"><?php echo $date; ?></h2>
         <p class="locationP"><?php echo $location; ?></p>
         <p class="priceP"><?php echo $price; ?></p>
         </div>
         <?php

		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">

			<?php cville_weekly_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;

			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cville-weekly' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cville-weekly' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
