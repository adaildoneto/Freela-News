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
		<div id="content" class="col s12 l8 offset-l2" tabindex="-1" role="main">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h1>
					</header><!-- .page-header -->

						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the post format-specific template for the content. If you want to
								 * use this in a child theme, then include a file called content-___.php
								 * (where ___ is the post format) and that will be used instead.
								 */
								get_template_part( 'cardnews', 'destaque' );

							endwhile;

							// Post navigation.
									echo ('<div class="s12 center-align">');
							wp_pagination();
									echo ('</div>');
						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );

					endif;
				?>

		</div><!-- #main -->

	</div>

</div>


<?php

get_footer();
