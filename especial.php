<div class="parallax-container">
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
  <div class="parallax"> <img src="<?php echo $image[0]; ?>" alt="" style="background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,1)),; background-size: cover; background-position: center;z-index: -33;">
            <div class="container especial">
              <div class="col s12 l8 offset-l2 center-align">
                <h1 class="white-text news-especial flow-text" >
                  <?php the_title();?>
                </h1>

                <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="btn wave-effect grey darken-4 white-text" >Leia mais</a>

              </div>
            </div>


  </div>
</div>
