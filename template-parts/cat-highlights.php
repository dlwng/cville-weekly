<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

?>

<div class="main-three-boxes grid__col--1-of-3 grid__col" id="post-<?php the_ID(); ?>">
    <?php $categories = get_the_category(); ?>
    <div class="box-image">
       <?php 
       		the_post_thumbnail();?> 
                
   	</div> 
            
    <header class="box-header boxImg-<?php echo esc_html( $categories[0]->name);?>color"" id="main-box-header">
    	<?php
            if ( is_singular() ) :
                the_title( '<h2 class="box-header">', '</h2>' );
            else :
                the_title( '<h2 class="box-header"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                ?>				

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
</div>

