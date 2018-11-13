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

<div class="col S12 l6">
		  <div class="single-item">
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

<div class="col S12 l3">

</div>


<?php
get_sidebar();
get_footer();
