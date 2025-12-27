<footer class="site-footer">
  <div class="container">
    <div class="inner">
      <div class="footer-name">ONO MASATOSHI</div>
      <div class="footer-box">
        <nav class="footer-nav-1">
          <div class="footer-title">Contents</div>
              <ul class="footer-nav-flex">
                <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                    <?php
                    $latest_discography = get_posts([
                        'post_type' => 'discography',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ]);
                    $latest_discography_url = !empty($latest_discography) ? get_permalink($latest_discography[0]->ID) : '';
                    ?>
                <li><a href="<?php echo esc_url($latest_discography_url); ?>" class="release-btn">最新リリース情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a></li>
                <li><a href="<?php echo esc_url(home_url('/profile/')); ?>">プロフィール</a></li>
                <li><a href="<?php echo esc_url(home_url('/discography/')); ?>">ディスコグラフィ</a></li>
                <li><a href="https://goodsshop.onomasatoshi.com/" target="_blank">グッズ</a></li>
                <li><a href="https://fanicon.net/fancommunities/4196" target="_blank">ファンクラブ</a></li>
                <li><a href="https://www.galneryus.jp/" target="_blank">GALNERYUS</a></li>
                <li><a href="http://sound-s.jp/" target="_blank">Bese</a></li>
              </ul>
        </nav>

        <nav class="footer-nav-2">
          <div class="footer-title">Information</div>
            <ul class="footer-nav-col">
              <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
              <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a></li>
              <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>">利用規約</a></li>
            </ul>
        </nav>

        <nav class="footer-nav-3">
          <div class="footer-nav-link">
            <div class="footer-title">SNS</div>
            <ul class="footer-nav-col">
              <li><a href="https://x.com/onomasatoshi_of" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_x.svg" alt="">X</a></li>
              <li><a href="https://www.tiktok.com/@masatoshiono_official" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_tiktok.svg" alt="">TikTok</a></li>
              <li><a href="https://www.youtube.com/channel/UCtA4OYVdyh0F4HcHFUgZ1_A" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_youtube.svg" alt="">Youtube</a></li>
            </ul>
          </div>
          <div>
            <div class="footer-title">Music</div>
            <ul class="footer-nav-col">
              <li><a href="https://music.apple.com/jp/artist/%E5%B0%8F%E9%87%8E%E6%AD%A3%E5%88%A9/585568726" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_applemusic.svg" alt="">Apple Music</a></li>
              <li><a href="https://open.spotify.com/intl-ja/artist/2R1ubdXY4sUiDqsCtoAVUE" target="blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo/logo_spotify.svg" alt="">Spotify</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</footer>

<div class="player-modal">
  <div class="player-content">
    <button class="close-btn">×</button>
    <div class="player-area">
      <!-- ここに embed が入る -->
    </div>
  </div>
</div>


    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <!-- jQuery -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->

    <!-- 自作JS -->
    <!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>-->
    <!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/player.js"></script>-->

    <?php wp_footer(); ?>
  </body>
</html>

