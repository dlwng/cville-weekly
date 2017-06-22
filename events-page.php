
<div class="event-container">
				<!-- WHILE LOOP BEGINS -->
				<?php
				$args = array(
					'post_type' => 'event',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_key' => 'date',
					'posts_per_page' => 5
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
				<?php endwhile;?>
				<!-- WHILE LOOP ENDS -->

</div>
