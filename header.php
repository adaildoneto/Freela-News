<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body class="">
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '249614799253636',
      xfbml      : true,
      version    : 'v3.2'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<div class="float-panel" data-top="0" data-scroll="200">
		<nav class="nav-extended" style="background: linear-gradient(180deg, #00695c 0%, #004d40 100%);" >

			<div class="">
				<div class="row">
					<div class="col s1 m1 l1">
	<a href="#" data-target="mobile-menu" class="sidenav-trigger">	<i class="fas fa-bars"></i></a>


					</div>

						<div class="col s11 m10 l10">

							<?php if (has_custom_logo() ): ?>

							 <div class="nav-wrapper center-align">
									<?php odin_the_custom_logo();?>
							</div>
							<?php else : ?>

<div class="nav-wrapper center-align">

	<a class="logomarca" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<i class="far fa-newspaper"></i>	<?php bloginfo( 'name' ); ?>
	</a>

</div>






							<?php endif ?>

						</div>

							<div class="col m1 l1 right-align hide-on-small-only">

<a class="waves-effect waves-light btn-flat modal-trigger" href="#modal1">	<i class="fas fa-search white-text"></i></a>




							</div>


					<div class="container hide-on-med-and-down esconder">
						<div class="center4">
							<?php
														wp_nav_menu( array(
								'theme_location'    => 'main-menu',
								'menu_id'           => 'primary-menu',
								'menu_class' 	    => 'hide-on-med-and-down',
								'container'				=> 'ul',
								'container_class'	=>	'',
								'walker'		    =>	new Materialize_Walker_Nav_Menu(),
							) );
							?>
						</div>


					 </div>




	</div>

	</nav>

	</div>
	<?php 	 wp_nav_menu( array(
				 'menu'              => 'main-menu',
				 'menu_id' 			=> 'mobile-menu',
				 'theme_location'    => 'main-menu',
				 'depth'             =>  2,
				 'container'			=> 'ul',
				 'menu_class' 		=> 'sidenav',
				 'walker'			=>	new Materialize_Walker_Nav_Menu(),
		 ));
		 ?>

		 <div id="modal1" class="modal">
		     <div class="modal-content transparent">
		 			<?php include(TEMPLATEPATH.'/searchform.php');?>

		     </div>
		   </div>
