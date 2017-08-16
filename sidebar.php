<!-- Begin Sidebar -->
<div id="sidebar">
	<?php if(is_page()) : ?>
	
	<h2><?php echo get_the_title($post->post_parent); // ... get the gateway page title ?></h2>
	
	<ul class="sub-navigation-items">
         <?php 
         
         if ($post->post_parent) { // if the page we're on has a parent...
            
            wp_list_pages(array( 'child_of' => $post->post_parent, 'title_li' => '',)); // ... list sub-pages of parent page
            
        } else { // ... if the page does not have a parent
        
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',)); // ... list sub-pages of the page
             
         } 
         
        ?>
 	</ul>
     
    <?php endif; ?>
     
    <?php if(!(is_page())) : ?>
    <h2>Blog</h2>
    <ul class="sub-navigation-items">
 	<?php wp_list_categories(array('title_li' => '',));  ?>
    </ul>
    <?php endif; ?>
	
	<!-- Begin Pull Quote -->
	<div id="pull-quote" class="widget">
	<?php if(get_post_meta($post->ID, 'quote', true)) : ?>
	<blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
	<?php endif; ?>
	</div>
	<!-- End Pull Quote -->
	
</div>
<!-- End Sidebar --> 