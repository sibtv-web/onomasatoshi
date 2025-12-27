<?php get_header(); ?>
<main>
  <div class="container">
    <article>
        <section id="sec-news">
            <h2 class="page-title">NEWS</h2>

            <!-- タブ切替 -->
            <div class="news-tabs">
                <button class="tab active" data-tag="all">ALL</button>
                <button class="tab" data-tag="event">イベント</button>
                <button class="tab" data-tag="live">ライブ</button>
                <button class="tab" data-tag="media">メディア</button>
                <button class="tab" data-tag="other">その他</button>
            </div>

            <div id="archive-news">
                <section>
                    <h3 class="section-title"><span class="title-decoration">NEWS一覧</span></h3>
                </section>

                <ul id="news">
                    <?php
                    $postsPerPage = 10; 
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'posts_per_page' => $postsPerPage,
                        'post_type'      => 'news',
                        'post_status'    => 'publish',
                        'order'          => 'DESC',
                        'paged'          => $paged
                    );
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post();

                            // ACFのチェックボックス（news_tag）を取得
                            $news_tags = get_field('news_tag'); // ['イベント','メディア',...]
                            $tags_string = '';

                            if($news_tags && is_array($news_tags)) {
                                // 日本語タグ → 英語スラッグに変換
                                $tag_map = [
                                    'イベント' => 'event',
                                    'ライブ'   => 'live',
                                    'メディア' => 'media',
                                    'その他'   => 'other'
                                ];
                                $tags_array = [];
                                foreach($news_tags as $t) {
                                    if(isset($tag_map[$t])) {
                                        $tags_array[] = $tag_map[$t];
                                    }
                                }
                                $tags_string = implode(' ', $tags_array);
                            }
                    ?>
                            <li class="news" data-tags="<?php echo esc_attr($tags_string); ?>">
                                <a class="news-list clearfix opa" href="<?php the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div class="news-thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
                                    <?php endif; ?>
                                    <p class="post-head news-date"><?php the_time('Y.m.d'); ?></p>

                                    <?php if($news_tags && is_array($news_tags)): ?>
                                        <p class="news-tags">
                                            <?php foreach ($news_tags as $tag): ?>
                                                <span class="tag"><?php echo esc_html($tag); ?></span>
                                            <?php endforeach; ?>
                                        </p>
                                    <?php endif; ?>

                                    <div class="post-content"><?php the_title(); ?></div>
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
                    'total'  => $wp_query->max_num_pages
                );
                ?>
                <div <?php if($total_results > $postsPerPage){ echo 'id="paginate"'; } ?>>
                    <?php echo paginate_links($paginateArgs); ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </article>
  </div>
</main>

<?php get_footer(); ?>
