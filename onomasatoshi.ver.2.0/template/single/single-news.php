<?php get_header(); ?>
<main>
  <div class="single-container">
    <div class="simple-header">
        <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI</a></div>
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
                        <div class="news-tags"><?php the_field('news_tag'); ?></div>
                    </div>
                    <h2 class="news-title" class="sec-message"><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()): ?>
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
                <div class="sns-share">

                    <!-- X -->
                    <div class="sns-share-item">
                        <a
                            href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>"
                            target="_blank"
                            rel="noopener"
                            class="sns-btn x"
                        >
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_x.svg"alt="">
                            <span class="text">Xにポスト</span>
                            <span class="sns-share-chevron"></span>

                        </a>
                    </div>

                        <!-- Facebook -->
                    <div class="sns-share-item">
                        <a
                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>"
                            target="_blank"
                            rel="noopener"
                            class="sns-btn facebook"
                        >
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_facebook.svg"alt="">
                            <span class="text">Facebookでシェア</span>
                            <span class="sns-share-chevron"></span>
                        </a>
                    </div>

                        <!-- Instagram -->
                    <div class="sns-share-item">
                        <button
                            type="button"
                            class="sns-btn instagram"
                            id="share-instagram"
                        >
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_instagram.svg"alt="">
                            <span class="text">ストーリーでシェア</span>
                            <span class="sns-share-chevron"></span>
                        </button>
                    </div>
                </div>
                <div class="circle-arrow--left">
                    <a href="<?php echo home_url('/news/'); ?>">
                        <span class="arrow"></span>
                        <span class="label">Back</span>
                    </a>
                </div>
        </section>
    </article>
  </div>
</main>
<?php get_footer(); ?>
