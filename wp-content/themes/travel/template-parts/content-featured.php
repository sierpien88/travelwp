<article <?php post_class (array ('class' => 'featured')); ?>>
	<div class="trip-img">
		<?php the_post_thumbnail( array( 275, 275 ),  array('class' => 'img-fluid w-75 mx-auto d-block' )); ?>
	</div>
	<h2 class="trip-title"><?php the_title(); ?></h2>
	<?php /*
	<div class="meta-info">
		<p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
		<p>Categories: <?php the_category( ' ' ); ?></p>
		<p><?php the_tags( 'Tags: ', ', ' ); ?></p>
	</div>
	<p><?php the_content(); ?></p>
	*/ ?>
</article>