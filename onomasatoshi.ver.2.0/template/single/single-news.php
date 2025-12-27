<?php get_header(); ?>
<main>
  <div class="container">
    <article>
        <section id="sec-news-single">
            <div id="single-news">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        // 投稿日またはカスタムフィールド「Date」を使用
                        $newsDate  = str_replace("/",".", get_post_meta(get_the_ID(), 'Date', true));
                        $setDate   = !empty($newsDate) ? $newsDate : get_the_time('Y.m.d');
                ?>
                <div id="news-content">
                    <div id="news-date"><?php echo $setDate; ?></div>
                    <div id="news-date"><?php the_field('news_tag'); ?></div>
                    <h2 id="news-title" class="sec-message"><?php the_title(); ?></h2>
                    <div id="news-text"><?php the_content(); ?></div>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </section>
    </article>
  </div>
</main>
<?php get_footer(); ?>
