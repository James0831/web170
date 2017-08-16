<?php get_header(); ?>
  		

<img src="<?php bloginfo('template_directory'); ?>/images/family.jpg" alt="Family">
    
    <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
            <h2>About Me:</h2>
            <?php if(have_posts()) : while(have_posts()) : the_post(); // loop one ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
			<small>front-page.php</small>
        </section>
        <section class="widget-item">
            <h2>Latest News:</h2>
            <ul>
            <?php rewind_posts(); // stop loop one ?>
            <?php query_posts(array('category_name' => 'news', 'posts_per_page' => 4 )); // give directions to loop two ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small></li>
            <?php endwhile; endif; ?>
            </ul>
            <h2>Latest Articles:</h2>
            <ul>
            <?php rewind_posts(); // stop loop two ?>
            <?php query_posts(array('category_name' => 'articles', 'posts_per_page' => 4)); // give directions to loop three ?>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(); ?></small></li>
            <?php endwhile; endif; ?>
            </ul>
        </section>
        <section class="widget-item">
            <h2>Contact Me:</h2>
            <p><strong>Phone: </strong>951.768.2834<br><strong>Email: </strong><a href="mailto:jamescarroll@seattlecentral.edu">jamescarroll@seattlecentral.edu</a></p>
            <p>123 California Ave<br>Seattle, WA 98116</p> 
        </section>
    </div>
    <!-- End Widgets -->





	
<?php get_footer(); ?>