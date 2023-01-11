<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main class="l-main--post">

      <section class="p-main-visual">

        <div style="background-image: url(
        <?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)" class="p-main-visual">

          <h2 class="p-main-visual__title">
            <p class="p-main-visual__title-sub">
              Blog
            </p>
            <p class="c-title--section p-main-visual__title-main">
              <?php the_title(); ?>
            </p>
          </h2>
        </div>
      </section>

      <?php the_content(); ?>
    </main>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>