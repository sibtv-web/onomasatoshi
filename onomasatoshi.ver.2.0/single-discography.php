<?php get_header(); ?>
  <article>
    <section id="sec-news-single">
      <div class="breadcrumb"><?php echo breadcrumb(); ?></div>
      <h1 class="page-title">DISCOGRAPHY 詳細</h1>
      <div id="single-news">
        <div id="news-content">
          <div id="discograohy-img"><?php echo $setDate; ?></div>
          <h2 id="discograohy-title" class=""><?php echo get_the_title(); ?></h2>
          <div id="discograohy-text"><?php echo $setDate; ?></div>
          <div id="discograohy-list"><?php echo the_content(); ?></div>
        </div>
      </div>
    </section>
  </article>
<?php get_footer(); ?>
