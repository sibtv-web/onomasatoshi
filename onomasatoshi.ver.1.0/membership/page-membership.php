<?php
/*
Template Name: page-membership
*/
	get_header();
?>
<article>
		<section id="sec-membership">
			<div class="breadcrumb"><?php echo breadcrumb(); ?></div>
			<h2 class="page-title">小野正利　ファン専用ページ</h2>
		  <div id="membership-content">
		    <h3>会員専用ページ</h3>
				<p class="live-info">
					Masatoshi Ono Birthday Live 2016 “STRAIGHT ROAD”<br>
					2016年　1月16日（土）<br>
					shibuya duo MUSIC EXCHANGE
				</p>
				<div id="live-movie-wrap">
					<p>ー　Freeze　－</p>
					<div class="live-movie">
						<video controls poster="<?php echo get_template_directory_uri(); ?>/assets/images/membership/movie1.png">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web1.mp4" type="video/mp4">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web1.webm" type="video/webm">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web1.mp4" type="video/quicktime">
						</video>
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/membership/sib.png" alt="シブヤテレビジョンロゴ">
					</div>

					<p>ー　君を想い出にしたくない　－</p>
					<div class="live-movie">
						<video controls poster="<?php echo get_template_directory_uri(); ?>/assets/images/membership/movie2.png">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web2.mp4" type="video/mp4">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web2.webm" type="video/webm">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web2.mp4" type="video/quicktime">
						</video>
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/membership/sib.png" alt="シブヤテレビジョンロゴ">
					</div>

					<p>ー　キレイだね　ー</p>
					<div class="live-movie">
						<video controls poster="<?php echo get_template_directory_uri(); ?>/assets/images/membership/movie3.png">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web3.mp4" type="video/mp4">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web3.webm" type="video/webm">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video/membership/web3.mp4" type="video/quicktime">
						</video>
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/membership/sib.png" alt="シブヤテレビジョンロゴ">
					</div>
				</div>
			</div><!-- sec-membership-page -->
		  </div>
		</section>
</article>
<?php get_footer(); ?>
