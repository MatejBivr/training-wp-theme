<?php 
	while(have_posts()) : the_post(); ?>
	<article class="blog-post">		
		<?php if (is_single()): ?>
			<span class="post-info"><?php the_author(); ?> | <?php echo the_category(", "); ?></span>
			<p><?php the_content(); ?></p>
		<?php else: ?>
			<h3><?php the_title() ?></h3>
			<span class="post-info"><?php the_author(); ?> | <?php echo the_category(", "); ?></span>
			<p><?php the_excerpt(); ?></p>
		<?php endif ?>
	</article>

<?php endwhile; ?>	

