<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

?>

<?php $categories = get_the_category();
			$category_link = get_category_link($categories[0]->cat_ID);
			$arrow = " >"; ?>

<div class="singlediv">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thebackbutton">
		<a
			href="<?php echo esc_url( $category_link ); ?>" 
			class ="<?php echo esc_html( $categories[0]->name);?> single-back <?php echo esc_html( $categories[0]->name);?>color"" >
				<?php echo esc_html( $categories[0]->name);
			 	?>
		</a>

		<div class="<?php echo esc_html( $categories[0]->name);?>color-border">
			<?php 
				the_post_thumbnail();
			?>
		</div>
	</div>

	
	<!-- .entry-header -->

	<header class="box-header single boxImg-<?php echo esc_html( $categories[0]->name);?>color"" id="main-box-header">
        <div class="box-title-single">
    	<?php
            if ( is_singular() ) :
                the_title( '<h2>', '</h2>' ); ?>
            	<div class="authordate"><p>By <?php the_author ( '<p>', '</p>'); ?> </p><?php the_date('Y-m-d', '<p>', '</p>'); ?></div>
            	
            <?php
            else :
                the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            	the_author ( '<p>', '</p>');
            	
                ?>	
        </div>			

        <?php
            $categories = get_the_category();
            $category_link = get_category_link($categories[0]->cat_ID);
            $arrow = " >";
            ?>

	        <div class="box-category">
	            <a href="<?php echo esc_url( $category_link ); ?>" class ="<?php echo esc_html( $categories[0]->name);?>color">
	            <?php
	                if ( ! empty( $categories ) ) {
	                    echo esc_html( $categories[0]->name);
	                    echo $arrow;   
	                }
	            endif;?>
	            </a>
	        </div>
    </header>


	<div class="smbuttons dos">
	<a href="https://twitter.com/cvillenews_desk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-01.png" alt=""></a>
	<a href="https://www.facebook.com/cville.weekly/"><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-02.png" alt=""></a>
	<a onclick='window.print()' href=""><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-03.png" alt=""></a>
	<a href="mailto:"><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-04.png" alt=""></a>
	<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/Social-Media-Buttons-05.png" alt=""></a>
	</div>


	<div class="entry-content single-img-<?php echo esc_html( $categories[0]->name);?>color"">
		<?php
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

	
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
