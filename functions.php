<?php
add_theme_support('menus');
add_theme_support('title-tag');

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
    wp_enqueue_script('jq', get_theme_file_uri('/js/jquery-3.6.1.min.js'), array('jquery'),'', true);
    wp_enqueue_script('bundle', get_theme_file_uri() . '/js/main.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('swiper', get_theme_file_uri() . '/swiper/css/swiper-bundle.min.css', array('cssStyle'), '1.0.0', false);
    wp_enqueue_style('Noto+Sans+JP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;900&display=swap', array());
    wp_enqueue_style('Noto+Serif+JP', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700&display=swap', array());
    wp_enqueue_style('Zen Maru Gothic', '//fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500&display=swap', array());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '4.7.0');
    wp_enqueue_style('modern-css-reset', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0');
    wp_enqueue_style('cssStyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'readScript');

function add_my_scripts() {
    wp_enqueue_script('swiper-js', get_theme_file_uri() . '/swiper/swiper-bundle.min.js', array('bundle'), '1.0.0', true);
    wp_enqueue_script('slider', get_theme_file_uri() . '/js/slider.min.js', array('swiper-js'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_my_scripts' );

//複数のメニューを登録する場合
register_nav_menus(array(
    'header_menu'  => 'gmenu',
));


// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

/*グローバルメニューのliのid,classを削除*/
// add_filter('nav_menu_css_class', 'wp_navtag_remove', 100, 1); //liのclassを強制的に全削除
// add_filter('nav_menu_item_id', 'wp_navtag_remove', 100, 1); //liのidを強制的に削除
// add_filter('page_css_class', 'wp_navtag_remove', 100, 1); //これはテーマによって記述しなくても良い場合がありますが、念の為記述しておいてください
// function wp_navtag_remove($var)
// {
//     return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
// }
