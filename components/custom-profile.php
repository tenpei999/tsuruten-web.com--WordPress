<div class="p-bookdetail-field--wrap">
  <ul class="p-bookdetail-field">
    <li class="p-bookdetail-field__author">著者：<?php echo get_post_meta( $post -> ID, 'book_author', true ); ?></li>
    <li class="p-bookdetail-field__price">金額：<?php echo get_post_meta( $post -> ID, 'book_price', true ); ?>円</li>
  </ul>
</div>