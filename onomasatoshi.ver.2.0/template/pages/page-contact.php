<?php
/*
Template Name: page-contact
*/
get_header();
?>

<main>
  <div class="header-blur"></div>      
  <div class="page-container contact-container">

    <div class="simple-header-black">
        <div class="header-name"><a href="<?php echo home_url(); ?>">ONO MASATOSHI</a></div>
    </div>

    <article>
        <section class="sec-contact">
            <div class="header-title">
                <div class="page-section-title">CONTACT</div>
                <div class="page-section-title-jp">お問い合わせ</div>
            </div>

            <div class="contact-box">
              <p class="asterisk">※入力必須項目</p>
                <?php
                // Contact Form 7 のショートコードを呼び出すだけ
                echo do_shortcode('[contact-form-7 id="fc45b16" title="お問い合わせ"]');

                ?>
            </div>
        </section>
    </article>
  </div>
</main>

<?php get_footer(); ?>
