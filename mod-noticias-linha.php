

<div class="row">
  <div class="container">



  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'especial',
      'posts_per_page'         => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l6">');

        get_template_part( 'slider', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>

<div class="col S12 m6 l3">

  <?php

    $myargs = array (
      'pagination'             => false,
      'category_name'					=> 'saude',
      'posts_per_page'         => 3,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

            if ( $myquery->current_post == 0 )  {
                    get_template_part( 'cardnews', '' );
                  } else {
                        get_template_part( 'cardnews', '' );

                  }

              wp_reset_postdata();

      }

    ?>

  </div>

    <div class="col S12 m6 l3">

      <?php

        $myargs = array (
          'pagination'             => false,
          'category_name'					=> 'educacao',
          'posts_per_page'         => 3,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

                if ( $myquery->current_post == 0 )  {
                        get_template_part( 'cardnews', '' );
                      } else {
                            get_template_part( 'cardnews', '' );

                      }

                  wp_reset_postdata();

          }

        ?>
    </div>

    <div class="col S12 m6 l3">

      <?php

        $myargs = array (
          'pagination'             => false,
          'category_name'					=> 'cultura',
          'posts_per_page'         => 3,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

                if ( $myquery->current_post == 0 )  {
                        get_template_part( 'cardnews', '' );
                      } else {
                            get_template_part( 'cardnews', '' );

                      }

                  wp_reset_postdata();

          }

        ?>
    </div>

    <div class="col S12 m6 l3">

      <?php

        $myargs = array (
          'pagination'             => false,
          'category_name'					=> 'economia',
          'posts_per_page'         => 3,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();

                if ( $myquery->current_post == 0 )  {
                        get_template_part( 'cardnews', '' );
                      } else {
                            get_template_part( 'cardnews', '' );

                      }

                  wp_reset_postdata();

          }

        ?>
    </div>

</div>


<div class="row center-align">
    <?php if ( dynamic_sidebar('spublicidade') ) : else : endif; ?>
</div>

<div class="row">
  <div class="container">


  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'policia',
      'posts_per_page'         => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l6">');

        get_template_part( 'slider', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>
</div>


<div class="row">
  <div class="container">


  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'politica',
      'posts_per_page'         => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l6">');

        get_template_part( 'cardnews', 'hgrande' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>
</div>

<div class="row">
  <div class="container">


  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'nacional',
      'posts_per_page'         => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l6">');

        get_template_part( 'cardnews', 'hgrande' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>
</div>
