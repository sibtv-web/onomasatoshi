<?php get_header(); ?>
<main>
  <div class="header-blur"></div> 

  <div class="archive-container">
    <div class="qa-acv archive-header">
      <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI<br>OFFICIAL SITE</a></div>
      <div class="archive-header-tx fade-anime" data-fade="fade-left">
        <picture>
          <source media="(min-width: 750px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_q&a_archive-pc.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_q&a_archive-sp.webp"alt="">
        </picture>
      </div>
      <div class="circle-blur-deep-blue"></div>        
    </div>
    <article>
    <section  id="qa-archive" class="archive-qa qa-section">
      <div class="section-title">PERSONAL QUESTION</div>
        <div class="archive-qa-inner">
        <p class="qa-lead-text">みなさまからお送りいただいた質問に、小野正利が気ままに答えていきます。質問は<a href="<?php echo esc_url(home_url('/qa/')); ?>">こちら</a>から受け付けております。</p>
          <ul class="qa-list">
              <?php
              $paged = get_query_var('paged') ? get_query_var('paged') : 1;

              $args = array(
                'posts_per_page' => 20,
                'post_type'      => 'q-a',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'paged'          => $paged
              );

              $qa_query = new WP_Query($args);
              ?>

              <?php if ($qa_query->have_posts()): ?>
                <?php while ($qa_query->have_posts()): $qa_query->the_post(); ?>
                <li class="qa-item">
                  <button type="button" class="qa-question">
                    <?php the_title(); ?>
                  </button>

                  <div class="qa-inner">
                    <div class="qa-answer">
                      <p class="qa-answer-text"><?php echo wpautop(get_field('answer')); ?></p>
                      <p class="qa-date pc"><?php echo get_the_date('Y.m.d'); ?></p>
                      <!-- <p class=""><?php echo wpautop(get_field('pen_name')); ?></p> -->

                    </div>
                    <p class="qa-date sp"><?php echo get_the_date('Y.m.d'); ?></p>
                  </div>

                </li>

              <?php endwhile; ?>
            <?php else: ?>
              <li>現在、表示できるQ&Aはありません。</li>
            <?php endif; ?>
          </ul>
        </div>
        
        <!-- ページネーション -->

        <div class="news-pagination">
          <nav class="navigation pagination">
            <div class="nav-links">

              <?php
              echo paginate_links(array(
                'total'     => $qa_query->max_num_pages,
                'current'   => max(1, get_query_var('paged')),
                'mid_size'  => 1,
                'prev_text' => '<',
                'next_text' => '>',
                'add_fragment' => '#qa-archive',
              ));
              ?>

            </div>
          </nav>
        </div>
        <div class="circle-arrow">
          <a href="<?php echo home_url('/qa/'); ?>">Send a Question<span class="arrow"></span></a>
        </div>


      </section>
    </article>
  </div>
</main>
<?php get_footer(); ?>
