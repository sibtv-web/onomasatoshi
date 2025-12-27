<?php get_header(); ?>
<body>
<main>
    <!-- KV -->
    <section class="kv">
      <picture>
        <source media="(min-width: 750px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/kv/kv_pc.webp">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/kv/kv_sp.webp" alt="小野正利">
      </picture>
    </section>
    
  <div class="container">

<!-- Release -->
    <section class="release-section">
      <div class="inner">
        <?php
        $latest_discography = new WP_Query([
          'post_type'      => 'discography',
          'posts_per_page' => 1,
          'orderby'        => 'date',
          'order'          => 'DESC',
        ]);

        while ($latest_discography->have_posts()):
          $latest_discography->the_post();
          $jacket_images = get_field('jacket_images');
          $music_embed   = get_field('music_embed');
        ?>

        <div class="release-layout">
          <!-- 左カラム -->
          <div class="release-left fade-anime" data-fade="fade-up-cont">
            <div class="release-section-title">LATEST<br>RELEASE</div>

            <div class="release-left-inner">
              <?php if ($jacket_images): ?>
                <div class="release-jacket">
                  <img src="<?php echo esc_url($jacket_images); ?>" alt="<?php the_title(); ?>">
                </div>
              <?php endif; ?>

              <?php if ($music_embed): ?>
                <button class="playBtn" data-url="<?php echo esc_url($music_embed); ?>">
                  <span class="playBtn__icon"></span>
                </button>
              <?php endif; ?>
            </div>
          </div>

          <!-- 右カラム -->
          <div class="release-right">
            <h3 class="release-title"><?php the_title(); ?></h3>
              <?php
              $release_date = get_field('release_date');

              if ($release_date) {
                // 日付をDateTimeに変換
                $date = new DateTime($release_date);

                // 曜日を日本語に
                $week = ['日', '月', '火', '水', '木', '金', '土'];
                $day_of_week = $week[$date->format('w')];

                echo '<p class="release-date">';
                echo $date->format('Y年n月j日') . '（' . $day_of_week . '）発売';
                echo '</p>';
              }
              ?>

            <div class="release-description">
              <?php the_field('description'); ?>
            </div>

            <?php
            $latest_post = get_posts([
              'post_type'      => 'discography',
              'posts_per_page' => 1,
              'orderby'        => 'date',
              'order'          => 'DESC',
            ]);
            $latest_url = !empty($latest_post) ? get_permalink($latest_post[0]->ID) : '';
            ?>

            <?php if ($latest_url): ?>
              <div class="circle-arrow">
                <a href="<?php echo esc_url($latest_url); ?>">View All<span class="arrow"></span></a>
              </div>
            <?php endif; ?>
          </div>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </section>



    <!-- News -->
    <section class="news-section">
      <div class="inner">
        <div class="news-image-wrap fade-anime" data-fade="fade-up">
          <div class="inner-image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bg/h_news_left.webp" alt="">
            <!-- <img class="animation-image" src="images/bg/bg-animation.webp" alt="">           -->
          </div>
          <div class="circle-blur-deep-blue"></div>        
        </div>
        <div class="section-title fade-anime" data-fade="fade-up">NEWS</div>
        <div class="news-block-flex fade-anime" data-fade="fade-up">
          <div class="news-list">             
            <ul class="">
              <?php
              $news_query = new WP_Query([
                'posts_per_page' => 4,
                'post_type'      => 'news',
                'post_status'    => 'publish',
                'order'          => 'DESC',
              ]);

              while ($news_query->have_posts()):
                $news_query->the_post();
              ?>
                <li class="news-item">
                  <a href="<?php the_permalink(); ?>" class="news-link">
                    <div class="news-item-flex">
                      <p class="news-date"><?php the_time('Y.m.d'); ?></p>
                      <div class="news-tags"><?php the_field('news_tag'); ?></div>
                    </div>
                    <div class="news-title"><?php the_title(); ?></div>
                  </a>
                </li>
              <?php endwhile; wp_reset_postdata(); ?>
            </ul>
          </div> 
          <div class="circle-arrow">
            <a href="<?php echo home_url('/news/'); ?>">View All<span class="arrow"></span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Movie -->
    <section class="movie-section">
      <div class="inner">
        <div class="section-content">
          <div class="movie-section-title fade-anime" data-fade="fade-up">PERFORMANCE<br>MOVIE</div>
          <div class="circle-wrap fade-anime" data-fade="fade-up">
            <div class="circle-image">
              <a href="https://www.youtube.com/channel/UCtA4OYVdyh0F4HcHFUgZ1_A" target="blank">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/parts/img_movie_circle.webp"alt="">
              </a>
            </div>
            <span class="movie-circle-arrow"></span>
          </div>
        </div>
      </div>
    </section>

    <!-- Links -->
    <section class="links-section">
      <div class="inner">
        <div class="link-list fade-anime" data-fade="fade-up-cont">
            <a href="https://goodsshop.onomasatoshi.com/" class="banner-item" target="_blank" rel="noopener">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_ono's-shop.png" alt="goods">
              <div class="banner-content">
                <p class="banner-sub-title">Official Goods</p>
                <p class="banner-title">ONO'S SHOP</p>
                <button class="banner-btn">Shop
                  <span class="chevron-icon">
                    <span class="chevron-dot"></span>
                  </span>
                </button>
              </div>
            </a>

            <a href="https://fanicon.net/fancommunities/4196" class="banner-item" target="_blank" rel="noopener">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_voice.png" alt="fan club">
              <div class="banner-content">
                <p class="banner-sub-title">Official Fun Club</p>
                <p class="banner-title">VOICE</p>
                <button class="banner-btn">Fun Page
                  <span class="chevron-icon">
                    <span class="chevron-dot"></span>
                  </span>
                </button>
              </div>
            </a>

            <a href="https://www.galneryus.jp/" class="banner-item" target="_blank" rel="noopener">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_galneryus.png" alt="ガルネリウス">
              <div class="banner-content">
                <p class="banner-sub-title">Heavy Metal Band</p>
                <p class="banner-title">GALNERYUS</p>
                <button class="banner-btn">Official Page
                  <span class="chevron-icon">
                    <span class="chevron-dot"></span>
                  </span>
                </button>
              </div>
            </a>

            <a href="http://sound-s.jp/" class="banner-item" target="_blank" rel="noopener">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_bese.png" alt="Bese">
              <div class="banner-content">
                <p class="banner-sub-title">Vocal School</p>
                <p class="banner-title">Bese</p>
                <button class="banner-btn">Reservation
                  <span class="chevron-icon">
                    <span class="chevron-dot"></span>
                  </span>
                </button>
              </div>
            </a>
        </div>
      </div>
    </section>

    <!-- Q&A -->
    <section class="qa-section">
      <div class="inner">
        <div class="qa-image-wrap fade-anime" data-fade="fade-up">
          <div class="qa-image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bg/h_q&a.webp" alt="">
          </div>
          <div class="circle-blur-light-blue"></div>
        </div>

        <div class="qa-block-flex fade-anime" data-fade="fade-up">
          <div class="circle-arrow">
            <a href="<?php echo esc_url($latest_url); ?>">Send a Question<span class="arrow"></span></a>
          </div>

          <div class="qa-right-column">
            <div class="section-title">QUESTION</div>
            <ul class="qa-list">
              <?php
              $qa_query = new WP_Query([
                'post_type'      => 'q-a',
                'posts_per_page' => 5,
                'meta_key'       => 'display_q_a',
                'meta_value'     => 1,
                'orderby'        => 'date',
                'order'          => 'DESC',
              ]);

              while ($qa_query->have_posts()):
                $qa_query->the_post();
              ?>
                <li class="qa-item">
                  <button type="button" class="qa-question"><?php the_title(); ?></button>
                  <div class="qa-inner">
                    <div class="qa-answer"><?php echo wpautop(get_field('answer')); ?></div>
                  </div>
                </li>
              <?php endwhile; wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>       
</main>

<!-- Player Modal -->
<div class="player-modal top-player">
  <div class="player-content">
    <span class="close-btn">&times;</span>
    <div class="modal-embed"></div>
  </div>
</div>

<?php get_footer(); ?>
</body>
