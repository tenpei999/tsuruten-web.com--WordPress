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
  <li>
    <h3 class="post-title">
      <a href="<?php the_permalink() ?>"><p>
        <?php
          if ( mb_strlen( $post->post_title, 'UTF-8' ) > 40 ) {
            $title = mb_substr( $post->post_title, 0, 40, 'UTF-8' );
            echo $title . '…';
          } else {
            echo $post->post_title;
          }
        ?>
        </p></a>
    </h3>
    <div class="post-right">
      <p class="parentheses-left" style="opacity: 0;">(</p>
      <p class="parentheses-left">(</p>
      <p class="date">
        <?php the_time('Y/m/d') ?>
      </p>
      <p class="new">
      <?php
        $days = 7; //Newを表示させたい期間の日数
        $today = date_i18n('U');
        $entry = get_the_time('U');
        $kiji = date('U',($today - $entry)) / 86400 ;
        if( $days > $kiji ){
          echo 'New!';
        }
      ?>  
      </p>
      <p class="parentheses-right" style="opacity: 0;">)</p>
    </div>
  </li>
  <!-- ループおわり -->
<?php endforeach; endif; wp_reset_postdata(); ?>