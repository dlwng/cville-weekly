<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

?>
<div class="main-container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry">
			<header class="entry-header grid__col--1-of-2">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				the_excerpt(); 
				$categories = get_the_category();
				$arrow = " >";
	 			?>

	 			<div class="entry-category">

	 			
	 			<a href="'<?php echo esc_url( $category_link ); ?>'" class ="<?php echo esc_html( $categories[0]->name);?>color">
	 			<?php
					if ( ! empty( $categories ) ) {
					    echo esc_html( $categories[0]->name);
					    echo $arrow;   
					}

					endif;?>
				</a>
				</div>
			</header><!-- .entry-header -->

			<div class="entry-image grid__col--1-of-2">
				<?php
				the_post_thumbnail();
				//the_post_thumbnail();
				//if ( has_post_thumbnail() ) {
				//	the_post_thumbnail();
				//}
				//endif;?>
				
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
