<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="p-main-visual"style="background-image: url(
  <?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)">

  <h2 class="p-main-visual__title">
    <p class="c-title--section p-main-visual__title-main">
      <?php the_title(); ?>
    </p>
  </h2>
</section>
<div class="l-wrapper p-wrapper">
  <main class="l-main--products p-main--products">
    <?php the_content(); ?>
    <?php wp_pagenavi(); ?>
  </main>
  <aside class="l-sidebar p-sidebar">
    <?php get_sidebar(); ?>
  </aside>
</div>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>