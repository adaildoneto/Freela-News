  <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
  <?php if( !empty( $image ) ): ?>

  <div class="card destaque-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
<div class="nocanto2">
  <?php $categories = get_the_category();
      if ( ! empty( $categories ) ) {
          echo '<span class="new badge teal darken-4" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
          }?>
</div>

  <div class="card-content">

    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
    <span class="news-destaque white-text" >
    <?php the_title();?>
    </span>  </a>
    </div>

    </div>
<?php else :?>
  <div class="card teal darken-4">
    <div class="nocanto2">
      <?php $categories = get_the_category();
          if ( ! empty( $categories ) ) {
              echo '<span class="new badge teal darken-4" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
              }?>
    </div>
  <div class="card-content center-align" >
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>"/>
    <h5 class="white-text" >
    <?php the_title();?>
  </h5>  </a>
    </div>

    </div>

<?php endif ?>
