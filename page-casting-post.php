<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="pageCasting">
	<section class="MobileMenu">
	  <h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
	    <button class="menuClick">Menu</button>
	    <button class="closeClickMenu">x</button>
	</section>
	<section class="mainPageSide castingPageSide">
	  <h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
	  <section class="mainPageSideInner" style="background: <?php the_field('background_color', 'option'); ?>">
	  <div class="castingInfo">
	    <?php the_field('casting_&_booking_info_text', 'option'); ?>
	    <!-- <a href="mailto:<?php the_field('lorde_inc_email', 'option'); ?>"><?php the_field('lorde_inc_email', 'option'); ?></a> -->
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
	
	  <section class="moreLinks">
	    <button class="missionMore missionMoreModel">
	      Mission
	    </button>
	    <section class="casting">
	      <?php 
	        $post   = get_post( 19 );
	      
	       ?>
	       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


	    </section>
	    <!-- <button class="morePress">Press</button> -->
	    <!-- <a href="<?php the_field('journal_link','option') ?>" target="_blank">Journal</a> -->
	    <?php if( have_rows('social_links', 'options') ): ;?>
	      <?php while( have_rows('social_links', 'options') ): the_row(); ?>
	        <a href="<?php the_sub_field('link_social_info'); ?>" target="_blank"><?php the_sub_field('link_label'); ?></a>
	        <?php endwhile; ?>
	       </section>
	    <?php endif; ?>
	  </section>
	  	<p class="moreinfoCasting">
	  		commercial portfolio available upon request
	  		<a href="mailto:<?php the_field('lorde_inc_email', 'option'); ?>"><?php the_field('lorde_inc_email', 'option'); ?></a>
	  	</p>

	  </section>
	</section>
	  <section class="mission modelMissionMid" style="background: <?php the_field('background_color', 'option'); ?>">
	  	<section class="missionInner modelMissionInner">
	  		


	    <?php 
	      $post   = get_post( 48 );

	      $output =  apply_filters( 'the_content', $post->post_content );
	      ?>
	    <h2><?php the_title(); ?></h2>
	    <div class="closeMission closeMissionModelOne">← CLOSE</div>
	    <?php 
	      
	      echo $output;

	     ?>
	     </section>

	  </section>
	<section class="pressMid pressModelMid" style="background: <?php the_field('background_color', 'option'); ?>">
	<section class="pressMidInner">
	  <div class="closeMid">← CLOSE</div>
	  <ul >
	  <?php $argPress = array( 
	    'post_type' => 'press',
	    'posts_per_page' => -1
	     );
	    query_posts( $argPress ); // hijack the main loop
	    while ( have_posts() ) : the_post();
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
	</section>
	<section class="castingPagePosts">
	<div class="inner-masorny">
		<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="casting-post" posts_per_page="1" images_loaded="true" scroll_distance="50" transition="masonry" masonry_selector=".grid-item" masonry_animation="slide-up" masonry_horizontalorder="false"]'); ?>


	
	</div>
		    <!-- <div class="loader"></div> -->


	</section>
</main>

<?php get_footer(); ?>