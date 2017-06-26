<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

// function console_log( $data ){
//   echo '<script>';
//   echo 'console.log('. json_encode( $data ) .')';
//   echo '</script>';
// }

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry">
			<?php
				$categories = get_the_category();
				$category_link = get_category_link($categories[0]->cat_ID);
				$arrow = " >";
			?>
			<div class="entry-image-left grid__col--1-of-2 img-<?php echo esc_html( $categories[0]->name);?>color">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php
					the_post_thumbnail();
	    			
					//the_post_thumbnail();
					//if ( has_post_thumbnail() ) {
					//	the_post_thumbnail();
					//}
					//endif;?>
				</a>
			</div>

			<header class="entry-header-left grid__col--1-of-2">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				the_excerpt(); 
				
				//console_log($category_link);
	 			?>


	 			<div class="entry-category cat-left">
		 			<a href="<?php echo esc_url( $category_link ); ?>" class ="<?php echo esc_html( $categories[0]->name);?>color">
		 			<?php
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name);
						    echo $arrow;   
						}

						endif;?>
					</a>
				</div>
			</header><!-- .entry-header -->
		</div>
		<div class="entry-mobile">
			<div class="entry-image-left grid__col--1-of-3 img-<?php echo esc_html( $categories[0]->name);?>color">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php
					the_post_thumbnail();
					//the_post_thumbnail();
					//if ( has_post_thumbnail() ) {
					//	the_post_thumbnail();
					//}
					//endif;?>
				</a>
			</div>
			<header class="entry-header-left grid__col--2-of-3">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				$categories = get_the_category();
				$category_link = get_category_link($categories[0]->cat_ID);
				$arrow = " >";
				//console_log($category_link);
	 			?>


	 			<div class="entry-category cat-left">
		 			<a href="<?php echo esc_url( $category_link ); ?>" class ="<?php echo esc_html( $categories[0]->name);?>color">
		 			<?php
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name);
						    echo $arrow;   
						}

						endif;?>
					</a>
				</div>
			</header><!-- .entry-header -->
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->


