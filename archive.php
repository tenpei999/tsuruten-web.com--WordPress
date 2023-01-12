<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="p-main-visual"style="background-image: url(
  <?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">

  <h2 class="p-main-visual__title">
    <p class="c-title--section p-main-visual__title-main"><?php the_archive_title(); ?></p>
  </h2>
</section>
<div class="l-wrapper p-wrapper">
  <main class="l-main--products p-main--products">
  <?php the_post_thumbnail(); ?>

<section class=" c-card__contents-area">
  <section class="c-card__text-area">
    <h3 class="c-card__title">
      <?php the_title(); ?>
    </h3>
    <?php get_single(); ?>
    <!-- preg_match_all から取得-->
    <?php

    //小見出しh2の文字数を除外して抜粋を開始
    $start = 6;

    //取得する長さ（文字数）
    $length = 100;

    //指定した文字数を出力
    echo mb_substr(get_the_excerpt(), $start, $length), ',,,続きを読む';

    ?>
  </section>
  <section class="c-card__btn-area">
    <button class="c-card__btn">
      <a href="<?php echo get_permalink(); ?>">詳しく見る</a>
    </button>
  </main>
  <aside class="l-sidebar p-sidebar">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php endwhile; else : ?>
  <p>記事がありません。</p>
<?php endif; ?>

<?php get_footer(); ?>