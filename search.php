<?php get_header(); ?>
<main>
<section class="p-main-visual">

<div style="background-image: url(
<?php echo get_template_directory_uri(); ?>/img/tree-woods.jpg)" class="p-main-visual">

  <h2 class="p-main-visual__title">
    <p class="p-main-visual__title-sub">
      検索結果
    </p>
    <p class="c-title--section p-main-visual__title-main"><?php echo get_search_query (); ?></p>
  </h2>
</div>
</section>
<!-- main-visual-->

  <article class="l-search">
    <article>
      <?php if (is_category()) : ?>
        <?php echo category_description(); ?>
      <?php endif; ?>
    </article>
    <?php get_template_part("components/archive"); ?>
    
    <?php wp_link_pages(); ?>
  </article>
  <!-- pages -->

</main>

</div>

<!-- container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>