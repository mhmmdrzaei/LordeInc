<?php get_header(); ?>
<main class="homePage">
  <section class="MobileMenu">
    <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <button class="menuClick">Menu</button>
      <button class="closeClickMenu">x</button>
  </section>
  <section class="mainPageSide">
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
      <button class="morePress">Press</button>
      <a href="#" target="_blank">Journal</a>
      <a href="https://www.instagram.com/lordeinc/" target="_blank">Instagram</a>
    </section>
    </section>
  </section>
    <section class="mission modelMissionMid" style="background: <?php the_field('background_color', 'option'); ?>">
      <section class="missionInner">

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
  <section class="modelPageMid">
    <section class="modelDetails">
      <h2 class="modelHeader">
        Model
      </h2>
      <p class="modelName"><?php the_title(); ?></p>
            <div class="instagram">
        <?php if( have_rows('model_instagram') ): ?>
            <?php while( have_rows('model_instagram') ): the_row(); 

                // Get sub field values.
                $handle = get_sub_field('instagram_handle');

                ?>

                <a href="<?php the_sub_field('instagram_link');?>"><i class="fab fa-instagram"></i></a>

            <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="measurements">
        <h4>Measurements</h4>
        <p class="modelHeight">height: <?php the_field('model_heigh'); ?></p>
        <p>
          chest: <?php the_field('model_chest'); ?>
        </p>
        <p>
          waist: <?php the_field('model_waist'); ?>
        </p>
        <p>
          hips: <?php the_field('hips'); ?>
        </p>
        <br>
        <p>
          pants: <?php the_field('pants_size'); ?>
        </p>
        <p>
          shirt: <?php the_field('shirt_size'); ?>
        </p>
        <p>
          shoes: <?php the_field('shoe_size'); ?>
       </p>
      </div>
      <div id="nav-below" class="navigation">
         <p class="nav-previous"><?php previous_post_link('%link', '&#8592; Previous'); ?></p>
         <p class="nav-next"><?php next_post_link('%link', 'Next &#8594;'); ?></p>
       </div>

    </section>
    <section class="mainmodelImgs">

    <?php 
    $images = get_field('gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>

      <ul class="bxslider">
        <?php foreach( $images as $image ): ?>
          <li><img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endforeach; ?></li>
      </ul>

    <?php endif; ?>
    
  </section>
</section>
</main>

 <?php get_footer(); ?>

