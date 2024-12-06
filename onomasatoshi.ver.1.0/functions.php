<?php
/**
 * サムネイル表示設定
 */
add_theme_support('post-thumbnails',array('post','movie'));

add_image_size('movie', 360, 200, true);

add_theme_support('title-tag');
/**
 * メニューバーの特定項目を非表示
 */
function remove_menus () {
	global $menu;
	unset($menu[5]);			// 投稿
}
add_action('admin_menu', 'remove_menus');

/**
 * カスタム投稿追加（News）
 */
add_action('init','news_post');
function news_post() {
	//カスタム投稿タイプ登録
	$labels = array(
		'menu_name'          => 'news',
		'all_items'          => 'news',
		'name'               => 'news',
		'singular_name'      => 'news',
		'add_new'            => '新規追加',
		'add_new_item'       => '新規news追加',
		'edit_item'          => 'news編集',
		'new_item'           => '新規news',
		'view_item'          => 'newsを表示',
		'search_items'       => 'news検索',
		'not_found'          => 'newsが見つかりません',
		'not_found_in_trash' => 'ゴミ箱にnewsはありません',
		'parent_item_colon'  => ''
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 15,
		'supports'           => array('title','editor','thumbnail'),
		'has_archive'        => true
	);


	register_post_type('news',$args);
}

/**
 * カスタム投稿追加（プロジェクト）
 */
add_action('init', 'project_post');
function project_post() {
	// カスタム投稿タイプ登録
	$labels = array(
		'menu_name'          => 'プロジェクト',
		'all_items'          => 'プロジェクト一覧',
		'name'               => 'プロジェクト一覧',
		'singular_name'      => 'プロジェクト一覧',
		'add_new'            => '新規追加',
		'add_new_item'       => '新規プロジェクト追加',
		'edit_item'          => 'プロジェクトを編集',
		'new_item'           => 'プロジェクトの情報',
		'view_item'          => 'プロジェクトを表示',
		'search_items'       => 'プロジェクトを検索',
		'not_found'          => 'プロジェクトが見つかりません',
		'not_found_in_trash' => 'ゴミ箱にプロジェクトはありません',
		'parent_item_colon'  => ''
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','editor','excerpt'),
		'has_archive'        => true
	);

	register_post_type('project', $args);
}


//パンくずリスト
function breadcrumb(){
	global $post;
	$str = '';
	if(!is_home() && !is_admin()){
		//div#breadcrumb
		$str .= '<div id="breadcrumb-wrap"><div id="breadcrumb" class="clearfix">';
		//homeリンク
		$str .= '<a href="'.home_url().'/" class="opa">ホーム</a> > ';

		if(is_tax()){
		//// タクソノミーページ
			$tax = get_queried_object();
			$slug = get_taxonomy($tax->taxonomy)->rewrite['slug'].'/'.$tax->slug;
			$parentSlug = get_taxonomy($tax->taxonomy)->object_type[0];
			$name = $tax->name;
			$parentName = get_post_type_object($parentSlug)->label;
			$str .= '<a href="'.home_url().'/'.$parentSlug.'/" class="opa">'.$parentName.'</a> > ';
			$str .= $name;
		}else if(is_archive()){
		//// カスタム投稿ページ
			$arch = get_queried_object();
			$slug = $arch->rewrite['slug'];
			$name = $arch->labels->name;
			$str .= $name;
		}else if(is_page()){
		//// 固定ページ
			$page = get_queried_object();
			$slug = $page->post_name;
			$name = $page->post_title;
			if($slug == 'thanks'){
				$str .= '<a href="'.home_url().'/contact/">contact</a> > ';
				$str .= $name;
			}else{
				$str .= $name;
			}
		}else if(is_single()){
		//// 詳細ページ
			$sing = get_queried_object();
			$slug = $sing->post_name;
			$parentSlug = $sing->post_type;
			$name = $sing->post_title;
			$parentName = get_post_type_object($parentSlug)->label;
			$str .= '<a href="'.home_url().'/'.$parentSlug.'/" class="opa">'.$parentName.'</a> > ';
			$str .= $name;
		}else if(is_404()){
		//// 404ページ
			$str .= '404 NotFound';
		}
		//div#breadcrumb閉じタグ
		$str .= '</div></div>';
		echo $str;
	}
}
