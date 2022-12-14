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
    wp_enqueue_script('bundle', get_theme_file_uri() . '/src/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('swiper', get_theme_file_uri() . '/swiper/css/swiper-bundle.min.css', array('cssStyle'), '1.0.0', false);
    wp_enqueue_style('Noto+Sans+JP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;900&display=swap', array());
    wp_enqueue_style('Noto+Serif+JP', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700&display=swap', array());
    wp_enqueue_style('Zen Maru Gothic', '//fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500&display=swap', array());
    wp_enqueue_style('M+PLUS+1', '//fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600&display=swap', array());
    wp_enqueue_style('Shippori Antique', '//fonts.googleapis.com/css2?family=Shippori+Antique&display=swap', array());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '4.7.0');
    wp_enqueue_style('modern-css-reset', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0');
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
            'name'              => _x( 'Classifications', 'taxonomy general name' ),
            'singular_name'     => _x( 'Classification', 'taxonomy singular name' ),
            'search_items'      => __( 'Search Classifications' ),
            'all_items'         => __( 'All Classifications' ),
            'parent_item'       => __( 'Parent Classification' ),
            'parent_item_colon' => __( 'Parent Classification:' ),
            'edit_item'         => __( 'Edit Classification' ),
            'update_item'       => __( 'Update Classification' ),
            'add_new_item'      => __( 'Add New Classification' ),
            'new_item_name'     => __( 'New Classification Name' ),
            'menu_name'         => __( 'Classification' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'classification' ),
        );

    register_taxonomy('classification', 'product', $args);
}
