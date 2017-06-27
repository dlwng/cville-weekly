<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */

get_header(); ?> 

    <div id="primary" class="content-area main-container">
        <main id="content" class="site-main" role="main">

            <?php 
                // Check if there are any posts to display
            if ( have_posts() ) : ?>
            
            <header class="cat-header">
                <h1 class="cat-title cat-page-title cat-title-<?php echo single_cat_title( "", true );?> <?php echo single_cat_title( "", true );?>color""><?php single_cat_title( "", true ); ?></h1>


                <!-- <?php
                    // Display optional category description
                if ( category_description() ) : ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
                <?php endif; ?> -->
            </header>

        <?php

            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content-preview-left', get_post_format() );
            endwhile; 

        else: 
            get_template_part( 'template-parts/content-preview-left', get_post_format() );


        endif; ?> 




        </main> 
    </div>
<?php get_footer(); ?>