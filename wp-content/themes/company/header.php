<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Bình</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom.css">
    <script src="<?php bloginfo('template_url'); ?>/assets/js/lib/fontawesome.c67e12c3d4.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1 class="logo"><a href="<?php echo home_url(); ?>"> Logo</a></h1><a class="btn-menu-open" href="#"><i class="fa-solid fa-bars fa-2x"></i></a>
      <nav><a class="btn-menu-close" href="#"><i class="fa-solid fa-close fa-2x"></i></a>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-nav',
            'menu' => 'ul',
            'menu_class' => 'list-menu',
          )
        )
      ?>
      </nav>
    </header>