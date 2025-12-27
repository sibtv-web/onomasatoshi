<?php get_header(); ?>
<main>
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="discography-content">
    <div><img src="<?php the_field('jacket_images'); ?>" alt=""></div>
      <?php
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
