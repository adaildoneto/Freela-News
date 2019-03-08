<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<div class="container">
	<div class="row">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h4 class="page-title"><?php printf( __( 'Resultados da busca para: %s', 'odin' ), get_search_query() ); ?></h4>
					</header><!-- .page-header -->

						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the post format-specific template for the content. If you want to
								 * use this in a child theme, then include a file called content-___.php
								 * (where ___ is the post format) and that will be used instead.
								 */
								 echo ('<div class="col s12 m6 l4">');
		 			 get_template_part( 'cardnews', 'destaque' );
		 					 echo ('</div>');

		 		 endwhile;
							// Post navigation.
									echo ('<div class=" col s12 center-align">');
							wp_pagination();
									echo ('</div>');
						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', '' );

					endif;
				?>



	</div>

</div>


<?php

get_footer();
