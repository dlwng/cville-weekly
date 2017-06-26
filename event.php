
<div class="event-container">
				<!-- WHILE LOOP BEGINS -->
				<?php
				$args = array(
					'post_type' => 'event',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_key' => 'date',
					'posts_per_page' => 1
				);
				 ?>
					<?php
						$title = get_field('title');
						$location = get_field('Location');
						$date = get_field('Date');
						$date = strtotime($date);
						$price = get_field('Price');
                  $tickets = get_field('Tickets');
                  $content = the_content();
                  $bannerImg = the_post_thumbnail();
					?>
				<div class=imgAndTitle>
               <div class=EventImg>
                  <img src="<?php echo $bannerImg ?>"/>
               </div>
               <div class="titleBlock">
                  <h1 class="title"><?php echo $title ?></h1>
                  <h2 class="date"><?php echo $date ?></h2>
                  <p class="location"><?php echo $location ?></p>
                  <p class="price"><?php echo $price ?></p>
               </div>
            </div>
				<!-- WHILE LOOP ENDS -->

</div>
