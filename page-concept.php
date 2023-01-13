<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="swiper-concept">
  <!-- Additional required wrapper -->
<ul class="swiper-wrapper">
  <!-- Slides -->
  <li class="swiper-slide">
    <div class="slide-1">
      <section class="slide-inner">
        <h2 class="title">
          <p class="c-title--section c-margin-center">

            <?php

            $page_obj = get_page_by_path('concept-1');
            $page = get_post($page_obj);

            echo $page->post_title;   //本文を表示

            ?>

          </p>
        </h2>
        <?php

        $page_obj = get_page_by_path('concept-1');
        $page = get_post($page_obj);

        echo $page->post_content;   //本文を表示

        ?>
      </section>
    </div>
  </li>
  <li class="swiper-slide">
    <div class=" slide-2">
      <section class="slide-inner">
        <h2 class="title">
          <p class="c-title--section c-margin-center">

            <?php

            $page_obj = get_page_by_path('concept-2');
            $page = get_post($page_obj);

            echo $page->post_title;   //本文を表示

            ?>

          </p>
        </h2>
        <?php

        $page_obj = get_page_by_path('concept-2');
        $page = get_post($page_obj);

        echo $page->post_content;   //本文を表示

        ?>
      </section>
    </div>
  </li>
  <li class="swiper-slide">
    <div class=" slide-3">
      <section class="slide-inner">
        <h2 class="title">
          <p class="c-title--section c-margin-center">

            <?php

            $page_obj = get_page_by_path('concept-3');
            $page = get_post($page_obj);

            echo $page->post_title;   //本文を表示

            ?>

          </p>
        </h2>
        <?php

        $page_obj = get_page_by_path('concept-3');
        $page = get_post($page_obj);

        echo $page->post_content;   //本文を表示

        ?>
      </section>
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