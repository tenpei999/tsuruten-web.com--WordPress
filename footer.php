<footer class="p-footer">

  <!-- conceptページでは非表示 -->
  <?php if (is_page('concept') || is_404()) : ?>

  <?php else : ?>
    <!-- frontページでは白い猪/それ以外なら黒い猪 -->
    <p <?php if (is_front_page() || is_home()) : ?> class="p-page-top is-bright" <?php else : ?> class="p-page-top is-dark" <?php endif; ?>>

      <a href="#primary" <?php if (is_front_page() || is_home()) : ?> class="is-bright" <?php else : ?> class="is-dark" <?php endif; ?>>
        <span>Page Top</span></a>
    </p>
  <?php endif; ?>

  <small class="p-footer__copy c-text-small--white">
    ©2022 tsuruten-web.com
  </small>
</footer>
<?php wp_footer(); ?>
</body>

</html>