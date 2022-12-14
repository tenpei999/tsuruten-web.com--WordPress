<?php while (have_posts()) : the_post(); ?>

  <?php get_header(); ?>

  <main class="l-main--custom-post">

    <section class="p-main-visual">

        <div style="background-image: url(
        <?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>)" class="p-main-visual">

          <h2 class="p-main-visual__title">
            <p class="p-main-visual__title-sub">
              作品紹介
            </p>
            <p class="c-title--section p-main-visual__title-main">
              <?php the_title(); ?>
            </p>
          </h2>
        </div>
    </section>

  </main>

  <?php the_content(); ?>

<?php endwhile; ?>