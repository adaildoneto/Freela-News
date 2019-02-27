
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">
          <div class="nocanto1">
            <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<span class="new badge blue-grey darken-5" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
                    }?>
          </div>
              <div class="card-image">
                      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
                <img class="responsive-img img-hgrande" src="<?php echo $image[0]; ?>" >
              </div>
              <div class="card-stacked">
                <div class="news-hgrande blue-grey-text text-darken-4">
                  <?php the_title();?>
                      </div>
                  <div class="news-text blue-grey-text hide-on-med-and-down">
                  <?php echo excerpt('30'); ?>
                  </div>
              </div>
            </div>
</a>
  <hr class="style-one">
