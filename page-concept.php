<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="swiper-concept">
  <!-- Additional required wrapper -->
<ul class="swiper-wrapper">
  <!-- Slides -->
  <li class="swiper-slide">
    <div class="slide-1">
      <span>
      </span>
    </div>
  </li>
  <li class="swiper-slide">
    <div class=" slide-2">
      <span>
      </span>
    </div>
  </li>
  <li class="swiper-slide">
    <div class=" slide-3">
    </div>
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