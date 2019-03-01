<div class="col s12 m12 l6">
  <div class="row">
    <div class="sl1der">
                <?php

                  $myargs = array (
                    'pagination'             => false,
                    'category_name'					 => 'destaque',
                    'posts_per_page'         => 4,
                    'ignore_sticky_posts'    => true,

                  );
                  // The Query
                  $myquery = new WP_Query( $myargs );

                  // The Loop
                  while ( $myquery->have_posts() ) {

                      $myquery->the_post();


                      echo ('<div class="col s12">');
                      get_template_part( 'slider', '' );
                      echo ('</div>');

                            wp_reset_postdata();

                    }

                  ?>
    </div>

  </div>


  <?php

    $myargs = array (
      'pagination'             => false,
    	'cat'										=> array(' -46, -15, -16, -50, -20, -17, -21, -49, -48, -55, -18, -19, -58, -51,'),
      'posts_per_page'         => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();


    echo ('<div>');
        get_template_part( 'cardnews', 'hgrande' );
        echo ('</div>');


              wp_reset_postdata();

      }

    ?>

</div>



<div class="col S12 m6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
			'cat'										=> array(' -46, -15, -16, -50, -20, -17, -21, -49, -48, -55, -18, -19, -58, -51,'),
        'offset'                => 2,
				'posts_per_page'         => 4,
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
          get_template_part( 'cardnews', '' );


        }



								wp_reset_postdata();

				}

			?>
	</div>

	<div class="col S12 m6 l3">
      <?php if ( dynamic_sidebar('vpublicidade') ) : else : endif; ?>

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'										=> array(' -4942, -46, -15, -16, -50, -20, -17, -21, -49, -48, -55, -18, -19, -58, -51,'),
        'offset'                => 6,
				'posts_per_page'         => 4,
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
