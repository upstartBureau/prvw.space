<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
          <nav>
            <ul class="left-hand-links">
              <li><a href="./index.html" class="navlink active">Brands</a></li>
              <li><a href="./retailers.html" class="navlink">Retailers</a></li>
            </ul>
            <div class="master-lo"></div>
            <ul class="right-hand-links">
              <li class="sm-links"><a href="" class="sm-navlink">Log In</a></li>
              <li class="sm-links"><a href="" class="sm-navlink">Register</a></li>
              <li class="sm-links"><a href="" class="navlink partner-link">Partner With Us</a></li>
              <li class="hamburger">
                <div class="hamburger-menu">
                  <div class="bar"></div>
                </div>
              </li>
            </ul>
          </nav>
          <div class='dropin hide-big'>
            <ul>
              <li><a href="./index.html" class="navlink dropin-link active">Brands</a></li>
              <li><a href="./retailers.html" class="navlink dropin-link">Retailers</a></li>
              <li class="sm-links"><a href="" class="navlink dropin-link">Log In</a></li>
              <li class="sm-links"><a href="" class="navlink dropin-link">Register</a></li>
            </ul>
          </div>
					<!-- logo -->
					<!-- <div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div> -->
					<!-- /logo -->

					<!-- nav -->
					<!-- <nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> -->
					<!-- /nav -->

			</header>
			<!-- /header -->
