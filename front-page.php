<?php get_header(); ?>

<?php if (is_home() || is_front_page()) : ?>
  <article id="loading"></article>

  <div id="overlay" class="c-overlay modal-fade-out"></div>
  <div class="p-modal-window modal-fade-out">
    <button class="js-close p-modal-window__button-close">Close</button>


    <?php

    $page_obj = get_page_by_path('modal-window');
    $page = get_post($page_obj);

    echo $page->post_content;   //本文を表示

    ?>

  </div>
  <a class="p-modal-window__message-close modal-fade-out">と じ る</a>
  <section class="l-primary" id="primary">
    <aside class="p-animation-background">
      <ul class="p-animation-background__layer">
        <li class="layer-1 bg-lazy"></li>
        <li class="layer-1__inner bg-lazy"></li>
        <li class="layer-2 bg-lazy mountain"></li>
        <li class="layer-2-2 bg-lazy mountain"></li>
        <li class="layer-2-3 bg-lazy mountain"></li>
        <li class="layer-4 bg-lazy"></li>
        <li class="layer-5 bg-lazy"></li>
        <li class="layer-6 bg-lazy"></li>
        <li class="layer-7 bg-lazy"></li>
        <li class="layer-8 bg-lazy"></li>
      </ul>
      <ul class="p-animation-background__child">
        <li class="layer-9 bg-lazy"></li>
        <li class="layer-10 bg-lazy"></li>
        <li class="layer-11 bg-lazy"></li>
        <li class="layer-12">
          <span class="bg-lazy"></span>
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
                  <p class="hour__length">320h</p>
                </div>
                <ul class="detail">
                  <li class="li">.セマンティックhtml</li>
                  <li class="li">.Bem記法によるクラスの命名</li>
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
                  <p class="hour__length">320h</p>
                </div>
                <ul class="detail">
                  <li class="li">.Flocss</li>
                  <li class="li">.SCSS</li>
                  <li class="li">.CSSアニメーション</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-jquery-50.png" alt="jQuery" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">jQuery</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">133.5h</p>
                </div>
                <ul class="detail">
                  <li class="li">.アニメーションの作成</li>
                  <li class="li">.ライブラリの使用</li>
                  <li class="li">.javascriptへの書き換え</li>
                  <li class="li">.簡単なjavascriptの使用</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-ワードプレス-96.png" alt="WordPress" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">WordPress</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">324.5h</p>
                </div>
                <ul class="detail">
                  <li class="li">.複数ページの運用</li>
                  <li class="li">.テンプレートタグによるコンテンツ読み込み</li>
                  <li class="li">.プラグインの活用</li>
                  <li class="li">.ブロックエディタによるカスタムhtmlの活用</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/github-mark.png" alt="GitHub" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">git/GitHub</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">40.75h</p>
                </div>
                <ul class="detail">
                  <li class="li">.ブランチによるタスク管理</li>
                  <li class="li">.Githubによるプロジェクト管理</li>
                  <li class="li">.チーム開発の経験</li>
                </ul>
              </li>
              <li class="cell__li">
                <div class="img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icons8-adobe-64.png" alt="adobe" class="icon">
                </div>
                <h5 class="title">
                  <p class="c-title--content">AdobeCC</p>
                </h5>
                <div class="hour">
                  <p class="hour__description">学習<br>時間</p>
                  <p class="hour__length">208.5h</p>
                </div>
                <ul class="detail">
                  <li class="li">.AdobeCC環境常備</li>
                  <li class="li">.XDによるカンプ作成及び書き出し</li>
                  <li class="li">.Photoshopによる簡単な画像加工</li>
                  <li class="li">.illustratorによる簡単な画像加工</li>
                  <li class="li">.figmaからのコーディング</li>
                </ul>
              </li>
              
            </ul>
            <!-- <a href="#" class="p-skill__link">
              <p class="c-text--link">詳しくはこちら</p>
            </a> -->
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
                      <small>
                        制作期間:7時間
                      </small>   
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
                        <small>
                          制作期間:7日
                        </small>              
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
    <?php endif; ?>
    </main>
  </section>
  <!-- l-primary  -->

  <?php get_footer(); ?>