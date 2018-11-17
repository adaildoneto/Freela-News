<div>
  <div class="col s12">
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
      <div class="card slider-post" style="background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,1)), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
            <span class="white-text news-slider" >
              <?php the_title();?>
            </span>
          </div>
    </a>
  </div>
</div>
