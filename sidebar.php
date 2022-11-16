<article class="p-gmenu">
  <button class="c-hamburger js-hamburger"><span></span></button>
  <aside class="p-gmenu--inner">
    <?php 
      wp_nav_menu(

        array(
          // 'theme_location'   => 'gmenu',
          'container'        => false,
          'menu_class'       => 'p-gmenu__list c-side-by-side-menu',
          'add_li_class'     => 'item',
          'add_a_class'      => 'title'
          
        )); ?>
          
</article>
