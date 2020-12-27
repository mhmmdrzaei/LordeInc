<?php //index.php is the last resort template, if no other templates match ?>

<main>
	<section class="mainPageSide">
		<?php get_header(); ?>
		<div class="castingInfo">
			<?php the_field('casting_&_booking_info_text', 'option'); ?>
			<a href="mailto:<?php the_field('lorde_inc_email', 'option'); ?>"><?php the_field('lorde_inc_email', 'option'); ?></a>
		</div>
		<div class="submissionsInfo">
			<?php if( have_rows('submissions','option') ): ?>
			    <?php while( have_rows('submissions','option') ): the_row(); ?>
			    	<p class="submissionHeader"><?php the_sub_field('submissions_header','option'); ?></p>
			    	<p class="submissionsBody">
			    		<?php the_sub_field('submissions_info_text','option') ?>
			    	</p>
			    	


			    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<section class="mainPageMid">
		
	</section>
	<section class="mainPagePosts">
		
	</section>
</main>

<?php get_footer(); ?>