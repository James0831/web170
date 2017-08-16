<!DOCTYPE html>
<html lang="en">
<head>
<title><?php bloginfo('description') ?> | Creations By Carlee</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/main.js"></script>
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/icon.png">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/main.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/nav.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/form.css" />
<!-- Begin WP Head Function -->
<?php wp_head(); ?>
	
<!-- End WP Head Function -->
</head>

<body <?php body_class(); ?>>
<!-- START WRAPPER -->
	<div class="header-layout">
		<div class="transbox">
			<h1 class="header-text">Creations By Carlee</h1>
			<p class="header-text">In the heart of the image.</p>
		</div>
	</div>

<!-- Begin Main Navigation -->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav',)); ?>
<!-- End Main Navigation -->

	  
<!-- Begin (Old) Navigation -->
 <!--    
	<nav>
      <ul class="topnav" id="myTopnav">
				<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
				<li class="contact"><a href="#">Contact</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="main.html">Services</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">About</a></li>
				<li><a href="home.html">Home</a></li>  
      </ul>
    </nav>
 -->
<!-- End (Old) Navigation -->
	<div class="wrapper">