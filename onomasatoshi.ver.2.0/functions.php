<?php

// --------------------------------------
// 管理バーを非表示にする
// --------------------------------------
add_filter('show_admin_bar', '__return_false');

// --------------------------------------
// サムネイルとタイトルタグの有効化
// --------------------------------------
add_theme_support('post-thumbnails');
add_image_size('movie', 360, 200, true);
add_theme_support('title-tag');

// --------------------------------------
// 管理画面メニュー非表示（投稿のみ）
// --------------------------------------
function remove_menus() {
	global $menu;
	unset($menu[5]); // 投稿
}
add_action('admin_menu', 'remove_menus');


// --------------------------------------
// サブフォルダページテンプレート登録（最新リリース情報）
// --------------------------------------
add_filter('theme_page_templates', function($templates) {
    $templates['template/page/page-release.php'] = '最新リリース情報';
    return $templates;
});

// ページ編集時にテンプレート適用
add_filter('template_include', function($template) {
    if (is_page()) {
        global $post;
        $page_template = get_page_template_slug($post->ID);
        if ($page_template && file_exists(get_template_directory() . '/' . $page_template)) {
            return get_template_directory() . '/' . $page_template;
        }
    }
    return $template;
});

// --------------------------------------
// カスタム投稿タイプ：News
// --------------------------------------
add_action('init', function() {
    $labels = array(
        'name'               => 'news',
        'singular_name'      => 'news',
        'menu_name'          => 'news',
        'add_new'            => '新規追加',
        'add_new_item'       => '新規news追加',
        'edit_item'          => 'news編集',
        'new_item'           => '新規news',
        'view_item'          => 'newsを表示',
        'search_items'       => 'news検索',
        'not_found'          => 'newsが見つかりません',
        'not_found_in_trash' => 'ゴミ箱にnewsはありません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true, 
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 15,
        'supports'           => array('title','editor','thumbnail'),
        'has_archive'        => true,
    );

    register_post_type('news', $args);
});

// News 個別ページ用テンプレート
add_filter('single_template', function($single) {
    global $post;
    if ($post->post_type === 'news') {
        $template = get_template_directory() . '/template/single/single-news.php';
        if (file_exists($template)) return $template;
    }
    return $single;
});

// News 一覧ページ用テンプレート
add_filter('archive_template', function($archive) {
    if (is_post_type_archive('news')) {
        $template = get_template_directory() . '/template/archive/archive-news.php';
        if (file_exists($template)) return $template;
    }
    return $archive;
});

/**
 * カスタム投稿タイプ（Discography）
 */
function create_discography_post_type() {

    $labels = array(
        'name'               => 'Discography',
        'singular_name'      => 'Discography',
        'menu_name'          => 'Discography',
        'add_new'            => '新規追加',
        'add_new_item'       => 'Discographyを追加',
        'edit_item'          => 'Discographyを編集',
        'new_item'           => '新規Discography',
        'view_item'          => 'Discographyを表示',
        'search_items'       => 'Discographyを検索',
        'not_found'          => '見つかりません',
        'not_found_in_trash' => 'ゴミ箱にありません'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'menu_position'      => 16,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'discography'),
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true, // Gutenberg対応
    );

    register_post_type('discography', $args);
}
add_action('init', 'create_discography_post_type');


// Discography 個別ページ用テンプレート
add_filter('single_template', function($single) {
    global $post;
    if ($post->post_type === 'discography') {
        $template = get_template_directory() . '/template/single/single-discography.php';
        if (file_exists($template)) return $template;
    }
    return $single;
});

// Discography 一覧ページ用テンプレート
add_filter('archive_template', function($archive) {
    if (is_post_type_archive('discography')) {
        $template = get_template_directory() . '/template/archive/archive-discography.php';
        if (file_exists($template)) return $template;
    }
    return $archive;
});

/**
 * Q&A用カスタム投稿タイプ追加
 */
add_action('init', 'qna_post');
function qna_post() {
    $labels = array(
        'name'               => 'Q&A',
        'singular_name'      => 'Q&A',
        'menu_name'          => 'Q&A',
        'all_items'          => 'Q&A一覧',
        'add_new_item'       => '新規Q&A追加',
        'edit_item'          => 'Q&Aを編集',
        'new_item'           => '新しいQ&A',
        'view_item'          => 'Q&Aを表示',
        'search_items'       => 'Q&A検索',
        'not_found'          => 'Q&Aが見つかりません',
        'not_found_in_trash' => 'ゴミ箱にQ&Aはありません'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'q-a'),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array('title'),
        'has_archive'        => true
    );

    register_post_type('q-a', $args);
}

/**
 * ACFチェック用フィールド例：
 * フィールド名：display_qna
 * フィールドタイプ：true/false
 * チェックが入っている投稿だけ表示
 */

// スラッグを自動ですうじにする　対象にしたい投稿タイプ
$auto_id_slug_targets = ['discography', 'news', 'q-a'];

add_action('save_post', function($post_id, $post, $update) {
    global $auto_id_slug_targets;

    // 自動保存やリビジョンは除外
    if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }

    // 対象の投稿タイプ以外は除外
    if (!in_array($post->post_type, $auto_id_slug_targets, true)) {
        return;
    }

    // スラッグが既にある場合は何もしない
    if (!empty($post->post_name)) {
        return;
    }

    // 投稿IDをスラッグに設定
    wp_update_post([
        'ID'        => $post_id,
        'post_name' => $post_id,
    ]);

}, 10, 3);


//モーダル開閉
function my_scripts() {
  wp_enqueue_script(
    'common-js',
    get_theme_file_uri('/assets/js/common.js'),
    array(),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'my_scripts');

// functions.php
function my_theme_enqueue_scripts() {
    wp_enqueue_script('jquery'); // jQuery読み込み
    wp_enqueue_script(
        'common-js',
        get_template_directory_uri() . '/js/common.js',
        array('jquery'), // jQuery依存
        '1.0',
        true // フッターに読み込む
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


//header.php で jQuery を自前で読み込まない
//WordPress 標準の jQuery を利用する
//common.js を wp_enqueue_script で読み込む（推奨）

function my_theme_scripts() {
    // WordPress 標準 jQuery を読み込む
    wp_enqueue_script('jquery');

    // 自作JS
    wp_enqueue_script(
        'common-js',
        get_template_directory_uri() . '/assets/js/common.js',
        array('jquery'), // jQuery に依存
        null,
        true // footerで読み込む
    );

    wp_enqueue_script(
        'player-js',
        get_template_directory_uri() . '/assets/js/player.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


