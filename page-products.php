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
<main class="l-main--products">


  <?php the_content(); ?>
</main>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>