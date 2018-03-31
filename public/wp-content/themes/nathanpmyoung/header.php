<!DOCTYPE html>
<html>
      <head>
        <meta charset="utf-8">
        <title>La Pizaria</title>
        <?php wp_head(); ?>
      </head>
      <body class="container">
          <div class="image-holder">
                  <a href="<?php echo esc_url(home_url("/")); ?>" >
                      <img class="logo-image" src="<?php echo get_template_directory_uri()."/img/logo.svg"; ?>" alt="Pizzaria Logo">
                  </a>
          </div>
          <div class="header-sidebar">
              <?php
                  $args = array(
                      'theme_location'    => 'social_menu',
                      'container'         => 'div',
                      'container_class'   => 'social',
                      'menu_class'        => 'social-menu',
                      'link_before'       => '<span class="sr-text">'
                      'link_after'        => '</span>'
                  );
                  wp_nav_menu($args);
              ?>
              <div class="information">
                  <p>Address</p>
                  <p>Telephone</p>
              </div>
          </div>
          <?php
              $args = array(
                  'theme_location'    => 'header_menu',
                  'container'         => 'nav',
                  'container_class'   => 'site-nav',
                  'menu_class'        => 'site-nav-menu',
              );
              wp_nav_menu($args);
          ?>
