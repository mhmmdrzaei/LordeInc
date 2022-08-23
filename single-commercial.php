<?php get_header(); ?>
<main>
  <section class="commercialMenu">
      <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
    <a href="/commercial">&#x2190; Commercial Casting</a>

  </section>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <section class="castingPageContent">

    <section class="castingPageInfo gs_reveal gs_reveal_fromLeft">
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php the_field('casting_description'); ?>
    </section>
        <?php 
        $video = get_field('casting_embedded_content');

        if( !empty( $video ) ): ?>
          <section class="embeddedVideo">
            <section class="videoContainer"   aria-label="Embedded content container">
               <?php the_field('casting_embedded_content'); ?>
            </section>
          </section>

        <?php endif; ?>

        <?php 
        $videoFile = get_field('short_video');

        if( !empty( $videoFile ) ): ?>
          <section class="videoFile">
            <section class="videoContainer gs_reveal gs_reveal_fromRight"   aria-label="Embedded content container">
               <video class="vid" muted controls controlsList="nodownload nofullscreen noremoteplayback">
                 <source src="<?php the_field('short_video'); ?>" type="video/mp4">
                 Your browser does not support the video tag.
               </video>  
            </section>
          </section>


        <?php endif; ?>

        <?php if( have_rows('casting_images' ) ): ?>
            <?php while( have_rows('casting_images') ): the_row(); ?>
                    <?php
                    $horizontalimage = get_sub_field('casting_image_commercial');
                    if( $horizontalimage ):

                        // Image variables.
                        $url = $horizontalimage['url'];
                    
                        $alt = $horizontalimage['alt']; ?>
                        <?php 
                            if( get_sub_field('image_width') == 'Full Width' ): ?>
                        <figure class="fullWidthHorizontal gs_reveal gs_reveal_fromRight">
                          <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        </figure>

                    <?php elseif ( get_sub_field('image_width') == 'Half Width' ): ; ?>
                      <figure class="halfWidthcasting gs_reveal">
                        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                      </figure>
                     <?php endif; ?>
                   <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>
  </section>
  
   <?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>