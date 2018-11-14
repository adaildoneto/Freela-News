<div class="slider-post">

    <div class="card">
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card-image">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
          <img class="responsive-img" src="<?php echo $image[0]; ?>" >
          <span class="card-title" >
            <?php the_title();?>
          </span>
        </div>
  </a>
    </div>


</div>
