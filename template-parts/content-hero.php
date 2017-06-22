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
<div class="main-container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry">
            <?php $categories = get_the_category(); ?>
            <div class="entry-image grid__col--1-of-2 grid__col img-<?php echo esc_html( $categories[0]->name);?>color">
                    <?php 
                      the_post_thumbnail();?>
                
            </div>
            <header class="entry-header grid__col--1-of-2 grid__col" id="main-article-header">

                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                the_excerpt(); 
                ?>

                <div class="entry-meta">
                    <div class="entry-author">
                        <?php $author = get_the_author();  
                        echo "By " . $author; ?>
                    </div>

                    <?php
                    $categories = get_the_category();
                    $category_link = get_category_link($categories[0]->cat_ID);
                    $arrow = " >";
                    //console_log($category_link);
                    ?>

                    <div class="entry-category">
                        <a href="<?php echo esc_url( $category_link ); ?>" class ="<?php echo esc_html( $categories[0]->name);?>color">
                        <?php
                            if ( ! empty( $categories ) ) {
                                echo esc_html( $categories[0]->name);
                                echo $arrow;   
                            }
                            endif;?>
                        </a>
                    </div>
                </div>

                
            </header><!-- .entry-header -->
        </div>
        <div class="entry-mobile">
            <div class="entry-image grid__col--1-of-3">
                <?php
                the_post_thumbnail();
                //the_post_thumbnail();
                //if ( has_post_thumbnail() ) {
                //  the_post_thumbnail();
                //}
                //endif;?>
                
            </div>
            <header class="entry-header grid__col--2-of-3">
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
                <div class="entry-category">
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
</div>