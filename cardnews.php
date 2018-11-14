
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <div class="newscard">
        <div class="card-image">
          <?php $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  echo '<span class="badge" >'. esc_html( $categories[0]->name ) . '</span>';
                  }?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cardnews' );?>
          <img class="responsive-img" src="<?php echo $image[0]; ?>" >

            </div>
        <div class="news">
          <?php the_title();?>
        </div>
      </div>
    </a>
    <hr class="grey lighten-5">
