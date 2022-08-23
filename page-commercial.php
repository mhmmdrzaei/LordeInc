<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="">
	<section class="commericalSide">
		<h1>
	      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	        <?php bloginfo( 'name' ); ?>
	      </a>
	    </h1>
	    <h2 class="gs_reveal"><?php the_title(); ?></h2>

		<section class="commercialItems">
			<?php $args = array( 
				'post_type' => 'commercial', 
				'order' => 'ASC',
				'posts_per_page' => -1
				 );
			  query_posts( $args ); // hijack the main loop
			  while ( have_posts() ) : the_post();
			    ?>
			    <section class="commercialItemEach ">
			    	<a href="<?php the_permalink(); ?>" class="gs_reveal gs_reveal_fromLeft">

			    					<?php the_title(); ?>


			    	</a>
			    	<figure class="hide"><?php the_post_thumbnail('large'); ?></figure>
			    </section>

			    
			   <?php
			  endwhile;
			  ?>
			  <?php
			  wp_reset_query();
			  ?> 
		</section>


	</section>
		
</main>
<?php get_footer(); ?>
