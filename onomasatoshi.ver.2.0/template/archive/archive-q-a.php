<?php get_header(); ?>
<main>
  <div class="container">
    <section class="faq-section">
      <div class="inner">
        <h2 class="section-title">FAQ</h2>
        <div class="section-content">
          よくある質問
        </div>
        <ul class="faq-list">
          <?php
          $args = array(
            'post_type'      => 'q&a',           // カスタム投稿タイプ
            'posts_per_page' => -1,
            'meta_key'       => 'display_faq',  // ACFのチェックフィールド
            'meta_value'     => 1,               // チェックが入っているものだけ
            'post_status'    => 'publish'
            );
          $faq_query = new WP_Query($args);
          if($faq_query->have_posts()):
            while($faq_query->have_posts()): $faq_query->the_post();
          ?>
            <li class="faq-item">
              <button class="faq-question"><?php the_field('question'); ?></button>
              <div class="faq-answer"><?php the_field('answer'); ?></div>
            </li>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </ul>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
