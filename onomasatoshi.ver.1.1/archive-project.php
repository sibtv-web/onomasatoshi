<?php
// リダイレクト先のURLへ転送
$url = 'https://www.onomasatoshi.com/';
header('Location: ' . $url, true);

// 出力を終了
exit;
?>
<main>
<article>
		<section id="sec-news">
			<div class="breadcrumb"><?php echo breadcrumb(); ?></div>
			<h2 class="page-title">プロジェクト</h2>
			<div id="archive-news">
					<section>
						<h3 class="section-title"><span class="title-decoration">プロジェクト一覧</span></h3>
					</section>
				<ul id="news">
					<?php
						$postsPerPage = 10;	// 表示枚数
						$offset   = $paged === 0 ? 0 : ($paged - 1) * $postsPerPage;	// ページャー設定
						$args = array(
							'posts_per_page' => $postsPerPage,
							'post_type'		 => 'project',
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

		</section>
</article>
</main>
<?php get_footer(); ?>
