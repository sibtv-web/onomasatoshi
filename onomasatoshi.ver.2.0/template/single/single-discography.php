<?php get_header(); ?>


<main>
      <div class="header-blur"></div>      

  <div class="single-discography-container">

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
              'flyer' => get_field('tour_images'),
              'tour'  => get_field('tour'),
              'ticket'  => get_field('ticket'),
              //音楽アプリ（使用中）
            'apple'   => get_field('apple_music_url'),
            'spotify' => get_field('spotify_url'),
            // 音楽アプリ（使用しない）
            // 'line'    => get_field('line_music_url'),
            // 'itunes'  => get_field('itunes_store_url'),
            ];

            wp_reset_postdata();
          }
          ?>


    <div class="bg-layer"></div>
      <div class="release-title__box"> 
        <div class="release-title__animation splide">
          <div class="splide__track">
            <ul class="slideAnimation-list splide__list">
            <?php
                for($i = 0; $i < 8; $i++){
                  echo '<li class="slideAnimation-list__item splide__slide">'.esc_html($latest_discography_data['title']).'</li>';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>

    <div class="simple-header">
        <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI<br>OFFICIAL SITE</a></div>
    </div>


    <div class="latest-release-inner">
      
      <section class="sec-latest-release"><!-- latest-release --> 
      <div class="release-section-title">LATEST<br>RELEASE</div>

        <div class="release-layout">

          <!-- 左カラム -->
          <div class="release-left">

            <div class="release-left-inner">
              <?php if (!empty($latest_discography_data['jacket'])): ?>
                <div class="release-jacket">
                  <img
                    src="<?php echo esc_url($latest_discography_data['jacket']); ?>"
                    alt="<?php echo esc_attr($latest_discography_data['title']); ?>のジャケット写真"
                  >
                </div>
              <?php endif; ?>
            </div>

              <ul class="music-links">

                <?php if (!empty($latest_discography_data['apple'])) : ?>
                  <li class="music-tags">
                    <a href="<?php echo esc_url($latest_discography_data['apple']); ?>" target="_blank">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="Apple Musicへ">
                      <span>Apple Music</span>
                    </a>
                  </li>
                <?php endif; ?>

                <?php if (!empty($latest_discography_data['spotify'])) : ?>
                  <li class="music-tags">
                    <a href="<?php echo esc_url($latest_discography_data['spotify']); ?>" target="_blank">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_spotify.svg" alt="Spotifyへ">
                      <span>Spotify</span>
                    </a>
                  </li>
                <?php endif; ?>

                <!-- <?php if (!empty($latest_discography_data['line'])) : ?>
                  <li class="music-tags">
                    <a href="<?php echo esc_url($latest_discography_data['line']); ?>" target="_blank">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_line-music.svg" alt="">
                      <span>Line Music</span>
                    </a>
                  </li>
                <?php endif; ?>

                <?php if (!empty($latest_discography_data['itunes'])) : ?>
                  <li class="music-tags">
                    <a href="<?php echo esc_url($latest_discography_data['itunes']); ?>" target="_blank">
                      <span>iTunes Store</span>
                    </a>
                  </li>
                <?php endif; ?> -->


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
                echo $date->format('Y年n月j日') . '（' . $day_of_week . '）';
                echo '</p>';
              }
              ?>
              <div class="number-price-flex">
                <!-- 品番 -->
                <div class=""><?php the_field('disc_number'); ?></div>
                <!-- 金額 -->
                <?php if (!empty($latest_discography_data['price'])): ?>
                  <div class="release-price">
                    <?php echo wp_kses_post($latest_discography_data['price']); ?>
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


      <!-- TRACK LIST -->
      <?php
      $disc1 = trim(get_field('disc-1'));
      $disc2 = trim(get_field('disc-2'));
      ?>

      <?php if ($disc1 !== '' || $disc2 !== '') : ?>
      <section class="track-list">

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
            
            <?php if (!empty($disc1)) : ?>
              <div class="disc-1">
                <?php echo apply_filters('the_content', $disc1); ?>
              </div>
            <?php endif; ?>

            <?php if (!empty($disc2)) : ?>
              <div class="disc-2">
                <?php echo apply_filters('the_content', $disc2); ?>
              </div>
            <?php endif; ?>

          </div>
      </section>
      <?php endif; ?><!-- TRACK LIST -->

      <!-- AVAILABLE AT -->
      <?php
        $has_sale_links =
          !empty($latest_discography_data['amazon']) ||
          !empty($latest_discography_data['tower'])  ||
          !empty($latest_discography_data['hmv']);
        ?>
      <?php if ($has_sale_links) : ?>
        <section class="available-at">
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
        </section>
      <?php endif; ?><!-- AVAILABLE AT -->

      <!-- MUSIC VIDEO -->
      <?php
        $has_mv_embed  = !empty($latest_discography_data['mv']);      // iframe（埋め込み）
        $has_mv_link   = !empty($latest_discography_data['mv_link']); // circle-image の a
      ?>
        <?php if ($has_mv_embed || $has_mv_link) : ?>
        <section class="music-video">
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
                <a href="https://youtu.be/bnSTiSDrAf8?si=jllSfN-oTn3zeKYf" target="blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/parts/img_movie_circle.webp"alt="">
                </a>
              </div>
              <span class="movie-circle-arrow"></span>
            </div>
        </section>
      <?php endif; ?><!-- MUSIC VIDEO -->

      <!-- TOUR INFO -->
      <?php
      $has_jacket = !empty($latest_discography_data['flyer']);
      $has_tour   = !empty($latest_discography_data['tour']);
      $has_ticket = !empty($latest_discography_data['ticket']);
      ?>

      <?php if ($has_jacket || $has_tour || $has_ticket) : ?>
      <section class="tour-info">
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
        <div>
          <?php if ($has_tour) : ?>
              <!-- SP用タイトル -->
              <div class="tour-sp">
                <?php echo esc_html($latest_discography_data['title']); ?>
              </div>
          <?php endif; ?>
          <div class="tour-text">
            <?php if ($has_jacket) : ?>
              <!-- フライヤー -->
              <div class="flyer-img">
                <img src="<?php echo esc_url($latest_discography_data['flyer']); ?>" alt="">
              </div>
            <?php endif; ?>

            <?php if ($has_tour) : ?>
              <div>
                <!-- PC用タイトル -->
                <div class="tour-pc">
                  <?php echo esc_html($latest_discography_data['title']); ?>
                </div>

                <!-- ツアー本文 -->
                <div class="tour-inner-text">
                  <?php echo wp_kses_post($latest_discography_data['tour']); ?>
                </div>
              </div>
            <?php endif; ?>
          </div>  

          <?php if ( !empty($latest_discography_data['ticket']) ) : ?>
          <div class="circle-arrow">
                <a href="<?php echo esc_url($latest_discography_data['ticket']); ?>" target="_blank">
                  Buy Ticket<span class="arrow"></span>
                </a>
            <?php endif; ?>
          </div>
      </section>
      <?php endif; ?><!-- TOUR INFO -->

    </div><!-- latest-release-inner -->
  </div><!-- single-discography-container -->
</main>

<?php get_footer(); ?>
