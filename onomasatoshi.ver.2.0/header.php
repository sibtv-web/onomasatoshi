<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<?php if(is_front_page() || is_home()): ?>
  <title><?php bloginfo('name'); ?>｜最新情報サイト</title>
  <meta name="description" content="サイトのトップページ説明文をここに入れます。最新情報やお知らせをお届け。">
<?php else: ?>
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
<?php endif; ?>

<!-- OGP / SNS -->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
<meta property="og:url" content="<?php echo esc_url( home_url( add_query_arg( array(), $wp->request ) ) ); ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp.png">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Twitterアカウント">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
<link rel="stylesheet" href="https://use.typekit.net/ybk1yun.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="hamburger" id="hamburger">
    <span></span>
    <span></span>
  </div>
</header>
<nav class="site-nav" id="site-nav">
  <a href="<?php echo home_url(); ?>">ホーム</a>

  <!-- 最新リリース情報 -->
  <?php
  $latest_discography = get_posts([
      'post_type' => 'discography',
      'posts_per_page' => 1,
      'orderby' => 'date',
      'order' => 'DESC',
  ]);
  $latest_discography_url = !empty($latest_discography) ? get_permalink($latest_discography[0]->ID) : '';
  ?>
  <a href="<?php echo esc_url($latest_discography_url); ?>" class="release-btn">最新のリリースを見る</a>

  <a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a>
  <a href="<?php echo esc_url(home_url('/profile/')); ?>">プロフィール</a>
  <a href="<?php echo esc_url(home_url('/discography/')); ?>">ディスコグラフィー</a>
  <a href="https://goodsshop.onomasatoshi.com/" target="_blank">グッズ</a>
  <a href="https://fanicon.net/fancommunities/4196" target="_blank">ファンクラブ</a>
  <a href="https://www.galneryus.jp/" target="_blank">GALNERYUS</a>
  <a href="http://sound-s.jp/" target="_blank">Bese</a>
</nav>
