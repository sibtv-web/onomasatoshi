<?php get_header(); ?>
<main>
  <div class="archive-container">

    <!-- アーカイブヘッダー -->
    <div class="discography archive-header">
        <div class="header-name">ONO MASATOSHI</div>
        <div class="archive-header-tx">
            <picture>
            <source
                media="(min-width: 750px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_discography_archive-pc.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_discography_archive-sp.webp"alt="">
            </picture>
        </div>
        <div class="circle-blur-deep-blue"></div>        
    </div>

    <article>
      <section class="archive-news archive-discography">
        <div class="section-title">DISCOGRAPHY</div>

        <!-- タブ切替 -->

        <ul class="news-tabs">
          <li class="news-tags is-active" data-filter="all">ALL</li>
          <li class="news-tags" data-filter="single">シングル</li>
          <li class="news-tags" data-filter="album">アルバム</li>
          <li class="news-tags" data-filter="dvd">DVD</li>
        </ul>

        <div class="archive-discography-inner">

          <?php if ( have_posts() ) : ?>
          <ul class="discography-list">
              <?php while ( have_posts() ) : the_post(); 
                $jacket = get_field('jacket_images');
                $date = get_field('release_date');
                $number = get_field('disc_number');
                $price = get_field('price');
                $type = get_field('type');
                $apple = get_field('apple_music_url');
                $line = get_field('line_music_url');
                $itunes = get_field('itunes_store_url');
                $spotify = get_field('spotify_url');
                $amazon = get_field('amazon_url');
                $tower = get_field('tower_url');
                $hmv = get_field('hmv_url');
                $description = get_field('description');
                $tour     = get_field('tour');
                $songs1      = get_field('disc-1');
                $songs2      = get_field('disc-2');
                $tour = get_field('tour');
              ?>
              <li class="disc-item"
                data-title="<?php echo esc_attr(get_the_title()); ?>"
                data-jacket="<?php echo esc_url($jacket); ?>"
                data-date="<?php echo esc_attr($date); ?>"
                data-price="<?php echo esc_attr($price); ?>"
                data-number="<?php echo esc_attr($number); ?>"
                data-type="<?php echo esc_attr($type); ?>"
                data-apple="<?php echo esc_url($apple); ?>"
                data-itunes="<?php echo esc_url($itunes); ?>"
                data-line="<?php echo esc_url($line); ?>"
                data-spotify="<?php echo esc_url($spotify); ?>"
                data-link="<?php echo esc_url(get_permalink()); ?>"
                data-amazon="<?php echo esc_url($amazon); ?>"
                data-tower="<?php echo esc_url($tower); ?>"
                data-hmv="<?php echo esc_url($hmv); ?>"
                data-description="<?php echo esc_attr( wp_kses_post( $description ) ); ?>" 
                data-tour="<?php echo esc_attr( wp_kses_post( $tour ) ); ?>" 
                data-songs1="<?php echo esc_attr( wp_kses_post( $songs1 ) ); ?>" 
                data-songs2="<?php echo esc_attr( wp_kses_post( $songs2 ) ); ?>"                
                >

                <div class="jacket-image">
                  <img src="<?php echo esc_url($jacket); ?>" alt="<?php the_title(); ?>">
                   <button class="plus-btn">＋</button>
                </div>

                <div class="tag-date-flex">
                    <div class="news-tags"><!-- タグ -->
                    <?php 
                    $type = get_field('type'); // ラジオボタンなので文字列

                    if( $type ) {
                        switch($type){
                            case 'single': $label = 'シングル'; break;
                            case 'album':  $label = 'アルバム'; break;
                            case 'dvd':    $label = 'DVD'; break;
                            default: $label = $type;
                        }
                        echo '<span>'.esc_html($label).'</span>';
                    } else {
                        echo '<span>タグなし</span>';
                    }
                    ?>
                    </div>   
                    <div><!-- リーリスの日付 -->
                      <?php
                      $date = get_field('release_date');

                      if ($date) {
                        echo '<p class="release-date">' 
                          . esc_html(date('Y.n.j', strtotime($date))) 
                          . ' リリース</p>';
                      }
                      ?>
                    </div>
                  </div>

                <div class="release-contents-title"><!-- タイトル -->
                  <?php the_title(); ?>
                </div>

              </li>
              <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </section>
    </article>
  </div>
</main>

<!-- 詳細モーダル -->
<div class="detail-modal player-modal">
  <div class="player-content">
    <span class="modal-close-btn">&times;</span>

    <div class="modal-body"><!-- モーダルの中身 -->
      <div class="tag-date-flex">
        <p class="modal-type news-tags"></p><!-- タグ -->
        <p class="modal-date release-date"></p><!-- リリース日 -->
      </div>
      <p class="modal-title"></p><!-- タイトル -->
      <div class="number-price-flex">
        <p class="modal-number"></p><!-- 品番 -->
        <p class="modal-price"></p><!-- 金額 -->
      </div>
        <div class="modal-body-flex">
          <div class="modal-body-left">
            <div class="modal-image"><img class="modal-jacket" src="" alt=""></div><!-- 画像 -->
            <ul class="modal-links">

              <li class="news-tags">
                <a class="modal-apple" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="">
                  <span>Apple Music</span>
                </a>
              </li>
              
              <li class="news-tags">
                <a class="modal-line" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_line-music.svg" alt="">
                  <span>Line Music</span>
                </a>
              </li>

              <li class="news-tags">
                <a class="modal-itunes" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="">
                  <span>iTunes Store</span>
                </a>
              </li>

              <li class="news-tags">
                <a class="modal-spotify" href="#" target="_blank">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_spotify.svg" alt="">
                  <span>Spotify</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="modal-body-right">
            <p class="modal-desc"></p>
            <div class="modal-songs">
              <p class="disc-1"></p>
              <p class="disc-2"></p>
            </div>
            <div class="sale-links">
              <a class="modal-amazon" href="#" target="_blank">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_amazon.png" alt="">
              </a>
              <a class="modal-tower" href="#" target="_blank">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_tower-records.png" alt="">
              </a>
              <a class="modal-hmv" href="#" target="_blank">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bnr/bnr_hmv.png" alt="">
              </a>
            </div>
            <p class="modal-tour"></p>
          </div>
        </div><!--modal-body-flex-->
    </div><!-- modal-body -->
  </div><!-- player-content -->
</div><!-- detail-modal player-modal -->

<?php get_footer(); ?>
