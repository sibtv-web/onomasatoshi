<?php
  get_header();
  $metaQuery = array();
  $taxQuery = array();
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>

<main>
  <div class="header-blur"></div> 

  <div class="archive-container">
    <div class="news archive-header">
      <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI<br>OFFICIAL SITE</a></div>
      <div class="archive-header-tx fade-anime" data-fade="fade-left">
        <picture>
          <source media="(min-width: 750px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_news_archive-pc.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_news_archive-sp.webp"alt="">
        </picture>
      </div>
      <div class="circle-blur-deep-blue"></div>        
    </div>
    <article>
      <section id="tab" class="archive-news">
        <div class="section-title">NEWS</div>
        <ul class="news-tabs">
          <li class="news-tags <?php if($category == ""){ echo 'active'; }?>" data-category="" data-paged="<?php echo $paged;?>">
            <a href="<?php echo home_url("/news/#tab") ;?>">ALL</a>
          </li>
          <li class="news-tags <?php if($category == "live"){ echo 'active'; }?>" data-category="live" data-paged="<?php echo $paged;?>">
            <a href="<?php echo home_url("/news/category/live/#tab") ;?>">ライブ</a>
          </li>
          <li class="news-tags <?php if($category == "event"){ echo 'active'; }?>" data-category="event" data-paged="<?php echo $paged;?>">
            <a href="<?php echo home_url("/news/category/event/#tab") ;?>">イベント</a>
          </li>
          <li class="news-tags <?php if($category == "media"){ echo 'active'; }?>" data-category="media" data-paged="<?php echo $paged;?>">
            <a href="<?php echo home_url("/news/category/media/#tab") ;?>">メディア</a>
          </li>
          <li class="news-tags <?php if($category == "release"){ echo 'active'; }?>" data-category="release" data-paged="<?php echo $paged;?>">
            <a href="<?php echo home_url("/news/category/release/#tab") ;?>">リリース</a>
          </li>
          <li class="news-tags <?php if($category == "other"){ echo 'active'; }?>" data-category="other" data-paged="<?php echo $paged;?>">
            <a href="<?php echo home_url("/news/category/other/#tab") ;?>">その他</a>
          </li>
        </ul>
        <div class="archive-news-inner">
          <ul class="archive-news-list">
            <?php
              $postsPerPage = 20;
              $args = array(
                'posts_per_page' => $postsPerPage,
                'post_type'      => 'news',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'paged'          => $paged
              );
              $the_query = new WP_Query($args);
              $tag_labels = [
                'live'  => 'ライブ',
                'event' => 'イベント',
                'media' => 'メディア',
                'release' => 'リリース',
                'other' => 'その他',
              ];
              if ($the_query->have_posts()):
                while ($the_query->have_posts()):
                  $the_query->the_post();
                  $news_tags = get_the_terms( get_the_ID(), 'news-category' );
            ?>
              <li class="news">
                <a class="news-list clearfix opa" href="<?php the_permalink(); ?>">
                  <div class="inner-flex">
                    <?php 
                    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                    $default_url = get_theme_file_uri('/assets/images/others/img_news_noimage.webp');
                    if ( $thumb_url ) {
                      $bg_url = $thumb_url;
                    } else {
                      $bg_url = $default_url;
                    }
                    ?>
                    <div class="news-thumbnail" style="background-image: url('<?php echo esc_url($bg_url); ?>');">
                      <?php 
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail(
                            'full',
                            [
                              'alt' => esc_attr( get_the_title() . 'のサムネイル' )
                            ]
                          );
                        } else {
                          echo '<img src="' . esc_url($default_url) . '" alt="' . esc_attr( get_the_title() . 'のサムネイル' ) . '">';
                        }
                      ?>
                    </div>
                    <div class="news-body">
                        <div class="date-tag-flex">
                          <p class="post-head news-date"><?php the_time('Y.m.d'); ?></p>
                          <?php if (! empty($news_tags) && ! is_wp_error($news_tags)): ?>
                            <?php foreach ($news_tags as $tag): ?>
                            <span class="news-tags">
                              <?php echo esc_html( $tag_labels[ $tag->slug ]); ?>
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
                'format' => 'page/%#%/#tab',
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
