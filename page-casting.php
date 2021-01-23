<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="pageCasting">
	<section class="mainPageSide castingpageSide">
	    <h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
		<section class="castingInfo">
			<p class="moreinfoCasting">
				commecial portfolio available upon request
				<a href="mailto:<?php the_field('lorde_inc_email', 'option'); ?>"><?php the_field('lorde_inc_email', 'option'); ?></a>
			</p>
		</section>
	</section>
	<section class="castingPagePosts">
		<div class="grid">
		<div class="grid-sizer"></div>
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php

			if( have_rows('casting_info') ):
			    while( have_rows('casting_info') ) : the_row();?>
			    	<div class=" grid-item grid-item--width<?php the_sub_field('image_width_casting'); ?>">
			    		<img src="<?php the_sub_field('casting_image'); ?>" alt="<?php the_sub_field('image_title'); ?>">
			    		<div class="castingNameOverlay" style="background-color: <?php the_field('background_color', 'option'); ?>"></div>
			    		<div class="textCasting">
			    			<?php the_sub_field('image_title'); ?>
			    		</div>
			    	</div>
			    	

			    	<?php 
			    endwhile; ?>
			    <?php  
			endif;

			?>
			


		<?php endwhile; // end the loop?>
		</div>

	</section>
</main>

<?php get_footer(); ?>