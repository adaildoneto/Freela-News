
<div class="row teal darken-4">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'polícia',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>
<div class="row teal darken-3">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'política',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>


<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'COTIDIANO',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>

<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'CULTURA',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>


<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'ESPORTE',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>


<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'ECONOMIA',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>


<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'EDUCAÇÃO',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>


<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'CULTURA',
      'posts_per_page'         => 4,
        'offset'                  => ,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>

<div class="row">
			<?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
		</div>
