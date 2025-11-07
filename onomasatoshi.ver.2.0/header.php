<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage onomasatoshi
 */
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TJTGHWRK');</script>
	<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php is_front_page() ? bloginfo('name') : wp_title('|', true, 'right').bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contact/mfp.statics/mailformpro.css" type="text/css">
	<link rel="stylesheet" media="(min-width: 640px)" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-pc.css">
	<link rel="stylesheet" media="(max-width: 640px)" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-sp.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common-sp.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick-theme.css">
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick/slick.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43773989-1"></script> -->
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config',);
		</script>
	<script>
    $(function(){
      $('.slider').slick({
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000
      });
    });
  </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJTGHWRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="fb-root"></div>
	<header>
		<article>
			<section id="header" class="clearfix">
				<div id="header-up" class="clearfix">
					<h1 id="logo-area" class="clearfix">
				    <a id="logo" class="opa" href="<?php echo home_url(); ?>">
							<img  class="pc"src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="小野正利オフィシャルサイトのロゴ">
							<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sp.png" alt="小野正利オフィシャルサイトのロゴ">
						</a>
						<a id="logo-ap-text" href="<?php echo home_url(); ?>">
							<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/logotext-sp.png" alt="小野正利オフィシャルサイトのロゴ">
						</a>
				  </h1>
					<div id="header-right">
          <div id="header-sns" class="clearfix tiktok">
						 <a class="opa" href="https://www.tiktok.com/@masatoshiono_official" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tiktok.png" alt="tiktok"></a>
					 </div>
					 <div id="header-sns" class="clearfix youtube">
						 <a class="opa" href="https://www.youtube.com/channel/UCtA4OYVdyh0F4HcHFUgZ1_A" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="youtube"></a>
					 </div>
					 <div id="header-sns" class="clearfix">
						 <a class="opa" href="https://twitter.com/onomasatoshi_of" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.png" alt="x"></a>
					 </div>
					 <div id="spMenuBtn" class="sp">
						 <img id="menu-btn-o" class="menu-btn on"  alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-menu.png" alt="開く">
						 <img id="menu-btn-c" class="menu-btn" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-c.png" alt="閉じる">
					 </div>
					</div>
				</div>
		<nav class="nav-wrap">
			<ul id="h-nav" class="clearfix">
				<li class="h-nav-list"><a class="opa" href="<?php echo home_url(); ?>/news/">NEWS</a></li>
				<li class="h-nav-list"><a class="opa" href="<?php echo home_url(); ?>/profile/">PROFILE</a></li>
				<li class="h-nav-list"><a class="opa" href="<?php echo home_url(); ?>/discography/">DISCOGRAPHY</a></li>
				<li class="h-nav-list"><a class="opa" href="https://fanicon.net/fancommunities/4196" target="_blank">FAN CLUB</a></li>
				<li class="h-nav-list"><a class="opa" href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
			</ul>
		</nav>
		<div id="headline-news" class="clearfix">
	    <div id="headline">HEADLINE NEWS</div>
	    <ul id="news-slide" class="slide clearfix">
				<?php
					$show_num = 3;	// 表示枚数
					$args = array(
						'posts_per_page' => $show_num,
						'post_type'		 => 'news',
						'post_status'	 => 'publish',
						'order'			 => 'DESC'
					);
					$the_query = new WP_Query($args);

					if($the_query->have_posts()):
						while($the_query->have_posts()):
							$the_query->the_post();
							$cft_NewsTag = post_custom('NEWS-TAG');
							$cft_NewsLink = post_custom('NEWS-LINK');
				?>
					<li class="news">
						<?php if(!empty($cft_NewsLink)){ ?>
						<a class="clearfix opa" href="<?php echo $cft_NewsLink; ?>">
						<?php }else{ ?>
						<a class="clearfix opa" href="<?php echo get_permalink(); ?>">
						<?php } ?>
							<div class="post-content"><?php echo the_title(); ?></div>
						</a>
					</li>

				<?php
						endwhile;
						wp_reset_postdata();
					endif;
				?>
	    </ul>
	  </div>
	    </section>
    </article>
	</header>
