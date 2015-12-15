<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,700,900,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="headermain clearfix">
				<div class="logo">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
				</div>
				<div class="phoneno">
					<ul>
						<li><span><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png"></span></li>
						<li>
						<p>
							212-655-5444
						</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<!-- Header Section end here-->
<!-- menu start here -->
<section class="menu_sec">
<div class="container">
	<div class="row">
		<div class="new_menu clearfix">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				<div class="navbar-inverse navbar-static-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><?php wp_nav_menu( array('menu' => 'menu1' )); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
