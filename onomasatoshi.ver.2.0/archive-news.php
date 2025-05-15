<?php
	get_header();
?>
<main>
<article>
		<section id="sec-news">
			<div class="breadcrumb"><?php echo breadcrumb(); ?></div>
			<h2 class="page-title">NEWS</h2>
			<div id="archive-news">
					<section>
						<h3 class="section-title"><span class="title-decoration">NEWS一覧</span></h3>
					</section>
				<ul id="news">
					<?php
						$postsPerPage = 10;	// 表示枚数
						$offset   = $paged === 0 ? 0 : ($paged - 1) * $postsPerPage;	// ページャー設定
						$args = array(
							'posts_per_page' => $postsPerPage,
							'post_type'		 => 'news',
							'post_status'	 => 'publish',
							'order'			 => 'DESC',
							'paged'          => $paged
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
							while($the_query->have_posts()):
								$the_query->the_post();
					?>
						<li class="news">
							<a class="news-list clearfix opa" href="<?php echo get_permalink(); ?>">
								<p class="post-head news-date"><?php the_time('Y.m.d'); ?></p>
								<div class="post-content"><?php echo the_title(); ?></div>
							</a>
						</li>
					<?php
							endwhile;
							wp_reset_postdata();
						endif;
					?>
				</ul>
				<?php
				global $wp_query;
					$total_results = $wp_query->found_posts;
				  $paginateArgs = array(
					'format' => '?paged=%#%',
					'total' => $wp_query->max_num_pages
				);
				?>
					<div <?php if($total_results>$postsPerPage){ echo 'id="paginate"';} ?> ><?php echo paginate_links($paginateArgs); ?></div>
				<?php wp_reset_postdata(); ?>
			</div>
			<!-- <div id="news-twitter">
				<div id="follow-btn"><a href="https://twitter.com/onomasatoshistv?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @onomasatoshistv</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
				<div><a data-chrome="noheader nofooter noborders transparent" class="twitter-timeline" width="900px" height="400px" href="https://twitter.com/onomasatoshistv?ref_src=twsrc%5Etfw">Tweets by onomasatoshistv</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
			</div> -->

		</section>
</article>
</main>
<?php get_footer(); ?>
