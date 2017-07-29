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
  
  <header>
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
 </header>
	<div class="wrapper">
  <!-- START LEFT COL -->
		<h2 class="pageID">Services</h2>
  <section class="services">
		<div>
			<h3>Wedding photography</h3>

			<p>Creations by Carlee stands for unobstructive, fashionable, storytelling Wedding Photography.
			I tell all my couples: “This is your day and I’m here to document everything.” I encourage them to enjoy their wedding day, to be who they are and let me be who I am.
			One of my former grooms, told me after his wedding: “Looking at your photos showed me all the wonderful moments I wouldn’t have remembered.”
			I shoot weddings to ensure that couples never forget what made their day so special.</p>
		</div>
		<div><img src="<?php bloginfo('template_directory'); ?>/images/family/family3.jpg" alt="image01" data-description="Image Text" /></div>
		<div>
			<h3>Senior/graduation photography</h3>
			<p>Creations by Carlee stands for unobstructive, fashionable, storytelling Wedding Photography.
			I tell all my couples: “This is your day and I’m here to document everything.” I encourage them to enjoy their wedding day, to be who they are and let me be who I am. One of my former grooms, told me after his wedding: “Looking at your photos showed me all the wonderful moments I wouldn’t have remembered.”
			I shoot weddings to ensure that couples never forget what made their day so special.</p>
		</div>
		<div>
			<img src="<?php bloginfo('template_directory'); ?>/images/new-born/new5.jpg" alt="image01" data-description="Image Text" />
		</div>
  </section>
  <!-- END LEFT COL -->
		
  
  <!-- START RIGHT COL -->
  <aside class="services">
		<div>
			<img src="<?php bloginfo('template_directory'); ?>/images/wedding/wedding2.jpg" alt="image01" data-description="Image Text" />
		</div>
		<div>
			<h3>Family photography</h3>
				<p>Creations by Carlee stands for unobstructive, fashionable, storytelling Wedding Photography.
				I tell all my couples: “This is your day and I’m here to document everything.” I encourage them to enjoy their wedding day, to be who they are and let me be who I am.
				One of my former grooms, told me after his wedding: “Looking at your photos showed me all the wonderful moments I wouldn’t have remembered.”
				I shoot weddings to ensure that couples never forget what made their day so special.</p>
		</div>
		<div>
			<img src="<?php bloginfo('template_directory'); ?>/images/graduation/grad2.jpg" alt="image01" data-description="Image Text" />
		</div>
		<div>
			<h3>New Born photos</h3>

				<p>Creations by Carlee stands for unobstructive, fashionable, storytelling Wedding Photography.
				I tell all my couples: “This is your day and I’m here to document everything.” I encourage them to enjoy their wedding day, to be who they are and let me be who I am.
				One of my former grooms, told me after his wedding: “Looking at your photos showed me all the wonderful moments I wouldn’t have remembered.”
				I shoot weddings to ensure that couples never forget what made their day so special.</p>
		</div>
   
  </aside>
  <!-- END RIGHT COL -->
		<small>index.php</small>
  </div> 
  <!-- END WRAPPER -->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2016 - 2017 by <a href="#" target="_blank"> James Carroll</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a><a href="disclaimer.php"> Disclaimer/Privacy Notice</a></small></p>
</footer>
<!-- END Footer --> 
	<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
		
<!-- Begin WP Footer -->

<?php wp_footer(); ?>
		
<!-- End WP Footer-->
		
		
</body>
</html>