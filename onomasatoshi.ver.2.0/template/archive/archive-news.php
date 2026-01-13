<?php get_header(); ?>

<main>
  <div class="archive-container">

    <!-- アーカイブヘッダー -->
    <div class="news archive-header">
        <div class="header-name">ONO MASATOSHI</div>
        <div class="archive-header-tx">
            <picture>
            <source
                media="(min-width: 750px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_news_archive-pc.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_news_archive-sp.webp"alt="">
            </picture>
        </div>
        <div class="circle-blur-deep-blue"></div>        
    </div>
    <article>
      <section class="archive-news">
        <div class="section-title">NEWS</div>

        <!-- タブ切替 -->

        <ul class="news-tabs">
          <li class="news-tags active" data-tag="all">ALL</li>
          <li class="news-tags" data-tag="live">公演</li>
          <li class="news-tags" data-tag="event">イベント</li>
          <li class="news-tags" data-tag="media">メディア</li>
          <li class="news-tags" data-tag="other">その他</li>
        </ul>

        <div class="archive-news-inner">
          <ul class="archive-news-list">
            <?php
            $postsPerPage = 20;
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
              while ($the_query->have_posts()):
                $the_query->the_post();

                // ACFタグ取得
                $news_tags = get_field('news_tag');
                $tags_string = '';

                if ($news_tags && is_array($news_tags)) {
                  $tag_map = array(
                    '公演'   => 'live',
                    'イベント' => 'event',
                    'メディア' => 'media',
                    'その他'   => 'other'
                  );

                  $tags_array = array();
                  foreach ($news_tags as $t) {
                    if (isset($tag_map[$t])) {
                      $tags_array[] = $tag_map[$t];
                    }
                  }
                  $tags_string = implode(' ', $tags_array);
                }
            ?>
                <li class="news" data-tags="<?php echo esc_attr($tags_string); ?>">
                  <a class="news-list clearfix opa" href="<?php the_permalink(); ?>">
                    <div class="inner-flex">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="news-thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="news-body">
                        <div class="date-tag-flex">
                        <p class="post-head news-date"><?php the_time('Y.m.d'); ?></p>

                        <?php if ($news_tags && is_array($news_tags)): ?>
                            <p class="news-tags">
                            <?php foreach ($news_tags as $tag): ?>
                                <span class="tag"><?php echo esc_html($tag); ?></span>
                            <?php endforeach; ?>
                            </p>
                        <?php endif; ?>
                        </div>

                        <div class="post-content"><?php the_title(); ?></div>
                    </div>
                    </div>
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

          <div <?php if ($total_results > $postsPerPage) echo 'id="paginate"'; ?>>
            <?php echo paginate_links($paginateArgs); ?>
          </div>

        </div>
      </section>
    </article>

  </div>
</main>

<?php get_footer(); ?>
