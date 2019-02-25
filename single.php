<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('transparent'); ?>
<?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							   if( !empty( $image ) ) {
								 	get_template_part( 'content', 'nomimage' );
							 } else {
								 get_template_part( 'content', get_post_format() );


													endwhile;
					?>




<?php
get_footer();
