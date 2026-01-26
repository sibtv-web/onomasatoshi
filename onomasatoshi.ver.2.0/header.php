<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">


<!-- favicon -->
<link rel="icon" href="<?php echo esc_url( get_theme_file_uri('favicon.ico') ); ?>">
<!-- OGP / SNS -->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
<meta property="og:url" content="<?php echo esc_url( home_url( add_query_arg( array(), $wp->request ) ) ); ?>">
<meta property="og:image" content="<?php echo get_theme_file_uri(); ?>/assets/images/kv/ogp.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Twitterアカウント">
<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
<link rel="stylesheet" href="https://use.typekit.net/ybk1yun.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link href="<?php echo get_theme_file_uri(); ?>/assets/css/splide.min.css" rel="stylesheet">
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<!-- splide.js -->
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/js/splide.min.js"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/js/splide-extension-auto-scroll.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header <?php if(is_front_page() || is_home()){echo "front";} ?>">
  <div class="hamburger" id="hamburger">
    <span></span>
    <span></span>
  </div>
</header>
<nav class="site-nav" id="site-nav">
  <div class="footer-contents">
    <div class="footer-box">
      <div class="footer-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI</a></div>
      <div class="footer-box__inner">
        <nav class="footer-nav-1">
          <div class="footer-title">Contents</div>
              <ul class="footer-nav-flex">
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                    <?php
                    $latest_discography = get_posts([
                        'post_type' => 'discography',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ]);
                    $latest_discography_url = !empty($latest_discography) ? get_permalink($latest_discography[0]->ID) : '';
                    ?>
                <li><a href="<?php echo esc_url($latest_discography_url); ?>" class="release-btn">最新リリース情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a></li>
                <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">プロフィール</a></li>
                <li><a href="<?php echo esc_url(home_url('/discography/')); ?>">ディスコグラフィ</a></li>
                <li><a href="<?php echo esc_url( home_url('/#anchor-qa') ); ?>">小野正利への質問</a></li>
                <li><a href="https://goodsshop.onomasatoshi.com/" target="_blank">グッズ</a></li>
                <li><a href="https://fanicon.net/fancommunities/4196" target="_blank">ファンクラブ</a></li>
                <li><a href="https://www.galneryus.jp/" target="_blank">GALNERYUS</a></li>
                <li><a href="http://sound-s.jp/" target="_blank">Bese</a></li>
              </ul>
        </nav>
        <nav class="footer-nav-2">
          <div class="footer-title">Information</div>
            <ul class="footer-nav-col">
              <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
              <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a></li>
            </ul>
        </nav>
        <nav class="footer-nav-3">
          <div class="footer-nav-link">
            <div class="footer-title">SNS</div>
            <ul class="footer-nav-col">
              <li><a href="https://x.com/onomasatoshi_of" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_x.svg" alt="">X</a></li>
              <li><a href="https://www.tiktok.com/@masatoshiono_official" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_tiktok.svg" alt="">TikTok</a></li>
              <li><a href="https://www.youtube.com/channel/UCtA4OYVdyh0F4HcHFUgZ1_A" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_youtube.svg" alt="">Youtube</a></li>
            </ul>
          </div>
          <div>
            <div class="footer-title">Music</div>
            <ul class="footer-nav-col">
              <li><a href="https://music.apple.com/jp/artist/%E5%B0%8F%E9%87%8E%E6%AD%A3%E5%88%A9/585568726" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="">Apple Music</a></li>
              <li><a href="https://open.spotify.com/intl-ja/artist/2R1ubdXY4sUiDqsCtoAVUE" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_spotify.svg" alt="">Spotify</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</nav>
