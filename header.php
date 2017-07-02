<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' )?>">
  <?php wp_head(); ?>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>
<body>

  <div class="header">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/logo.png ?>" alt="Colégio São José" style="width:9%; margin-left:20%;">
          </a>
        </div>
        <!--/.nav-collapse -->
        <?php require_once('assets/includes/wp-bootstrap-navwalker.php'); ?>
        <?php
            wp_nav_menu( array(
                'menu'              => 'Menu',
                'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse navbar-collapse-custom collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
      </div>
      <!--/.container-fluid -->
    </nav>

  </div>
