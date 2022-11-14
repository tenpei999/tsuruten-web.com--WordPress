<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>img/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <?php wp_head(); ?>
</head>
<body>

<header class="l-header p-header c-background-color-white">
  <?php wp_nav_menu(); ?>

      <section class="l-header__inner">
        <h1 class="c-margin-center p-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="WebエンジニアTsuruのポートフォリオサイトです。">
        </h1>

        <?php get_search_form(); ?>
        
      </section>
      <span></span>
    </header>
    <!-- header  -->
