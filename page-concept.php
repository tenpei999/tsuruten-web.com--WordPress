<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="swiper is-concept">
  <!-- Additional required wrapper -->
<ul class="swiper-wrapper">
  <!-- Slides -->
  <li class="swiper-slide">
    <?php
    $page = get_page_by_path('chunta', OBJECT, 'product');
    $permalink = get_permalink($page->ID);; ?>
    <span>
      the_content('chunta');
    </span>
  </li>
</ul>

  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
  <!-- If we need navigation buttons -->
  </div>
</article>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>