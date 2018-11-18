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
	<div id="blue">
		<nav class="nav-extended blue-grey" >

			<div class="container">
				<div class="row">
					<div class="col l1">
						<div class="nav-content left">
									<i class="material-icons">menu</i>
						</div>
					</div>

						<div class="col l9">

							<?php if (has_custom_logo() ): ?>

							 <div class="nav-content center">
									<?php odin_the_custom_logo();?>
							</div>
							<?php else : ?>
								<div class="nav-content">
									<a class="brand-logo center" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
										<?php bloginfo( 'name' ); ?>
									</a>
								</div>

								<div class="nav-content center">
									<?php bloginfo( 'description' ); ?>
								</div>

							<?php endif ?>

						</div>

							<div class="col l2">

									<i class="material-icons right">add</i>
									<i class="material-icons right">power</i>
									<i class="material-icons right">person</i>


							</div>


					<div class="col s12 l9 hide-on-med-and-down">
							 <?php
								 wp_nav_menu(
									 array(
										 'theme_location' => 'main-menu',
										 'depth'          => 2,
										 'container'      => false,
										 'menu_class'     => 'left',
										 'menu_id'				=> 'sidenav',
										 'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
										 'walker'         => new Odin_Bootstrap_Nav_Walker()
									 )
								 );
							 ?>

					 </div>

					 <div class="col s12 l3 right">
						<div class="nav-wrapper blue-grey darken-1">
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
