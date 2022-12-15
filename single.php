<?php while ( have_posts() ) : the_post(); ?>


    <article>

      <?php get_header(); ?>

      <?php the_content(); ?>

    </article>
<?php endwhile; ?>