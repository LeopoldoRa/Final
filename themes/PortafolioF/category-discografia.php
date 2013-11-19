<?php get_header();?>

	<?php if(have_posts()): 
         while(have_posts()): 
         	the_post();?>

<div class="post">
	<h2><?php the_title();?></h2>
	<p><?php the_content();?></p>
</div><!--final del post-->	


<?php endwhile; endif; ?>

