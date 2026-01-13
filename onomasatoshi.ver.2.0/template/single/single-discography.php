<?php get_header(); ?>
<main>
  <div class="single-discography-container">

    <div class="simple-header">
        <div class="header-name">ONO MASATOSHI</div>
    </div>

    <div class="latest-release-inner">
          <?php
          $latest_discography_data = null;

          $latest_discography = new WP_Query([
            'post_type'      => 'discography',
            'posts_per_page' => 1,
            'orderby'        => 'date',
            'order'          => 'DESC',
          ]);

          if ( $latest_discography->have_posts() ) {
            $latest_discography->the_post();

            $latest_discography_data = [
              'jacket' => get_field('jacket_images'),
              'price'  => get_field('price'),
              'number'  => get_field('disc_number'),
              'disc1'  => get_field('disc-1'),
              'disc2'  => get_field('disc-2'),
              'title'  => get_the_title(),
              'link'   => get_permalink(),
              'amazon' => get_field('amazon_url'),
              'tower'  => get_field('tower_url'),
              'hmv'    => get_field('hmv_url'),
              'mv'    => get_field('music-video'),
              'tour'  => get_field('tour'),
              'ticket'  => get_field('ticket'),
            ];

            wp_reset_postdata();
          }
          ?>
      
      <section><!-- latest-release -->   
        <div class="release-section-title">LATEST<br>RELEASE</div>

        <div class="release-layout">

          <!-- 左カラム -->
          <div class="release-left">

            <div class="release-left-inner">
              <?php if (!empty($latest_discography_data['jacket'])): ?>
                <div class="release-jacket">
                  <img
                    src="<?php echo esc_url($latest_discography_data['jacket']); ?>"
                    alt="<?php echo esc_attr($latest_discography_data['title']); ?>"
                  >
                </div>
              <?php endif; ?>
            </div>

            <ul class="music-links">

              <li class="music-tags">
                <a class="modal-apple" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="">
                  <span>Apple Music</span>
                </a>
              </li>
              
              <li class="music-tags">
                <a class="modal-line" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_line-music.svg" alt="">
                  <span>Line Music</span>
                </a>
              </li>

              <li class="music-tags">
                <a class="modal-itunes" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="">
                  <span>iTunes Store</span>
                </a>
              </li>

              <li class="music-tags">
                <a class="modal-spotify" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_spotify.svg" alt="">
                  <span>Spotify</span>
                </a>
              </li>
            </ul>
            <!-- SP用のディスクリプション -->
            <div class="release-description sp-description">
              <?php the_field('description'); ?>
            </div>
          </div>

          <!-- 右カラム -->
          <div class="release-right">
            <div class="release-title">
              <?php echo esc_html($latest_discography_data['title']); ?>
            </div>

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
              <div class="number-price-flex">
                <!-- 品番 -->
                <div class=""><?php the_field('disc_number'); ?></div>
                <!-- 金額 -->
                <?php if ($latest_discography_data['price'] !== ''): ?>
                  <div class="release-price">
                    ／￥<?php echo number_format((int)$latest_discography_data['price']); ?> + 税
                  </div>
                <?php endif; ?>
              </div>
            <!-- PC用のディスクリプション -->
            <div class="release-description pc-description">
              <?php the_field('description'); ?>
            </div>
          </div>
        </div>
      </section><!-- latest-release --> 

      <section class="track-list"><!-- TRACK LIST -->

        <h2>
          <span>T</span>
          <span>R</span>
          <span>A</span>
          <span>C</span>
          <span>K</span>
          <span> </span>
          <span>L</span>
          <span>I</span>
          <span>S</span>
          <span>T</span>
        </h2>
        <h3>収録曲</h3>

          <div class="disc-flex">
            <div class="disc-1"><?php echo wp_kses_post($latest_discography_data['disc1']); ?></div>
            <div class="disc-2"><?php echo wp_kses_post($latest_discography_data['disc2']); ?></div>
          </div>

      </section><!-- TRACK LIST -->

      <section class="available-at"><!-- AVAILABLE AT -->
        <h2>
          <span>A</span>
          <span>V</span>
          <span>A</span>
          <span>I</span>
          <span>L</span>
          <span>A</span>
          <span>B</span>
          <span>L</span>
          <span>E</span>
          <span> </span>
          <span>A</span>
          <span>T</span>
        </h2>
        <h3>販売場所</h3>

        <div class="sale-links">
          <?php if ($latest_discography_data['amazon']): ?>
            <a href="<?php echo esc_url($latest_discography_data['amazon']); ?>" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_amazon.png" alt="">
            </a>
          <?php endif; ?>

          <?php if ($latest_discography_data['tower']): ?>
            <a href="<?php echo esc_url($latest_discography_data['tower']); ?>" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_tower-records.png" alt="">
            </a>
          <?php endif; ?>

          <?php if ($latest_discography_data['hmv']): ?>
            <a href="<?php echo esc_url($latest_discography_data['hmv']); ?>" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_hmv.png" alt="">
            </a>
          <?php endif; ?>
        </div>

      </section><!-- AVAILABLE AT -->

      <section class="music-video"><!-- MUSIC VIDEO -->
        <h2>
          <span>M</span>
          <span>U</span>
          <span>S</span>
          <span>I</span>
          <span>C</span>
          <span> </span>
          <span>V</span>
          <span>I</span>
          <span>D</span>
          <span>E</span>
          <span>O</span>
        </h2>
        <h3>ミュージックビデオ</h3>
          <?php if ( !empty($latest_discography_data['mv']) ) : ?>
            <div class="mv-embed">
              <?php echo $latest_discography_data['mv']; ?>
            </div>
          <?php endif; ?>
          <div class="circle-wrap">
            <div class="circle-image">
              <a href="https://www.youtube.com/channel/UCtA4OYVdyh0F4HcHFUgZ1_A" target="blank">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/parts/img_movie_circle.webp"alt="">
              </a>
            </div>
            <span class="movie-circle-arrow"></span>
          </div>
      </section><!-- MUSIC VIDEO -->

      <section class="tour-info"><!-- TOUR INFO -->
        <h2>
          <span>T</span>
          <span>O</span>
          <span>U</span>
          <span>R</span>
          <span> </span>
          <span>I</span>
          <span>N</span>
          <span>F</span>
          <span>O</span>
        </h2>
        <h3>ツアー情報</h3>
        <div class="tour-text"><?php echo wp_kses_post($latest_discography_data['tour']); ?></div>
          <?php if ( !empty($latest_discography_data['ticket']) ) : ?>
          <div class="circle-arrow">
            <a href="<?php echo esc_url($latest_discography_data['ticket']); ?>" target="_blank">
              Buy Ticket<span class="arrow"></span>
            </a>
          <?php endif; ?>
        </div>

      </section><!-- TOUR INFO -->

    </div><!-- latest-release-inner -->
  </div><!-- single-discography-container -->
</main>

<?php get_footer(); ?>
