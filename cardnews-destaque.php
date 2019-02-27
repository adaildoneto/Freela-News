  <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
  <?php if( !empty( $image ) ): ?>

  <div class="card destaque-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
  <div class="card-content">
<?php else :?>
  <div class="card teal darken-4" style="padding: 20px;">
  <div class="card-content center-align">

<?php endif ?>
<?php $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo '<span class="new badge green darken-4" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
        }?>

<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
<span class="news-destaque white-text" >
<?php the_title();?>
</span>  </a>
</div>

</div>
