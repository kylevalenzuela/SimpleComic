<?php
	/*
		Template Name: Comic Loop
	*/
?>

<?php get_header(); the_post() ?>

<div class="comic-wrap">
	<?php

	$args = array(
		'post_type' => 'post');

	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>

			<a href="<?php the_permalink(); ?>"><div class="comic-item">

				<?php echo "<img src='". get_post_meta($post->ID, "comic-thumbnail", true) . "'/>"; ?>
					<span><h6><?php  the_title() ?></h6></span>
			</div></a>

	<?php
		}
	        echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	?>
</div>