<?php get_header(); ?>
<main class="l-main">
<section class="p-main-visual">

<div style="background-image: url(
<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)" class="p-main-visual">

  <h2 class="p-main-visual__title">
    <p><?php echo get_search_query (); ?></p>
  </h2>
</div>
</section>
<!-- main-visual-->

  <article class="l-contents_pages p-contents_pages c-background-color--base-white">
    <article class="c-contents_pages">
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