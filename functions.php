<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); //新たに追加
    //functions.php
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function wpbeg_script() {
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '4.5.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_deregister_script( 'jquery'); //WordPress 本体の jQuery を登録解除
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' , "", "3.4.1", true );
        wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );





//カスタムメニューの登録
register_nav_menus( array(
    'footer-menu' => 'フッターナビ',
    'main-menu1' => 'グローバルナビ',
    'sns-menu' => 'SNSリンク',
) );

//プラグインのスタイルシートを無効化
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );
function my_deregister_styles() {
    wp_deregister_style( 'wp-pagenavi' );
    wp_deregister_style( 'contact-form-7' );
}

add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width height を削除する
    return $html;
}
