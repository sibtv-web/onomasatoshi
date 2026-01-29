<!DOCTYPE html>
<html lang="ja">
<head>

<!-- Google Tag Manager -->
	<script async="" src="https://scripts.clarity.ms/0.8.51/clarity.js"></script><script type="text/javascript" async="" src="https://www.clarity.ms/tag/v7dtow7mlv?ref=gtm"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-9C3G516BNF&amp;cx=c&amp;gtm=4e61m0"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TJTGHWRK"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TJTGHWRK');</script>
	<!-- End Google Tag Manager -->

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<!-- favicon、touch-icon -->
<!-- <link rel="icon" href="<?php echo esc_url( get_theme_file_uri('favicon.png') ); ?>"> -->
<link rel="apple-touch-icon" sizes="180x180"
      href="<?php echo esc_url( get_theme_file_uri('assets/images/icon/apple-touch-icon.png') ); ?>">
<link rel="icon" sizes="192x192"
      href="<?php echo esc_url( get_theme_file_uri('assets/images/icon/android-chrome.png') ); ?>">

<!-- OGP / SNS -->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:image" content="<?php echo esc_url( get_theme_file_uri('assets/images/kv/ogp.jpg') ); ?>">
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJTGHWRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
                <li><a href="<?php echo esc_url($latest_discography_url); ?>" class="release-btn">リリース</a></li>
                <li><a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a></li>
                <li><a href="<?php echo esc_url( home_url('/news/category/live/') ); ?>#tab">スケジュール</a></li>
                <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">バイオグラフィ</a></li>
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
