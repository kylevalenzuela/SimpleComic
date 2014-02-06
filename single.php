<?php get_header(); ?>


<span class="picture comic-img" data-picture data-alt="Comic">
    <span class="sml" data-src="small.jpg"></span>
    <span class="med" data-src="<?php echo get_post_meta($post->ID, 'comic', true); ?>" data-media="(min-width: 768px)"></span>
</span>

<div class="post" >

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		

		<div class="comic-nav">	
			<?php previous_post_link('%link', '-', TRUE); ?>  
			<?php next_post_link('%link', '=', TRUE); ?> 
		</div>	
		
		<div class="twitter">		
			<!--Hubstar: https://github.com/HubSpot/hubstar-->
			<iframe src="http://hubstar.io/twitter/spin?via=kylevalenzuela&amp;text=<?php the_title(); echo "&nbsp;"; the_permalink() ?>&amp;url=<?php the_permalink() ?>&amp;name=It!" frameborder="0" scrolling="0" width=270 height=60>
			</iframe>
		</div>

			<div class="entry">
				<h1><?php the_title(); ?></h1>
				
				<div class="article"><?php the_content(); ?></div>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<div class="tags"> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>
				
			</div>
			
			<?php edit_post_link('Edit Bitch!','','.'); ?>
			

		<?php endwhile; endif; ?>
	</div>
</div>


