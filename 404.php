<?php get_header(); ?>

<?php if (is_404()) : ?>

  <div id="overlay" class="c-overlay"></div>

  <main class="l-main--is-404">

    <article class="c-space-narrow">
      <section class="c-background-opacity p-intro">

        <h1 class="p-intro__logo">
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tsuruten_logo20230124-2.png" alt="tsuruten-web.com" class="c-margin-center">
          </div>
        </h1>

        <article class="p-intro__button-special">
          <div class="u-button-special soap_wrap">
            <a class="soap" href="<?php
                                  $page = get_page_by_path('concept');
                                  echo esc_url(get_permalink($page->ID));
                                  ?>">Concept
            </a>
          </div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/crow.png" alt="好奇心旺盛なカラス" class="u-button-special__img">
        </article>
        <!-- button-group -->

      </section>
      <!-- p-intro -->

    </article>

  <?php endif; ?>
  </main>

  <!-- l-primary  -->

  <?php get_footer(); ?>