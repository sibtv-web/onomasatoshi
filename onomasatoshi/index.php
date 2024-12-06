<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage onomasatoshi
 * @since onomasatoshi 1.0
 */

	get_header();

	//接続情報
?>

	<main id="top-page">
		<?php //-----------------↓↓↓↓↓ PCサイトのメインスライダーエリア ↓↓↓↓↓----------------- ?>
		<article>
			<section id="sec-top">
				<div id="main-image" class="opa">
				 <div class="slider clearfix">
				 	 <div>
						 <a href="https://onomasatoshi.lnk.to/YouretheOnly25th" target="_blank">
							 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/topnews/ono_youretheonly-201907_banner.jpg" width="980" height="300" alt="YouretheOnly25th" />
							 <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/topnews/ono_youretheonly-201907_banner_sp.jpg" alt="YouretheOnly25th" />
						 </a>
					 </div>
					 <div>
						 <a href="<?php echo home_url(); ?>/news/ライブdvd『now-and』がonos-shopにて販売開始/">
							 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/topnews/2019onomasatoshi_Nowand_banner.jpg" width="980" height="300" alt="Nowand" />
							 <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/topnews/2019onomasatoshi_Nowand_banner_sp.jpg" alt="Nowand" />
						 </a>
					 </div>
					 <div>
						 <a href="<?php echo home_url(); ?>/special/">
							 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/topnews/ono_album_vs_banner.jpg" width="980" height="300" alt="album vs" />
							 <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/topnews/ono_album_vs_banner_sp.jpg" alt="album vs" />
						 </a>
					 </div>
		     </div>
				</div>
				<div class="content-wrap">
				  <div id="top-content">
				    <div id="top_banner" class="clearfix">
				      <ul class="clearfix">
				        <li class="opa">
									<a href="https://goodsshop.onomasatoshi.com/">
				          	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/goods-bnr.jpg" alt="goods" />
										<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/goods-bnr-sp.jpg" alt="goods" />
									</a>
								</li>
				        <li class="opa">
									<a href="http://www.galneryus.jp/" target="_blank">
										<img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/galneryus-bnr.jpg" alt="galneryus" />
										<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/galneryus-bnr-sp.jpg" alt="galneryus" />

									</a>
								</li>
				        <li class="opa">
									<a href="http://sound-s.jp/" target="_blank">
										<img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/bese-bnr.jpg" alt="bese" />
										<img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/bese-bnr-sp.jpg" alt="bese" />
									</a>
								</li>
				      </ul>
				    </div>
						<div id="top-news-wrap" class="clearfix">
							<div id="top-twitter" class="pc">
								<div><a href="https://twitter.com/onomasatoshistv?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @onomasatoshistv</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
								<div><a data-chrome="noheader nofooter noborders noscrollbar transparent" class="twitter-timeline" height="700px" href="https://twitter.com/onomasatoshistv?ref_src=twsrc%5Etfw">Tweets by onomasatoshistv</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
							</div>
					    <div id="top-news" class="content">
							  <h2>New Information</h2>
								<div id="top-news-content">
									<ul class="news-list">
									<?php
										$show_num = 5;	// 表示枚数
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
									?>
										<li class="news">
											<a class="clearfix opa" href="<?php echo get_permalink(); ?>">
												<p class="news-date"><?php the_time('Y.m.d'); ?></p>
												<div class="post-content"><?php echo the_title(); ?></div>
											</a>
										</li>
									<?php
											endwhile;
											wp_reset_postdata();
										endif;
									?>
									</ul>
								<div id="news-more"><a class="opa" href="<?php echo home_url(); ?>/news/">MORE</a></div>
								</div>
							</div>
							<div id="top-twitter" class="sp">
								<div><a href="https://twitter.com/onomasatoshistv?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @onomasatoshistv</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
								<div><a data-chrome="noheader nofooter noborders noscrollbar transparent" class="twitter-timeline" height="700px" href="https://twitter.com/onomasatoshistv?ref_src=twsrc%5Etfw">Tweets by onomasatoshistv</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
							</div>
						</div>
					</section>
				<?php wp_reset_postdata(); ?>
				</div>
				</div>
		</article>
	</main>
<?php get_footer(); ?>
