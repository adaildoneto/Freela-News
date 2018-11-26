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

<div class="row" style="margin-top: -20px;">
	<?php

		$myargs = array (
			'pagination'             => false,
			'cat'							   			=> array(2),
			'posts_per_page'         => 1,
			'offset'									=> 1,
			'ignore_sticky_posts'    => true,

		);
		// The Query
		$myquery = new WP_Query( $myargs );

		// The Loop
		while ( $myquery->have_posts() ) {

				$myquery->the_post();

				get_template_part( 'especial', '' );

							wp_reset_postdata();

			}

		?>
</div>


<div class="container">
	<div class="row">
			<?php include(TEMPLATEPATH.'/mod-noticias-capa.php');?>
	</div>

</div>

<div class="divider">

</div>
<div class="row grey lighten-4">
	<div class="container">
		<div class="row">
			<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
		</div>

	</div>
</div>
<div class="row grey" style="margin-top: -20px;">

<?php include(TEMPLATEPATH.'/mod-noticias-capa3.php');?>
</div>


<div class="divider">

</div>
<div class="row">


<?php include(TEMPLATEPATH.'/mod-noticias-capa2.php');?>

</div>


<?php
get_footer();
