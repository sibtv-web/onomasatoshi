<?php
/*
Template Name: page-qa
*/
get_header();
?>


<main>
  <div class="page-containe qa-containe">

    <div class="page-qa archive-header">
        <div class="header-name">ONO MASATOSHI</div>
        <div class="archive-header-tx">
            <picture>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/text/h_qa_page-pc.webp"alt="">
            </picture>
        </div>
        <div class="circle-blur-deep-blue"></div>        
    </div>

    <article>
        <section class="sec-qa">
            <div class="section-title">QUESTION</div>
            <div class="qa-info">小野正利に聞きたいことを募集しています。<br>お送りいただいたすべての質問にお答えすることはできませんが、いただいた質問は不定期でサイト内に掲載させていただきます。<br>
皆様からのご質問をお待ちしております。</div>
                <div class="contact-box">
                    <?php echo do_shortcode('[contact-form-7 id="82dafb4" title="QUESTION（質問フォーム）"]'); ?>
                </div>
        </section>
    </article>
  </div>
</main>

<?php get_footer(); ?>
