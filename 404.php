<?php get_header(); ?>

<?php if (is_404()) : ?>

  <main class="l-main--is-404">

      <section class="c-background-opacity p-intro">

        <h1 class="p-intro__logo--is-404">
          <div>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tsuruten_logo20230124-2.png" alt="tsuruten-web.com" class="c-margin-center">
          </div>
        </h1>

        <p class="p-404__text">
          404エラー<br>
          <small>お探しのページが見つかりません</small>
        </p>

        <article class="p-intro__button-special">
          <div class="u-button-special soap_wrap">
            <a class="soap is-404" href="<?php echo esc_url(home_url('/')); ?>">トップに戻る
            </a>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/crow.png" alt="好奇心旺盛なカラス" class="u-button-special__img is-404">
          </div>
        </article>
        <!-- button-group -->

      </section>
      <!-- p-intro -->

  <?php endif; ?>
  </main>

  <!-- l-primary  -->

  <?php get_footer(); ?>