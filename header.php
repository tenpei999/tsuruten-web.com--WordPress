<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()) ; ?>img/favicon.png">
  <?php wp_head(); ?>
</head>
<body>

<header class="l-header p-header c-background-color-white">

  
  <section class="l-header__inner">
    <h1 class="c-margin-center p-header__logo">
      <a href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()) ; ?>/img/logo2.png" alt="WebエンジニアTsuruのポートフォリオサイトです。">
      </a>
    </h1>
    
    <?php get_search_form(); ?>
    
  </section>
  
  <article class="p-gmenu">
  <aside class="p-gmenu--inner">
    <?php 
      wp_nav_menu(

        array(
          'theme_location'   => 'header_menu',
          'container'        => false,
          'menu_class'       => 'p-gmenu__list c-side-by-side-menu',
          'add_li_class'     => 'item',
          'add_a_class'      => 'title'
          
        )); ?>
  </aside>        
</article>

</header>
    <!-- header  -->
