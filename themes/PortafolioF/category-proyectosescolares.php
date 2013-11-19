<?php
	$args = array(
		'posts_type' => 'post',
			'category' => 2,
				'numberposts' => 2
				);
	$resultados = get_posts($args);
	//echo '<pre>';
	//print_r ($resultados);
	//echo '</pre>';
	foreach($resultados as $proyecto): setup_postdata($proyecto);
		echo $proyecto->post_title;
		echo '<br/>';

		
	endforeach; wp_reset_postdata();?>

<?php if(have_posts()): while(have_posts()): the_post());
	echo $post->post_title;
	echo '<br/>';
endwhile; endif; ?>
