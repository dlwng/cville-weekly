

<?php get_header(); ?>
<div class="event-container main-container">
	<div class="mainEventList">


				<!-- WHILE LOOP BEGINS -->
				<?php
				// $args = array(
				// 	'post_type' => 'event',
				// 	'orderby' => 'meta_value',
				// 	'order' => 'ASC',
				// 	'meta_key' => 'date',
				// 	'posts_per_page' => 10
				// );
				// $loop = new WP_Query( $args );
			   while ( have_posts() ) : the_post();
			    		$title = get_the_title();
						$location = types_render_field( "location", array( ) );
						$date = types_render_field( "date", array( ) );
					//	$date = strtotime($date);
						$price = types_render_field( "price" , array( ) );
                  $tickets = types_render_field( "tickets", array( ) );
                  //$content = the_content();
                  //$bannerImg = the_post_thumbnail();
					?>
					<div class="eventList">
						<div class=imgAndTitleP>
		               <div class=EventImgP>
		                  <?php $eventImg=the_post_thumbnail( array(150,150));
								?>
		               </div>

		               <div class="titleBlockP">
		                  <h1 class="titleP"><?php echo $title; ?></h1>
		                  <h2 class="dateP"><?php echo $date; ?></h2>
		                  <p class="locationP"><?php echo $location; ?></p>
		                  <p class="priceP"><?php echo $price; ?></p>
		               </div>
		            </div>
					</div>

				<?php endwhile;?>
				<!-- WHILE LOOP ENDS -->
				</div>
				<?php	get_sidebar();?>

</div>

<?php
get_footer();
?>
