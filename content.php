<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
<?php if( !empty( $image ) ): ?>
	<div class="row">

	<div class="container intro-container" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-position: center; background-size: cover; margin-top: -180px">
	</div>

	<div class="embassada" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-position: center; background-size: cover; filter: grayscale(100%) blur(5px);">
	</div>

	</div>
	<div class="container" style="margin-top:-150px;">
<?php else :?>

<div class="container">
<?php endif ?>

			<div class="row">
				<div id="content" class="col s12 l8 offset-l2 card" role="main" >


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<div class="center-align"><h1 class="entry-title titulo-post">', '</h1></center>' );

			else :
				the_title( '<h2 class="entry-title titulo-post"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta center-align">
				<?php		$alias = get_post_meta ( get_the_id(), 'author_alias', true );
						if ( '' != $alias):
						    $author = $alias;
						else:
						    $author = sprintf( '<a class="fn" href="%1$s" title="%2$s" rel="author">%3$s</a>',
							esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
							esc_attr( sprintf( __( 'View all posts by %s', 'icefit' ), get_the_author() ) ),
							get_the_author() );
						endif;
				echo do_shortcode( '[ssba-buttons]' );
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->


		<div id="post" class="entry-content">
			<?php
			the_content( 'Continue Lendo..' );
			?>
			<div class="card-action">
				<?php wp_pagination()?>
			</div>
		</div><!-- .entry-content -->


	<footer class="entry-meta">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
			<span class="cat-links"><?php echo __( 'Posted in:', 'odin' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'odin' ) ); ?></span>
		<?php endif; ?>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged as:', 'odin' ) . ' ', ', ', '</span>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'odin' ), __( '1 Comment', 'odin' ), __( '% Comments', 'odin' ) ); ?></span>
		<?php endif; ?>
	</footer>
</article><!-- #post-## -->
</div>
</div>
</div>
