<?php get_header(); ?>

<?php if (is_home() || is_front_page()) : ?>
  <article id="loading">
    <div class="l-main">
      <article class="spinner">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/catchphrase.png" alt="" id="catchphrase" class="c-shadow p-catchphrase">
      </article>
    </div>
  </article>

  <div id="overlay" class="c-overlay"></div>
  <div class="c-modal-window p-modal-window">
    <button class="js-close p-modal-window__button-close">Close</button>


    <?php

    $page_obj = get_page_by_path('modal-window');
    $page = get_post($page_obj);

    echo $page->post_content;   //本文を表示

    ?>

  </div>
  <div class="c-modal-window p-modal-window--small">
    <p>コンタクトページに飛びますか</p>
    <button class="c-button js-close">はい</button>
    <a href="#" class="button-top js-close">戻る</a>
  </div>
  <section class="l-primary">
    <aside class="p-animation-background">
      <ul class="p-animation-background__layer">
        <li class="layer-1"></li>
        <li class="layer-2"></li>
        <li class="layer-2-2"></li>
        <li class="layer-2-3"></li>
        <li class="layer-3"></li>
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
      </ul>
    </aside>
    <!-- animation-background -->

    <main class="l-main">


      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/catchphrase.png" alt="" id="catchphrase" class="c-shadow p-catchphrase">
      <article class="c-space-narrow">
        <section class="c-background-opacity p-intro">

          <h1 class="p-intro__logo">
            <div>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo2.png" alt="tsuruten-web.com" class="c-margin-center">
              <p class="c-text--sentence">portfolio-site</p>
            </div>
          </h1>
          <article class="p-intro__button-special">
            <button class="u-button-special">
              <a href="#">Concept</a>
            </button>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/crow.png" alt="好奇心旺盛なカラス" class="u-button-special__img">
            <span class="p-intro__button-special--wrap"></span>
          </article>
          <!-- button-group -->

        </section>
        <!-- p-intro -->

        <article class="p-gmenu--table c-background--opacity">
          <button class="p-gmenu__button">
            <p class="c-title--button">もくじ</p>
          </button>
          <ul class="p-gmenu__list in-table">
            <li class="item">
              <a href="#profile">
                <p class="title">私について</p>
              </a>
            </li>
            <li class="item">
              <a href="#skill">
                <p class="title">スキル</p>
              </a>
            </li>
            <li class="item">
              <a href="#products">
                <p class="title">制作物</p>
              </a>
            </li>
            <li class="item">
              <a href="#inquiries">
                <p class="title">お問合せ・制作依頼</p>
              </a>
            </li>
            <li class="item">
              <a href="#posts">
                <p class="title">Blog</p>
              </a>
            </li>
            <li class="item">
              <a href="">
                <p class="title">更新情報</p>
              </a>
            </li>
          </ul>
        </article>

      </article>
      <section id="profile" class="p-profile c-background-opacity">

        <h2 class="title">
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

      <section id="skill" class="c-background-opacity p-skill">
        <h2 class="title">
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

      <section id="products" class="p-products c-background-opacity">

        <h2 class="title">
          <p class="c-title--section c-margin-center">制作物</p>
        </h2>
        <article class="p-products__swiper">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article class="swiper">
                <!-- Additional required wrapper -->
                <ul class="swiper-wrapper">
                  <!-- Slides -->
                  <li class="swiper-slide">
                  <?php
                    $page = get_page_by_path( 'chunta',OBJECT,'product' );
                    $permalink = get_permalink( $page->ID );
                  ?>
                    <a href="<?php echo $permalink; ?>">
                      <space class="img" style="background-image: <?php echo esc_url(get_template_directory_uri()); ?>/img/bird"></space>
                    </a>
                    <article class="card">
                      <div class="card-body">
                        <div class="card-inner">
                          <h5 class="card-title">
                            <p>チュン太</p>
                          </h5>
                          <p class="card-text">
                            制作期間 7時間<br>
                            cssアニメーション<br>
                          </p>
                        </div>
                      </div>
                    </article>
                  </li>
                  <li class="swiper-slide">
                    <space class="img" style="background-image: <?php echo esc_url(get_template_directory_uri()); ?>/img/tree-woods.jpg"></space>
                    <article class="card">
                      <div class="card-body">
                        <div class="card-inner">
                          <h5 class="card-title">作品2</h5>
                          <p class="card-text">
                            制作期間 2ヶ月<br>
                            制作課題<br>
                            コーディング・WordPress化<br>
                          </p>
                        </div>
                      </div>
                    </article>
                  </li>
                  <li class="swiper-slide">
                    <space class="img" style="background-image: <?php echo esc_url(get_template_directory_uri()); ?>/img/ape-g5b12a4480_1280.jpg"></space>
                    <article class="card">
                      <div class="card-body">
                        <div class="card-inner">
                          <h5 class="card-title">ポートフォリオサイト</h5>
                          <p class="card-text">
                            制作期間 4ヶ月<br>
                            デザイン・コーディング・WordPress化<br>
                          </p>
                        </div>
                      </div>
                    </article>
                  </li>
                </ul>
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            </div>
              </article>
        </article>
        <article id="inquiries" class="p-inquiries c-background--opacity">
          <p class="c-title--button c-margin-center p-inquiries__title">お仕事依頼はこちら</p>
          <div class="p-inquiries__button">
            <a class="c-button--inquiries">お仕事ご依頼ページへ</a>
          </div>
        </article>
      </section>
      <!-- p-space-wide -->
      <article class="l-aside--left">
        <section class="p-posts" id="posts">

          <h2>
            <p class="c-title--section c-margin-center">Blog</p>
          </h2>
          <ul class="p-posts__inner">
            <?php get_template_part("components/posts"); ?>
          </ul>
        </section>
      </article>
      <article class="l-aside--right">
        <article class="p-timeline">
          <h2>
            <p class="c-title--section c-margin-center">Twitter</p>
          </h2>
          <a class="twitter-timeline" href="https://twitter.com/Tsuru999ten?ref_src=twsrc%5Etfw " data-tweet-limit="3">Tweets by Tsuru999ten</a></script>
        </article>

      </article>
    <?php endif; ?>
    </main>
  </section>
  <!-- l-primary  -->

  <?php get_footer(); ?>