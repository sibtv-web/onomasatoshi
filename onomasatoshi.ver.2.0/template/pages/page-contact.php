<?php
/*
Template Name: page-contact
*/
get_header();
?>
<main>
  <div class="container">
    <article>
        <section id="sec-contact">
            <h2 class="page-title">CONTACT</h2>

            <div id="contact-content">
                <!-- メールフォームプロ -->
                <form id="mailformpro" action="<?php echo get_template_directory_uri(); ?>/contact/mailformpro/mailformpro.cgi" method="POST">
                    <dl class="mailform">
                        <dt class="mfp contact-item">お名前<span class="form-required">*</span></dt>
                        <dd class="mfp">
                            <input type="text" name="お名前" size="40" required="required">
                        </dd>
                        <input type="hidden" name="mfp_separator_01" value="\n【メールアドレス】\n">
                        <dt class="mfp contact-item">メールアドレス<span class="form-required">*</span></dt>
                        <dd class="mfp">
                            <input type="email" data-type="email" name="email" size="40" required="required">
                        </dd>

                        <dt class="mfp contact-item">お問い合わせ内容<span class="form-required">*</span></dt>
                        <dd class="mfp">
                            <label><input type="radio" name="お問い合わせ内容" value="出演依頼に関するお問い合わせ" checked>出演依頼に関するお問い合わせ</label>
                            <label><input type="radio" name="お問い合わせ内容" value="その他お問い合わせ">その他お問い合わせ</label>
                        </dd>
                        <dt class="mfp contact-item">お問い合わせ詳細<span class="form-required">*</span></dt>
                        <dd class="mfp">
                            <textarea id="textarea" name="お問い合わせ詳細" rows="30" cols="70" required="required"></textarea>
                        </dd>
                    </dl>
                    <p id="form-required">
                        <span class="form-required">*</span>は必須項目です。<br><br>
                        <span class="form-required">*</span>お問い合わせの際にURL情報がありますと送信できません。<br>
                        &nbsp;&nbsp;お手数をお掛け致しますが、URL情報のご共有をされいたい場合にはこの後直接のメールのやりとりにてご送付頂ください。
                    </p>
                    <div class="mfp_buttons">
                        <button type="submit">送信する</button>&nbsp;&nbsp;<button type="reset">リセット</button>
                    </div>
                </form>
            </div>

            <script type="text/javascript" id="mfpjs" src="<?php echo get_template_directory_uri(); ?>/contact/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
            <!-- /メールフォームプロ -->
        </section>
    </article>
  </div>
</main>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/contact/contact.js" charset="UTF-8"></script>

<?php get_footer(); ?>
