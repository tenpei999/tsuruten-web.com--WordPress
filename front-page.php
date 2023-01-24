<?php get_header(); ?>

<?php if (is_home() || is_front_page()) : ?>
  <article id="loading">
    <div class="l-main">
      <!-- <article class="spinner">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/catchphrase.png" alt="" id="catchphrase" class="c-shadow p-catchphrase">
      </article> -->
    </div>
  </article>

  <div id="overlay" class="c-overlay"></div>
  <div class="p-modal-window">
    <button class="js-close p-modal-window__button-close">Close</button>


    <?php

    $page_obj = get_page_by_path('modal-window');
    $page = get_post($page_obj);

    echo $page->post_content;   //本文を表示

    ?>

  </div>
  <a class="js-close p-modal-window__message-close">と じ る</a>
  <section class="l-primary">
    <aside class="p-animation-background">
      <ul class="p-animation-background__layer">
        <li class="layer-1"></li>
        <li class="layer-1__inner"></li>
        <li class="layer-2"></li>
        <li class="layer-2-2"></li>
        <li class="layer-2-3"></li>
        <li class="layer-4"></li>
        <li class="layer-5"></li>
        <li class="layer-6"></li>
        <li class="layer-7"></li>
        <li class="layer-8"></li>
      </ul>
      <ul class="p-animation-background__child">
        <li class="layer-9"></li>
        <li class="layer-10"></li>
        <li class="layer-11"></li>
        <li class="layer-12">
          <span></span>
        </li>
      </ul>
    </aside>
    <!-- animation-background -->

    <main class="l-main">

      <article class="c-space-narrow">
        <section class="c-background-opacity p-intro">

          <h1 class="p-intro__logo">
            <div>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tsuruten_logo20230124-2.png" alt="tsuruten-web.com" class="c-margin-center">
            </div>
          </h1>

          <article class="p-intro__button-special">
            <button class="u-button-special">
              <a href="<?php
                        $page = get_page_by_path('concept');
                        echo esc_url(get_permalink($page->ID));
                        ?>">Concept</a>
            </button>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/crow.png" alt="好奇心旺盛なカラス" class="u-button-special__img">
            <span class="p-intro__button-special--wrap"></span>
          </article>
          <!-- button-group -->

        </section>
        <!-- p-intro -->

        <article class="p-gmenu--table">
          <button class="p-gmenu__button">
            <p class="c-title--button p-gmenu__button--title">もくじ</p>
          </button>
          <ul class="p-gmenu__list in-table">
            <li class="item">
              <div id="scene">
                <div class="boxBase">
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="front"></div>
                  <div class="back"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              </div>
              <a href="#profile">
                <p class="title">私について</p>
              </a>
            </li>
            <li class="item">
              <div id="scene">
                <div class="boxBase">
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="front"></div>
                  <div class="back"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              </div>
              <a href="#skill">
                <p class="title">スキル</p>
              </a>
            </li>
            <li class="item">
              <div id="scene">
                <div class="boxBase">
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="front"></div>
                  <div class="back"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              </div>
              <a href="#products">
                <p class="title">制作物</p>
              </a>
            </li>
            <li class="item">
              <div id="scene">
                <div class="boxBase">
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="front"></div>
                  <div class="back"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              </div>
              <a href="#contact">
                <p class="title">お問合せ・制作依頼</p>
              </a>
            </li>
            <li class="item">
              <div id="scene">
                <div class="boxBase">
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="front"></div>
                  <div class="back"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              </div>
              <a href="#posts">
                <p class="title">Blog</p>
              </a>
            </li>
          </ul>
        </article>

      </article>
      <section class="p-profile c-background-opacity">

        <h2 class="title" id="profile">
          <p class="c-title--section c-margin-center">

            <?php

            $page_obj = get_page_by_path('profile');
            $page = get_post($page_obj);

            echo $page->post_title;   //本文を表示

            ?>

          </p>
        </h2>

        <?php

        $page_obj = get_page_by_path('profile');
        $page = get_post($page_obj);

        echo $page->post_content;   //本文を表示
        ?>

      </section>
      <!-- p-profile -->

      <section class="c-background-opacity p-skill">
        <h2 class="title" id="skill">
          <p class="c-title--section">スキル</p>
        </h2>
        <section class="p-skill__site-building">
          <p class="c-text--sentence">HTML&CSSを用いた静的コーディングからPHPによるWordPressのオリジナルテーマの作成までを行うことができます。</p>
          <article class="p-skill__cell">
            <h4 class="title">
              <p class="c-title--sentence">スキルセット</p>
            </h4>
            <ul class="cell">
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-html-5-96.png" alt="html" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">html</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">100h</p>
                </div>
                <ul class="detail">
                  <li class="li">.セマンティックhtml</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-css3-96.png" alt="css" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">css</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">100h</p>
                </div>
                <ul class="detail">
                  <li class="li">.セマンティックhtml</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-jquery-50.png" alt="css" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">Query</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">100h</p>
                </div>
                <ul class="detail">
                  <li class="li">.セマンティックhtml</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-ワードプレス-96.png" alt="css" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">WOrdPress</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">100h</p>
                </div>
                <ul class="detail">
                  <li class="li">.セマンティックhtml</li>
                </ul>
              </li>
            </ul>
            <a href="#" class="p-skill__link">
              <p class="c-text--link">詳しくはこちら</p>
            </a>
          </article>
        </section>
      </section>
      <!-- p-skill -->
      <!-- Slider main container -->

      <section class="p-products c-background-opacity">

        <h2 class="title" id="products">
          <p class="c-title--section c-margin-center">制作物</p>
        </h2>
        <article class="p-products__swiper">

          <article class="swiper">
            <!-- Additional required wrapper -->
            <ul class="swiper-wrapper">
              <!-- Slides -->
              <li class="swiper-slide">
                <?php
                $page = get_page_by_path('chunta', OBJECT, 'product');
                $permalink = get_permalink($page->ID);; ?>
                <a href="<?php echo $permalink; ?>">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bird.png" alt="アイキャッチ画像" class="img">
                </a>
                <section class="card">
                  <div class="card-body">
                    <div class="card-inner">
                      <h5 class="card-title">
                        <p>CSSアニメーション/chunta</p>
                      </h5>
                    </div>
                  </div>
                </section>
              </li>
              <li class="swiper-slide">
                <?php
                $page = get_page_by_path('gotenyama-no-huji-css-animation', OBJECT, 'product');
                $permalink = get_permalink($page->ID);
                ?>
                <a href="<?php echo $permalink; ?>">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/publicdomainq-0011230agtryf-1.jpg" alt="アイキャッチ画像" class="img">
                </a>
                <section class="card">
                  <div class="card-body">
                    <div class="card-inner">
                      <h5 class="card-title">
                        <p>CSSアニメーション/gotenyama</p>
                      </h5>
                    </div>
                  </div>
                </section>
              </li>
              <li class="swiper-slide">
                <?php
                $page = get_page_by_path('chunta', OBJECT, 'product');
                $permalink = get_permalink($page->ID);; ?>
                <a href="<?php echo $permalink; ?>">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bird.png" alt="アイキャッチ画像" class="img">
                </a>
                <section class="card">
                  <div class="card-body">
                    <div class="card-inner">
                      <h5 class="card-title">
                        <p>CSSアニメーション/chunta</p>
                      </h5>
                    </div>
                  </div>
                </section>
              </li>
            </ul>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            </div>
          </article>
        </article>
      </section>
      <section class="p-contact">
        <h2 id="contact">
          <p class="c-title--section c-margin-center">お問い合わせ</p>
        </h2>
        <article class="p-contact__form">
          <?php echo apply_shortcodes('[contact-form-7 id="2298" title="お問合せフォーム"]'); ?>
        </article>
      </section>
      <!-- p-space-wide -->
      <article class="l-aside--right">
        <section class="p-posts">

          <h2 id="posts">
            <a href="
          <?php $page = get_page_by_path('archive');
          echo esc_url(get_permalink($page->ID)); ?>">
              <p class="c-title--section">Blog</p>
            </a>
          </h2>
          <ul class="p-posts__inner">
            <?php get_template_part("components/posts"); ?>
          </ul>
        </section>
      </article>
      <article class="l-aside--left">
        <article class="p-timeline">
          <h2>
            <p class="c-title--section c-margin-center">広告</p>
          </h2>
          <a href="//af.moshimo.com/af/c/click?a_id=3793618&p_id=2011&pc_id=4076&pl_id=27524&url=https%3A%2F%2Fraise-tech.net%2F" rel="nofollow" referrerpolicy="no-referrer-when-downgrade"><img src="https://image.moshimo.com/af-img/1388/000000027524.png" style="border:none;" alt=""></a><img src="//i.moshimo.com/af/i/impression?a_id=3793618&p_id=2011&pc_id=4076&pl_id=27524" width="1" height="1" style="border:none;" alt="">
        </article>

      </article>
    <?php endif; ?>
    </main>
  </section>
  <!-- l-primary  -->

  <?php get_footer(); ?>