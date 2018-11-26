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

<body>
	<div class="float-panel" data-top="0" data-scroll="200">
		<nav class="nav-extended" style="background: linear-gradient(180deg, #78909c 0%, #37474f 100%);" >

			<div class="container">
				<div class="row">
					<div class="col s1 m1 l1">
	<a href="#" data-target="mobile-menu" class="sidenav-trigger show-on-large">	<i class="fas fa-bars"></i></a>


					</div>

						<div class="col s11 m9 l9">

							<?php if (has_custom_logo() ): ?>

							 <div class="nav-wrapper">
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

							<div class="col m2 l2 right-align hide-on-small-only">
									<i class="fab fa-facebook-square"></i>
									<i class="fab fa-twitter-square"></i>
									<i class="fas fa-search"></i>



							</div>


					<div class="col s12 l9 hide-on-med-and-down esconder">
							 <?php
														 wp_nav_menu( array(
								 'theme_location'    => 'main-menu',
								 'menu_id'           => 'primary-menu',
								 'menu_class' 	    => 'left hide-on-med-and-down',
								 'container'				=> 'ul',
								 'container_class'	=>	'',
								 'walker'		    =>	new Materialize_Walker_Nav_Menu(),
							 ) );
							 ?>

					 </div>

					 <div class="col s12 l3 right esconder">
						<div class="nav-wrapper blue-grey darken-1 hide-on-small-only">
									<form>
										<div class="input-field">
										 <input id="search" type="search" value="<?php echo get_search_query(); ?>" name="s"/>
										 <label class="label-icon active" for="search"><i class="material-icons right">search</i></label>
										 <i class="material-icons">close</i>
										 </div>
									 </form>
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
