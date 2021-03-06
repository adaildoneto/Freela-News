<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">


          <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
          <?php if( !empty( $image ) ): ?>

            <div class="card-image">

              <img class="responsive-img img-hgrande" src="<?php echo $image[0]; ?>" >
            </div>
        <?php else :?>

        <?php endif ?>

              <div class="card-stacked">
                <div class="left" style="margin-bottom: 10px; display: block;">
                  <?php $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                          echo '<span class="new badge teal darken-4 left" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
                          }?>
                </div>

                <div class="news-hgrande teal-text text-darken-4">
                  <?php the_title();?>
                      </div>
                  <div class="news-text teal-text text-darken-4 hide-on-med-and-down">
                  <?php echo excerpt('30'); ?>
                  </div>
              </div>
            </div>
</a>
  <hr class="style-one">
