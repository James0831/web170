<?php get_header(); ?>

<div id="content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>

<?php endwhile; endif; ?>

<small>front-page.php</small>
</div>

<!-- Begin Sidebar -->
<!--
<div id="sidebar">
	<h2>Header Level 2</h2>
	<ul>
		<li><a href="#">Lorem ipsum</a></li>
		<li><a href="#">Lorem ipsum</a></li>
		<li><a href="#">Lorem ipsum</a></li>
	</ul>
</div>
-->
<!-- End Sidebar -->
  
		
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>