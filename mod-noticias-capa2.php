<div class="row grey darken-1"  style="padding: 20px;">
	<div class="container">
		<div class="center-align titulo">
			<h5 class="white-text">Colunas</h5>
			<div class="divider"></div>
		</div>
<div class="row">
		<div id="sl1der2">


				<?php

					$myargs = array (
						'pagination'            => false,
						'cat'										=> array('46, 15, 16, 50, 20, 17, 21, 49, 48, 55, 18, 19, 58, 51,'),
						'posts_per_page'        => 12,
						'ignore_sticky_posts'   => true,

					);
					// The Query
					$myquery = new WP_Query( $myargs );

					// The Loop
					while ( $myquery->have_posts() ) {

							$myquery->the_post();



							get_template_part( 'slider2', '' );


										wp_reset_postdata();

						}

					?>

				</div>

		</div>



</div>






</div>
