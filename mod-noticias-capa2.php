<div class="row grey darken-4"  style="padding: 20px;">
	<div class="container">
		<div class="sl1der2">

			<?php

				$myargs = array (
					'pagination'             => false,
					'category_name'					=> '',
					'posts_per_page'         => 12,
					'ignore_sticky_posts'    => true,

				);
				// The Query
				$myquery = new WP_Query( $myargs );

				// The Loop
				while ( $myquery->have_posts() ) {

						$myquery->the_post();


	  echo ('<div class="col s12 m4 l3">');
						get_template_part( 'slider', '' );
	    echo ('</div>');

									wp_reset_postdata();

					}

				?>


		</div>

	</div>

</div>




	<div class="row">
				<?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
			</div>


</div>
