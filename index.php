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

<div class="col l5">
	  <div class="carousel carousel-slider">
			<?php

			 			$args = array (
			 			  'pagination'             => false,
			 				'tag'										 => array ('slider'),
			 			  'posts_per_page'         => 4,
			 			  'ignore_sticky_posts'    => true,

			 			);
			 			// The Query
			 			$query = new WP_Query( $args );

			 			// The Loop
			 			while ( $query->have_posts() ) {

			 				get_template_part( 'slider', '' );

											}

			        		    wp_reset_postdata();


			 			?>
  </div>
</div>

<div class="col l4">

</div>


<?php
get_sidebar();
get_footer();
