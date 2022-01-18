<?php get_header(); ?>
<main class="homePage modelMain">
  <section class="MobileMenu">
    <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <button class="menuClick">Menu</button>
      <button class="closeClickMenu">x</button>
  </section>
  <section class="mainPageSide modelMainPageSide">
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
      <a href="https://www.instagram.com/lordeinc/" target="_blank">Instagram</a>
    </section>
    </section>
  </section>
    <section class="mission modelMissionMid" style="background: <?php the_field('background_color', 'option'); ?>">
      <section class="missionInner mMissionInner">

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
      <section class="modelDetailsInner">
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
          <?php 
            $height = get_field('model_heigh');
            if( $height ) {; ?>
              <p class="modelHeight">height: <?php the_field('model_heigh'); ?></p>
            <?php } ?> 

          <?php 
            $chest = get_field('model_chest');
            if( $chest) {; ?>
              <p>
                chest: <?php the_field('model_chest'); ?>
              </p>            
            <?php } ?>  
          <?php 
            $waist = get_field('model_waist');
            if( $waist ) {; ?>
              <p>
                waist: <?php the_field('model_waist'); ?>
              </p>
          <?php } ?>  
          <?php 
            $hips = get_field('hips');
            if( $hips ) {; ?>
              <p>
                hips: <?php the_field('hips'); ?>
              </p>
          <?php } ?>  
        <br>
        <?php 
          $pants_size = get_field('pants_size');
          if( $pants_size ) {; ?>
            <p>
              pants: <?php the_field('pants_size'); ?>
            </p>
        <?php } ?> 
        <?php 
          $shirt_size = get_field('shirt_size');
          if( $shirt_size ) {; ?>
            <p>
              shirt: <?php the_field('shirt_size'); ?>
            </p>
        <?php } ?> 
        <?php 
          $shoe_size = get_field('shoe_size');
          if( $shoe_size ) {; ?>
          <p>
          shoes: <?php the_field('shoe_size'); ?>
          </p>
        <?php } ?> 


      </div>
      <div id="nav-below" class="navigation">
         <p class="nav-previous"><?php previous_post_link('%link', '&#8592; Previous'); ?></p>
         <p class="nav-next"><?php next_post_link('%link', 'Next &#8594;'); ?></p>
       </div>
      </section>

    </section>
    <section class="mainmodelImgs">
    <ul class="bxslider">
    <?php 
      $images = get_field('gallery');
      foreach( $images as $image ):
      $data_type = pathinfo($image['url'], PATHINFO_EXTENSION);
      if ($data_type == 'mp4') {?>
        <li>
        <video class="vid" muted controls controlsList="nodownload nofullscreen noremoteplayback">
          <source src="<?php echo $image['url'];?>" type="video/mp4">
          Your browser does not support the video tag.
        </video>  
        <!-- <button id='btnPlayPause' class='play' title='play' accesskey="P"></button> -->

      </li>
      <?php } else { ?>
        <li>
      <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
    </li>
    <?php
      } endforeach; 
    ?>
  </ul>
    
  </section>
</section>
</main>
 <?php get_footer(); ?>


