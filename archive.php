<?php get_header(); ?>

<section class="p-main-visual">

  <div style="background-image: url(
    <?php echo esc_url(get_template_directory_uri()); ?>/img/tree-woods.jpg)" class="p-main-visual">

    <h2 class="p-main-visual__title">
      <p class="c-title--section p-main-visual__title-main"><?php the_archive_title(); ?></p>
    </h2>
  </div>
</section>
<!-- main-visual-->

<div class="l-wrapper p-wrapper">
  <main class="l-main--products p-main--products">
    <article class="l-search">
      <?php get_template_part("components/archive"); ?>

      <?php wp_link_pages(); ?>
    </article>
    <!-- pages -->

  </main>
  <aside class="l-sidebar p-sidebar">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php get_footer(); ?>