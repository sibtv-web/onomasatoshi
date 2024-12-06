<?php
	get_header();
?>
<main>
<article>
		<section id="sec-news-single">
			<div class="breadcrumb"><?php echo breadcrumb(); ?></div>
			<h1 class="page-title">NEWS 詳細</h1>
			<div id="single-news">


			<?php
				if(have_posts()):
					while(have_posts()):
						the_post();
						//投稿日or開催日を表示
						$newsDate  = str_replace("/",".",post_custom('Date'));
						$setDate   = !empty($newsDate)? $newsDate: get_the_time('Y.m.d');
			?>
			<div id="news-content">
				<h2 id="news-title" class="sec-message"><?php echo get_the_title(); ?></h2>
				<div id="news-date"><?php echo $setDate; ?></div>
				<div id="news-text"><?php echo the_content(); ?></div>
			<?php
				endwhile;
			endif;
			?>
			<?php wp_reset_postdata(); ?>
			</div>
		</section>
</article>

<?php get_footer(); ?>
