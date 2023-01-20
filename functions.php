<?php

function custom_theme_support()
{
    add_theme_support('html5', array(
        'menus',
        'title-tag',
        'search-form',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails'); // 投稿画像の表示
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-background');
    register_nav_menus(array(
        'category_nav' => esc_html__('category navigation', 'tsuruten-web'),
    ));
    add_theme_support('editor-styles');
    add_editor_style();
}
add_action('after_setup_theme', 'custom_theme_support');


//タイトル出力
function change_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'change_title');




function  readScript()
{
    wp_enqueue_script('jq', get_theme_file_uri('/js/jquery-3.6.1.min.js'), array('jquery'), '', true);
    wp_enqueue_script('bundle', get_theme_file_uri() . '/js/main.min.js', array('jquery'), '1.0.0', true);

    $tmp_path_arr = [
        'temp_uri' => get_template_directory_uri(),
    ];

    if (is_page('concept')) {
        $script_path = '/js/concept.min.js';
        
        wp_enqueue_script(
          'bundle2',
          get_theme_file_uri() . $script_path,
          [],
          '1.0.0',
          true
        );
        wp_localize_script('bundle2', 'tmp_path', $tmp_path_arr);
      } 
    wp_enqueue_style('swiper', get_theme_file_uri() . '/swiper/css/swiper-bundle.min.css', array('cssStyle'), '1.0.0', false);
    wp_enqueue_style('Noto+Sans+JP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;900&display=swap', array());
    wp_enqueue_style('Noto+Serif+JP', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700&display=swap', array());
    wp_enqueue_style('Zen Maru Gothic', '//fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500&display=swap', array());
    wp_enqueue_style('M+PLUS+1', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600&display=swap', array());
    wp_enqueue_style('Shippori Antique', '//fonts.googleapis.com/css2?family=Shippori+Antique&display=swap', array());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '4.7.0');
    wp_enqueue_style('cssStyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'readScript');

//Twitter 読み込み速度改善
add_action('wp_footer', function () {

    wp_enqueue_script('lazeload_twitter', get_stylesheet_directory_uri() . '/js/lazyload-twitter.js', [], 'v1.0.0');
}, 11);

function add_my_scripts()
{
    wp_enqueue_script('swiper-js', get_theme_file_uri() . '/swiper/swiper-bundle.min.js', array('bundle'), '1.0.0', true);
    wp_enqueue_script('slider', get_theme_file_uri() . '/js/slider.min.js', array('swiper-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

/* ウイジェット追加
---------------------------------------------------------- */
if (!function_exists('bj_register_sidebars')) {

    function bj_register_sidebars()
    {

        register_sidebar(array(
            'name'          => '人気記事', //ウィジェットの名前
            'id'            => 'popular', //ウィジェットのID
        ));

        register_sidebar(array(
            'name'          => '最新の投稿', //ウィジェットの名前
            'id'            => 'newposts', //ウィジェットのID
        ));

        register_sidebar(array(
            'name'          => 'サイドバー', //ウィジェットの名前
            'id'            => 'sidebar', //ウィジェットのID
        ));
    }

    add_action('widgets_init', 'bj_register_sidebars');
}

//複数のメニューを登録する場合
register_nav_menus(array(
    'header_menu'  => 'gmenu',
));

// function create_custom_fields()
// {
//     add_meta_box(
//         'custom_profile',    //カスタムフィールドブロックに割り当てるID名
//         'プロフィール',
//         'insert_custom_profile',
//         'page',
//         'normal'
//     );
// }
// add_action('admin_menu', 'create_custom_fields');

//入力エリア
// function insert_custom_profile() {
// 	global $post;
// 	echo '： <input type="text" name="book_author" value="'.get_post_meta( $post->ID, 'book_author', true ).'" size="50" style="margin-bottom: 10px;" /> <br>';
// 	echo 'Mail： <input type="text" name="book_price" value="'.get_post_meta( $post->ID, 'book_price', true ).'" size="50" style="margin-bottom: 10px;" /> <br>';
// }

//カスタムフィールドの値を保存
// function save_custom_fields( $post_id ) {

// 	if( !empty( $_POST['book_author'] ) ){
// 		update_post_meta( $post_id, 'book_author', $_POST['book_author'] );
// 	} else {
// 		delete_post_meta( $post_id, 'book_author' );
// 	}

// 	if( !empty( $_POST['book_price'] ) ){
// 		update_post_meta( $post_id, 'book_price', $_POST['book_price'] );
// 	} else {
// 		delete_post_meta( $post_id, 'book_price' );
// 	}
// }
// add_action( 'save_post', 'save_custom_fields' );

/**
 * カスタム投稿タイプ product を登録する。
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_product_init()
{
    $labels = array(
        'name'               => _x('Product', 'post type general name', 'your-plugin-textdomain'),
        'singular_name'      => _x('Product', 'post type singular name', 'your-plugin-textdomain'),
        'menu_name'          => _x('Products', 'admin menu', 'your-plugin-textdomain'),
        'name_admin_bar'     => _x('Product', 'add new on admin bar', 'your-plugin-textdomain'),
        'add_new'            => _x('Add New', 'product', 'your-plugin-textdomain'),
        'add_new_item'       => __('Add New Product', 'your-plugin-textdomain'),
        'new_item'           => __('New Product', 'your-plugin-textdomain'),
        'edit_item'          => __('Edit Product', 'your-plugin-textdomain'),
        'view_item'          => __('View Product', 'your-plugin-textdomain'),
        'all_items'          => __('All Products', 'your-plugin-textdomain'),
        'search_items'       => __('Search Products', 'your-plugin-textdomain'),
        'parent_item_colon'  => __('Parent Products:', 'your-plugin-textdomain'),
        'not_found'          => __('No Products found.', 'your-plugin-textdomain'),
        'not_found_in_trash' => __('No Products found in Trash.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'product'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt')
    );

    register_post_type('product', $args);
}
add_action('init', 'codex_product_init');

add_action('init', 'create_product_taxonomies', 0);

function create_product_taxonomies()
{
    // （カテゴリーのような）階層化したカスタム分類を新たに追加
    $labels = array(
        'name'              => _x('Classifications', 'taxonomy general name'),
        'singular_name'     => _x('Classification', 'taxonomy singular name'),
        'search_items'      => __('Search Classifications'),
        'all_items'         => __('All Classifications'),
        'parent_item'       => __('Parent Classification'),
        'parent_item_colon' => __('Parent Classification:'),
        'edit_item'         => __('Edit Classification'),
        'update_item'       => __('Update Classification'),
        'add_new_item'      => __('Add New Classification'),
        'new_item_name'     => __('New Classification Name'),
        'menu_name'         => __('Classification'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'classification'),
    );

    register_taxonomy('classification', 'product', $args);
}

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}

// searchは5件表示する.archiveは3件表示する
function my_posts_control($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_search()) {
    $query->set('posts_per_page', '5');
    return;
  }
  if ($query->is_archive()) {
    $query->set('posts_per_page', '3');
    return;
  }
}
add_action('pre_get_posts', 'my_posts_control');


//サイト内検索のカスタマイズ
function custom_search($search, $wp_query)
{
  global $wpdb;

  //検索ページ以外だったら終了
  if (!$wp_query->is_search)
    return $search;
  if (!isset($wp_query->query_vars))
    return $search;

  // タグ名・カテゴリ名・カスタムフィールド も検索対象にする
  $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
  if (count($search_words) > 0) {
    $search = '';
    foreach ($search_words as $word) {
      if (!empty($word)) {
        $search_word = $wpdb->_escape("%{$word}%");
        $search .= " AND (
						{$wpdb->posts}.post_title LIKE '{$search_word}'
           
						OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            -- // 検索結果に投稿内容を含めたい場合はコメントアウトを解除

						OR {$wpdb->posts}.ID IN (
							SELECT distinct r.object_id
							FROM {$wpdb->term_relationships} AS r
							INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
							INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
							WHERE t.name LIKE '{$search_word}'
						OR t.slug LIKE '{$search_word}'
						OR tt.description LIKE '{$search_word}'
						)
						OR {$wpdb->posts}.ID IN (
							SELECT distinct p.post_id
							FROM {$wpdb->postmeta} AS p
							WHERE p.meta_value LIKE '{$search_word}'
						)
				) ";
      }
    }
  }

  return $search;
}
add_filter('posts_search', 'custom_search', 10, 2);


// h2をsingle.phpからh2を取得しリスト
function get_single()
{
  //グローバル変数を使う為の宣言
  global $post;
  //マッチングで<h>タグを取得する
  preg_match_all('/<h[2]>.+<\/h[2]>/u', $post->post_content, $matches);
  //取得した<h>タグの個数をカウント
  $matches_count = count($matches[0]);
  if (empty($matches)) {
    //<h>タグがない場合の出力
    echo '<span>Sorry no index</span>';
  } else {
    //<h>タグが存在する場合に<h>タグを出力
    for ($i = 0; $i < $matches_count; $i++) {
      echo  $matches[0][$i];
    }
  }
}

//本体ギャラリーCSS停止
add_filter('use_default_gallery_style', '__return_false');


function gutenberg_support_setup() {
 
  //Gutenberg用スタイルの読み込み
  add_theme_support( 'wp-block-styles' );
 
  //「幅広」と「全幅」に対応
  add_theme_support( 'align-wide' );
 
}
add_action( 'after_setup_theme', 'gutenberg_support_setup' );

function post_has_archive( $args, $post_type ) {

  if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'catArchive'; //任意のスラッグ名
  }
  return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );