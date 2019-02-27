

<div class="row">
  <div class="container">


  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'cotidiano',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'cultura',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'esporte',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'especial',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'economia',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'educacao',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>
</div>


<div class="row teal darken-1">
  <div class="container">


  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'politica',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>
</div>


<div class="row teal darken-4">
  <div class="container">


  <?php

    $myargs = array (
      'pagination'             => false,
    'category_name'					 => 'policia',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'saude',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

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
    'category_name'					 => 'mundo',
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>

</div>
</div>

<div class="row">
			<?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
		</div>
