        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
      <div class="card slider-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
            <span class="white-text news-slider" style="text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.7);" >
              <?php the_title();?>
            </span>  </a>
          </div>
