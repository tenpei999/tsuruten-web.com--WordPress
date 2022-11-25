<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>img/favicon.png">
  <?php wp_head(); ?>
</head>
<body>

<header class="l-header p-header c-background-color-white">

  
  <section class="l-header__inner">
    <h1 class="c-margin-center p-header__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="WebエンジニアTsuruのポートフォリオサイトです。">
    </h1>
    
    <?php get_search_form(); ?>
    
  </section>
  
  <?php get_sidebar(); ?>
</header>
    <!-- header  -->
