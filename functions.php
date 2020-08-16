<?php
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); //新たに追加
    add_theme_support( 'automatic-feed-links' );
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


    // Gutenberg用のCSSを読み込み、ビジュアルエディターを見やすくする
    add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets_custom_demo' );
    function gutenberg_stylesheets_custom_demo() {
        //現在適用しているテーマのeditor-style.cssを読み込む
        $editor_style_url = get_theme_file_uri('/css/editor-style.css');
        wp_enqueue_style( 'theme-editor-style', $editor_style_url );
    }



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

    // テーマチェック：待機状態のコメント返信のスクリプトを見つけることができません。プラグインとテーマの移行/2.7/Enhanced Comment Displayをご覧ください。
    function demo_script() {
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'demo_script' );

    // テーマチェック：コンテンツの幅が定義されていません。
    if ( ! isset( $content_width ) ) $content_width = 525;