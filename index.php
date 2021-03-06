<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-weekly
 */


function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

get_header(); ?>

	<div id="primary" class="content-area main-container">
		<main id="main" class="site-main" role="main">

		<!-- while loop starts -->
		<!-- get template part ( new thing you make) -->
		<!-- how to change the loop to display fewer posts -->
		<!-- while loop ends -->

		<?php

		
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			get_template_part( 'template-parts/content-advert-banner', get_post_format() );


			// while ( have_posts() ) : the_post();
			// 	get_template_part( 'template-parts/content-hero', get_post_format() );
			// endwhile;

			$main_ids = [];
			$mainarticle = new WP_Query( array (
				'posts_per_page' => 1
			));

			while ( $mainarticle -> have_posts() ) : $mainarticle -> the_post();
				get_template_part( 'template-parts/content-hero', get_post_format() );
				array_push($main_ids, get_the_ID());
			endwhile;
			
			/* Start the Loop */
			// while ( have_posts() ) : the_post();

				
			// 	 * Include the Post-Format-specific template for the content.
			// 	 * If you want to override this in a child theme, then include a file
			// 	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 
			// 	get_template_part( 'template-parts/content', get_post_format() );

			// endwhile;

			$threecats = new WP_Query( array (
				'post__not_in' => $main_ids,
				'posts_per_page' => 3
			));

			while ( $threecats -> have_posts() ) : $threecats -> the_post();
				get_template_part( 'template-parts/cat-highlights', get_post_format() );
			endwhile;


			$threenews = new WP_Query( array (
				'category_name' => 'News', 
				'posts_per_page' => 3
			));

			$threearts = new WP_Query( array (
				'posts_per_page' => 3,
				'category_name' => 'Arts'

			));

			$threeliving = new WP_Query( array (
				'posts_per_page' => 3,
				'category_name' => 'Living'

			));

			$news = get_cat_ID( 'News' );
			$news_link = get_category_link($news);

			$arts = get_cat_ID( 'Arts' );
			$arts_link = get_category_link($arts);

			$living = get_cat_ID( 'Living' );
			$living_link = get_category_link($living);

			$news_ids = [];
			$arts_ids = [];
			$living_ids = [];

			?>

			<a href="<?php echo esc_url( $news_link ); ?>"><h1 class="Newscolor cat-title cat-title-news">News</h1></a>

			<?php
			while ( $threenews -> have_posts() ) : $threenews -> the_post();
				
				get_template_part( 'template-parts/content-preview-left', get_post_format() );
				array_push($news_ids, get_the_ID());

			endwhile;

			get_template_part( 'template-parts/content-advert-banner', get_post_format() );
			?>


			<a href="<?php echo esc_url( $arts_link ); ?>"><h1 class="Artscolor cat-title cat-title-arts">Arts</h1></a>

			<?php
			while ( $threearts -> have_posts() ) : $threearts -> the_post();
				
				get_template_part( 'template-parts/content-preview-right', get_post_format() );
				array_push($arts_ids, get_the_ID());

			endwhile;
			get_template_part( 'template-parts/content-advert-banner', get_post_format() );
			?>

			<a href="<?php echo esc_url( $living_link ); ?>"><h1 class="Livingcolor cat-title cat-title-living">Living</h1></a>

			<?php
			while ( $threeliving -> have_posts() ) : $threeliving -> the_post();

				get_template_part( 'template-parts/content-preview-left', get_post_format() );
				array_push($living_ids, get_the_ID());

			endwhile;
			get_template_part( 'template-parts/content-advert-banner', get_post_format() );

			$more_ids = array_merge($news_ids, $arts_ids, $living_ids);
			?>

			<h1 class="cat-title cat-title-recent">Recent Stories</h1>

			<?php

			$moreposts = new WP_Query( array (
				'post__not_in' => $more_ids, 
				'posts_per_page' => 6
			));

			while ( $moreposts -> have_posts() ) : $moreposts -> the_post();

				get_template_part( 'template-parts/content-preview-right', get_post_format() );

			endwhile;
			?>
			
			<div class="center-button">
				<!-- <button onclick="/news" type="button" class="morebutton">More Stories</button> -->
				<a href="cville-weekly/recent" type="button" class="morebutton">More Stories</a>

			</div>



			<?php


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
?>
