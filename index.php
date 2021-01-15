<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main>
	<section class="mainPageSide">
	    <h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
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
		<section class="casting">
			<?php 
				$post   = get_post( 19 );
			
			 ?>
			 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


		</section>	
		<section class="press">
			<ul>
			<?php $argPress = array( 
				'post_type' => 'press',
				'posts_per_page' => 6
				 );
			  query_posts( $argPress ); // hijack the main loop
			  while ( have_posts() ) : the_post();
			    ?>
			   	

			    <li>
			    	<a  class="updateTitle" href="<?php the_field('press_url'); ?>" target="_blank"><?php the_title(); ?></a>
			    </i>

			  <?php
			  endwhile;
			  ?>


			  </ul>

			  
			 	<button class="morePress">+ More</button>
			 


			  <?php
			  wp_reset_query();
			  ?> 
			  
		</section>
	</section>
	<section class="mainPageMid">
		<section class="pressMid">
			<ul >
			<?php $argPress = array( 
				'post_type' => 'press',
				'posts_per_page' => -1
				 );
			  query_posts( $argPress ); // hijack the main loop
			  while ( have_posts() ) : the_post();
			    ?>
			     <?php echo $argPress->current_post;
			    ?>
			    <li>
			    	<a  class="updateTitle" href="<?php the_field('press_url'); ?>" target="_blank"><?php the_title(); ?></a>
			    </li>
				 
			   <?php
			  endwhile;
			  ?>
			  </ul>
			  <?php
			  wp_reset_query();
			  ?> 
			  
		</section>
		<section class="mission">
			<?php 
				$post   = get_post( 48 );

				$output =  apply_filters( 'the_content', $post->post_content );

				echo $output;

			 ?>

		</section>
		
	</section>
	<section class="mainPagePosts">

		<?php $args = array( 
			'post_type' => 'model', 
			'order' => 'DCS'
			 );
		  query_posts( $args ); // hijack the main loop
		  while ( have_posts() ) : the_post();
		    ?>
		    <a href="<?php the_permalink(); ?>">
		    	<?php the_post_thumbnail('large'); ?>
		    	<div class="modelName"><?php the_title(); ?></div>

		    </a>
		   <?php
		  endwhile;
		  ?>
		  <?php
		  wp_reset_query();
		  ?> 
		</div> 
		
	</section>
</main>

<?php get_footer(); ?>