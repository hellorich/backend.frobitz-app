<?php
/**
 * Zork Wordpress theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  </head>
  
  <body>
    <img alt="<?php echo get_bloginfo( 'name' ); ?>" class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
  </body>
</html>