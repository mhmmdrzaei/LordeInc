<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="oDPxTdySwVM-X6rrbCCL6zOS8v9zZHP-KylRr-ptGsU" />
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/Akkurat-Leicht.otf" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/Akkurat-Normal.otf" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/Akkurat-Mono.otf" as="font" type="font/woff2" crossorigin="anonymous">


  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>
<style>
    ::-webkit-scrollbar {
    background: <?php the_field('background_color', 'option'); ?>;
    }
</style>

<body <?php body_class(); ?> style="background: <?php the_field('background_color', 'option'); ?>">



