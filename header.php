<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
 		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,900" rel="stylesheet"> 
 		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php 
            wp_nav_menu([
                'theme_location'  => 'mobile-header-menu',
                'container'       => 'div',
                'menu_class'      => 'nav navbar-nav navbar-right',
            ]);
        ?>

		</div>

	<div id="main">
		<header id= 'preheader' class= 'flex-container'>
			<div id= 'phone'>
				856.558.3804
			</div>
			<div id='social'>
				<a href='https://www.facebook.com/Craig-Melendes-Photography-163588090675819/' target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/icons/facebook_icon.png"/></a>
				<a href='https://www.instagram.com/craigles_98/' target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/icons/insta_icon.png"/></a>
				<a href='http://www.linkedin.com/in/craig-melendes-593014154' target="_blank" > <img src="<?php echo get_template_directory_uri(); ?>/icons/linkdin_icon.png"/> </a>
			</div>
		</header>
		<header id= 'main-header'>
			<span class= "openLink" id= 'openLink' onclick="openNav()"><img src="<?php echo get_template_directory_uri(); ?>/icons/hamIcon.png"/> </span>
			<nav class="clearfix">
		<?php 
            wp_nav_menu([
                'theme_location'  => 'header-menu',
                'container'       => 'div',
                'menu_class'      => 'nav navbar-nav navbar-right',
            ]);
        ?>
			</nav>
		
		</header>