
  <a class="carousel-item" href="#one!">
    <div style="width: 100%; height: 400px;">
      <div class="card">
        <div class="card-image">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' ); echo $image[0]; ?>
          <span class="card-title">
            <?php the_title();?>
              </span>
        </div>


      </div>
    </div>
  </div>
</a>
