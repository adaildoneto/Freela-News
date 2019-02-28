<div style="margin: 20px;">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
      <div class="card slider-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
        <p><?php $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo '<span class="new badge teal darken-4" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
              }?></p>
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
            <b><h6 class="white-text" style="position: absolute; bottom: 20px; padding: 10px; text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.7);">
              <?php the_title();?>
            </h6></b>  </a>
          </div>
</div>
