<?php

get_header(); ?>
<main>
<article>
		<section id="sec-news-single">
			<!-- <div class="breadcrumb"><?php echo breadcrumb(); ?></div> -->
			<h1 class="page-title"></h1>
			<div id="single-news">


			<div id="news-content">
				<h2 id="news-title" class="sec-message"><?php echo get_the_title(); ?></h2>
				<div id="news-text"><?php echo the_content(); ?></div>
			<?php wp_reset_postdata(); ?>
			</div>
		</section>
</article>
<?php get_footer(); ?>
