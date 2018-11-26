<div class="container">
	<div class="col S12 m12 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'							   			=> array(2,7),
				'posts_per_page'         => 3,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();

	          	if ( $myquery->current_post == 0 )  {
					          	get_template_part( 'cardnews', '' );
					          } else {
					              	get_template_part( 'cardnews', 'horizontal' );

					          }

								wp_reset_postdata();

				}

			?>
	</div>
	<div class="col S12 m12 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'							   			=> array(2,7),
				'posts_per_page'         => 3,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();

	          	if ( $myquery->current_post == 0 )  {
					          	get_template_part( 'cardnews', '' );
					          } else {
					              	get_template_part( 'cardnews', 'horizontal' );

					          }

								wp_reset_postdata();

				}

			?>
	</div>
	<div class="col S12 m12 l3">

		<?php if ( dynamic_sidebar('vpublicidade') ) : else : endif; ?>

	</div>
	<div class="col S12 m12 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'							   			=> array(2,7),
				'posts_per_page'         => 3,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();

							if ( $myquery->current_post == 0 )  {
											get_template_part( 'cardnews', 'destaque' );
										} else {
													get_template_part( 'cardnews', 'horizontal' );

										}

								wp_reset_postdata();

				}

			?>
	</div>
</div>
