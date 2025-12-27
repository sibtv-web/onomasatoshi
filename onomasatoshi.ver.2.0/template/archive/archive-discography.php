<?php get_header(); ?>
<main>
  <div class="container">
    <h2 class="page-title">Discography</h2>

    <?php if ( have_posts() ) : ?>
    <ul class="discography-list">
    <?php while ( have_posts() ) : the_post(); 
      $jacket = get_field('jacket_images');
      $date = get_field('release_date');
      $description = get_field('description');
      $price = get_field('price');
      $type = get_field('type');
      $apple = get_field('apple_music_url');
      $spotify = get_field('spotify_url');
    ?>
    <li class="disc-item"
      data-title="<?php echo esc_attr(get_the_title()); ?>"
      data-jacket="<?php echo esc_url($jacket); ?>"
      data-date="<?php echo esc_attr($date); ?>"
      data-description="<?php echo esc_attr($description); ?>"
      data-price="<?php echo esc_attr($price); ?>"
      data-type="<?php echo esc_attr($type); ?>"
      data-apple="<?php echo esc_url($apple); ?>"
      data-spotify="<?php echo esc_url($spotify); ?>"
      data-link="<?php echo esc_url(get_permalink()); ?>"
    >

      <div class="jacket-image">
        <img src="<?php echo esc_url($jacket); ?>" alt="<?php the_title(); ?>">
      </div>

      <h2><?php the_title(); ?></h2>
      <p class="release-date"><?php echo esc_html($date); ?></p>
    </li>
    <?php endwhile; ?>
    </ul>
    <?php endif; ?>
  </div>
</main>

<!-- 詳細モーダル -->
<div class="detail-modal player-modal">
  <div class="player-content">
    <span class="close-btn">&times;</span>

    <div class="modal-body">
      <img class="modal-jacket" src="" alt="">
      <h2 class="modal-title"></h2>
      <p class="modal-date"></p>
      <p class="modal-desc"></p>
      <p class="modal-price"></p>
      <p class="modal-type"></p>

      <div class="modal-links">
        <a class="modal-apple" href="#" target="_blank">Apple Music</a>
        <a class="modal-spotify" href="#" target="_blank">Spotify</a>
        <a class="modal-viewmore" href="#">View More →</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
