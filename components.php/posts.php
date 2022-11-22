<?php
  $tag_posts = get_posts(array(
      'post_type' => 'post', // 投稿タイプ
      'posts_per_page' => 6, // 表示件数
      'orderby' => 'date', // 表示順の基準
      'order' => 'DESC' // 昇順・降順
    ));
  global $post;
  if($tag_posts): foreach($tag_posts as $post): setup_postdata($post); ?>
    
  <!-- ループはじめ -->
  <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
  <p><?php the_time('Y/m/d') ?></p>
  <!-- ループおわり -->
    <?php
      $days = 7; //Newを表示させたい期間の日数
      $today = date_i18n('U');
      $entry = get_the_time('U');
      $kiji = date('U',($today - $entry)) / 86400 ;
      if( $days > $kiji ){
      echo 'New!';
      }
    ?>  
<?php endforeach; endif; wp_reset_postdata(); ?>