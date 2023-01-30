<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<?php if (is_front_page()) : ?>

  <body <?php body_class("l-body_is-front_page"); ?>>
  <?php else : ?>

    <body <?php body_class(); ?>>
    <?php endif; ?>

    <?php wp_body_open(); ?>

    <?php if (is_front_page()) : ?>
      <header class="l-header p-header">
      <?php elseif(is_404()) : ?>
        <header class="l-header p-header is-404">
      <?php else : ?>
        <header class="l-header p-header is-underlayer">
        <?php endif; ?>


        <section class="l-header__inner">
          <h1 class="c-margin-center p-header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logojinuki.png" alt="WebエンジニアTsuruのポートフォリオサイトです。">
            </a>
          </h1>

          <?php get_search_form(); ?>

        </section>

        <article class="p-gmenu">
          <aside class="p-gmenu--inner is-heading">
            <?php
            wp_nav_menu(

              array(
                'theme_location'   => 'header_menu',
                'container'        => false,
                'menu_class'       => 'p-gmenu__list c-side-by-side-menu',
                'add_li_class'     => 'item',
                'add_a_class'      => 'title'

              )
            ); ?>
          </aside>
        </article>

        </header>
        <!-- header  -->