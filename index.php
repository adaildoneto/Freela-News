<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="row">

	<div class="col S12 m12 l6">
		<div class="row no-padding">
								<div id="slider">
												<?php

													$myargs = array (
														'pagination'             => false,
														'cat'							   			=> 2,
														'posts_per_page'         => 6,
														'ignore_sticky_posts'    => true,

													);
													// The Query
													$myquery = new WP_Query( $myargs );

													// The Loop
													while ( $myquery->have_posts() ) {

															$myquery->the_post();



															get_template_part( 'slider', '' );


																		wp_reset_postdata();

														}

													?>
						</div>
		</div>

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'							   			=> 2,
				'posts_per_page'         => 2,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();



					get_template_part( 'cardnews', 'hgrande' );


								wp_reset_postdata();

				}

			?>

	</div>

	<div class="col S12 m12 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'							   			=> 2,
				'posts_per_page'         => 5,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();



					get_template_part( 'cardnews', '' );


								wp_reset_postdata();

				}

			?>
	</div>

	<div class="col S12 m12 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'cat'							   			=> 2,
				'posts_per_page'         => 8,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();



					get_template_part( 'cardnews', 'horizontal' );


								wp_reset_postdata();

				}

			?>
	</div>

</div>



<?php
get_footer();
