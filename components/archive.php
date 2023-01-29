<div class="l-card__inner">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="p-card c-card">
          <div class="img">
            <a href="<?php echo get_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          </div>

          <section class=" c-card__contents-area">
            <section class="c-card__text-area">
              <?php
              $categories = get_the_category();
              if ($categories) {
                echo '<ul class="category-list">';
                foreach ($categories as $category) {
                  echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
                echo '</ul>';
              }
              ?>
              <?php echo get_the_date(); ?>
              <h3 class="c-card__title">
                <a href="
                <?php echo get_permalink(); ?>
                ">
                  <?php the_title(); ?>
                </a>
              </h3>
              <div class="text">
                <?php get_single(); ?>
                <!-- preg_match_all から取得-->
                <?php

                //取得する長さ（文字数）
                $length = 110;

                //指定した文字数を出力
                echo mb_substr(get_the_excerpt(), $length); ?><a href="<?php echo get_permalink(); ?>">続きを読む</a>
                <!-- preg_match_all から取得-->
              </div>
            </section>
          </section>
        </div>

      <?php endwhile;
    else : ?>
      <p>記事がありません</p>
    <?php endif; ?>
    <!-- チーズバーガー -->
  </article>
</div>