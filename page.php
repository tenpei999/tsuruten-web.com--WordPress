<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>
  <!-- 固定ページを反映 -->

<!-- container -->
<?php endwhile;
  else : ?>
<p>記事はありません。</p>
<?php endif; ?>

<?php get_footer(); ?>