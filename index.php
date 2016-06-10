<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/typeplate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>

		<?php wp_head(); ?>
  </head>
  <body>

 
 
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>






  <?php wp_footer(); ?>
  </body>
</html>