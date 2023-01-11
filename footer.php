<footer class="p-footer">
  <p
    <?php if(is_front_page()):?>
      class="p-page-top"
    <?php else: ?>
      class="p-page-top is-dark"
    <?php endif;?>
  >
  <a href="#"
  <?php if(is_front_page()):?>
    class="is-bright"
  <?php else: ?>
    class="is-dark"
  <?php endif;?>
  >
  <span>Page Top</span></a></p>
  <small class="p-footer__copy c-text-small--white">
    ©2022 tsuruten-web.com
  </small>
  </footer>
  <?php wp_footer(); ?> 
</body>
</html>
