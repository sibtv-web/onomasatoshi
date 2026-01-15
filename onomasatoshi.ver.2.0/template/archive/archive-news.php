<?php
  get_header();
  $param;
  $paramText;
  $metaQuery = array();
  if(isset($_GET['search'])) {
    $param= $_GET['search'];
    switch ($param) {
      case 'live':
        $paramText = "公演";
        break;
      case 'event':
        $paramText = "イベント";
        break;
      case 'media':
        $paramText = "メディア";
        break;
      case 'other':
        $paramText = "その他";
        break;  
      default:
        # code...
        break;
    };
    $metaQuery[] = array(
        array(
          'key' => 'news_tag',
          'value' => $param,
          'compare' => 'LIKE',
        )
    );
  }
?>

<main>
  <div class="archive-container">
    <!-- アーカイブヘッダー -->
    <div class="news archive-header">
        <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI</a></div>
        <div class="archive-header-tx fade-anime" data-fade="fade-left">
          <picture>
            <source media="(min-width: 750px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_news_archive-pc.webp">
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
          <li class="news-tags <?php if($param == ""){ echo 'active'; }?>"><a href="<?php echo home_url();?>/news/">ALL</a></li>
          <li class="news-tags <?php if($param == "live"){ echo 'active'; }?>"><a href="<?php echo home_url();?>/news/?search=live">公演</a></li>
          <li class="news-tags <?php if($param == "event"){ echo 'active'; }?>"><a href="<?php echo home_url();?>/news/?search=event">イベント</a></li>
          <li class="news-tags <?php if($param == "media"){ echo 'active'; }?>"><a href="<?php echo home_url();?>/news/?search=media">メディア</a></li>
          <li class="news-tags <?php if($param == "other"){ echo 'active'; }?>"><a href="<?php echo home_url();?>/news/?search=other">その他</a></li>
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
                'meta_query' => $metaQuery,
                'paged'          => $paged
              );
              $the_query = new WP_Query($args);

              $tag_labels = [
                'live'  => '公演',
                'event' => 'イベント',
                'media' => 'メディア',
                'other' => 'その他',
              ];

              if ($the_query->have_posts()):
                while ($the_query->have_posts()):
                  $the_query->the_post();
                  // ACFタグ取得
                  $news_tags = get_field('news_tag');
                  // $tags_string = '';
                  // if ($news_tags && is_array($news_tags)) {
                  //   $tag_map = array(
                  //     '公演'   => 'live',
                  //     'イベント' => 'event',
                  //     'メディア' => 'media',
                  //     'その他'   => 'other'
                  //   );

                  //   $tags_array = array();
                  //   foreach ($news_tags as $t) {
                  //     if (isset($tag_map[$t])) {
                  //       $tags_array[] = $tag_map[$t];
                  //     }
                  //   }
                  //   $tags_string = implode(' ', $tags_array);
                  // }
            ?>
              <li class="news">
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
                        <?php foreach ($news_tags as $tag): ?>
                        <span class="news-tags">
                          <?php echo esc_html($tag_labels[$tag] ?? $tag); ?>
                        </span>

                        <?php endforeach; ?>
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
          <div class="news-pagination">
            <?php
              $args = array(
                'mid_size' => 1, 
                'prev_text' => '<', 
                'next_text' => '>', 
                'screen_reader_text' => ' ', 
                'total' => $the_query->max_num_pages,
              );
              the_posts_pagination($args);
            ?>    
          </div>
        </div>
      </section>
    </article>
  </div>
</main>

<?php get_footer(); ?>
