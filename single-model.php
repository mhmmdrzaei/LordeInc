<main>
  <section class="pageSide">
    <section class="header">
      <?php get_header(); ?>
    </section>
    <section class="modelDetails">
      <p class="modelName"><?php the_title(); ?></p>
      <div class="measurements">
        <p class="modelHeight"><?php the_field('model_heigh'); ?></p>
        <p>
          chest: <?php the_field('model_chest'); ?>
        </p>
        <p>
          waist: <?php the_field('model_waist'); ?>
        </p>
        <p>
          hips: <?php the_field('hips'); ?>
        </p>
        <p>
          pants: <?php the_field('pants_size'); ?>
        </p>
        <p>
          shirt: <?php the_field('shirt_size'); ?>
        </p>
        <p>
          shirt: <?php the_field('shoe_size'); ?>
       </p>
      </div>
      <div class="instagram">
        <?php if( have_rows('model_instagram') ): ?>
            <?php while( have_rows('model_instagram') ): the_row(); 

                // Get sub field values.
                $handle = get_sub_field('instagram_handle');

                ?>

                <a href="<?php the_sub_field('instagram_link');?>"><?php echo $handle; ?></a>

            <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </section>
  </section>
  <section class="pageMain">
    <?php 
    $images = get_field('gallery');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>
      <div class="gallery">
        <?php foreach( $images as $image ): ?>
          <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endforeach; ?>
      </div>

    <?php endif; ?>
   <div id="nav-below" class="navigation">
      <p class="nav-previous"><?php previous_post_link('%link', '&larr; Previous Model'); ?></p>
      <p class="nav-next"><?php next_post_link('%link', 'Next Model &rarr;'); ?></p>
    </div>
    
  </section>

</main>
      <?php get_footer(); ?>

