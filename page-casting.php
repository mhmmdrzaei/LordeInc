<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main>
	<section class="mainPageSide">
	    <h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
		<section class="castingInfo">
			<p>
				commecial portfolio available upon request
				<a href="mailto:<?php the_field('lorde_inc_email', 'option'); ?>"><?php the_field('lorde_inc_email', 'option'); ?></a>
			</p>
		</section>
	</section>
	<section class="mainPagePosts">

		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php
			if( have_rows('casting_info') ):
			    while( have_rows('casting_info') ) : the_row();?>
			    <section class="castingEach">
			    	<section class="castinginfoEach">
			    		
			    		<?php the_sub_field('casting_text_info'); ?>
			    	</section>
			    	<?php 
			    	$images = get_sub_field('casting_images');
			    	if( $images ): ?>
			    	<section class="castingImages">
			    	    	<?php foreach( $images as $image ): ?>
			    	    	     <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			    	    	<?php endforeach; ?>
			    	<?php endif; ?>
			    	</section>
			  	</section>
			    	<?php 
			    endwhile; ?>
			    <?php  
			endif;

			?>
			


		<?php endwhile; // end the loop?>


	</section>
</main>

<?php get_footer(); ?>