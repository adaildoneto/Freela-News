<div class="col s12 m4 l3">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
      <div class="card slider-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
            <h4 class="white-text" style="position: absolute; bottom: 20px; padding: 10px;">
              <?php the_title();?>
            </4>  </a>
          </div>
</div>
