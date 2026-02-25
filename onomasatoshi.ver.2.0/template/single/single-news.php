<?php get_header(); ?>
<div class="header-blur"></div>      

<main>
  <div class="single-container">
    <div class="simple-header">
        <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI<br>OFFICIAL SITE</a></div>
    </div>

    <article>
        <section class="sec-news-single">
            <div class="single-news">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        // 投稿日またはカスタムフィールド「Date」を使用
                        $newsDate  = str_replace("/",".", get_post_meta(get_the_ID(), 'Date', true));
                        $setDate   = !empty($newsDate) ? $newsDate : get_the_time('Y.m.d');
                ?>
                <div id="news-content">
                    <div class="news-item-flex">
                        <div class="news-date"><?php echo $setDate; ?></div>
                        <?php
                          $news_tags = get_the_terms( get_the_ID(), 'news-category' );
                          $tag_labels = [
                            'live'  => 'ライブ',
                            'event' => 'イベント',
                            'media' => 'メディア',
                            'release' => 'リリース',
                            'other' => 'その他',
                          ];
                        ?>
                        <?php if (! empty($news_tags) && ! is_wp_error($news_tags)): ?>
                          <?php foreach ($news_tags as $tag): ?>
                            <div class="news-tags">
                              <span><?php echo esc_html( $tag_labels[ $tag->slug ]); ?></span>
                            </div>
                          <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <h2 class="news-title" class="sec-message"><?php the_title(); ?></h2>

                    <?php if (has_post_thumbnail() && !is_singular('news')): ?>
                        <div class="news-thumbnail">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="news-text"><?php the_content(); ?></div>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>

                <!-- シェアボタン -->

                <?php
                $share_url   = urlencode( get_permalink() );
                $share_title = urlencode( get_the_title() );
                ?>

                <div class="sns-share">

                    <!-- X -->
                    <div class="sns-share-item">
                      <a
                        href="https://twitter.com/intent/tweet?text=<?php echo $share_title; ?>&url=<?php echo $share_url; ?>"
                        target="_blank"
                        rel="noopener"
                        class="sns-btn x"
                      >
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_x.svg"alt="">
                            <span class="text">Xにポスト</span>
                            <span class="sns-share-chevron"></span>

                        </a>
                    </div>

                    <!-- Facebook（URLコピー） -->
                    <!-- <div class="sns-share-item">
                      <button
                        type="button"
                        class="sns-btn facebook js-copy-url"
                        data-url="<?php echo esc_url( get_permalink() ); ?>"
                      >
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_facebook.svg" alt="">
                        <span class="text">Facebookでシェア</span>
                        <span class="sns-share-chevron"></span>
                      </button>
                    </div> -->

                    <!-- LINE -->
                    <div class="sns-share-item">
                      <a
                        href="https://social-plugins.line.me/lineit/share?url=<?php echo $share_url; ?>"
                        target="_blank"
                        rel="noopener"
                        class="sns-btn line"
                      >
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_line.svg" alt="">
                            <span class="text">LINEでシェア</span>
                            <span class="sns-share-chevron"></span>
                        </a>
                    </div>
                </div>
                <div class="circle-arrow--left">
                <a href="#" class="js-back">
                    <span class="arrow"></span>
                    <span class="label">Back</span>
                </a>
                </div>
        </section>
    </article>
  </div>
</main>
<?php get_footer(); ?>
