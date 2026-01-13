<?php
/*
Template Name: qa-thanks
*/
get_header();
?>
<main>
  <div class="contact-container qa-thanks-containe">

    <div class="simple-header">
        <div class="header-name">ONO MASATOSHI</div>
    </div>

    <article>
      <section class="sec-contact-thanks">
        <div class="thanks-inner">
          <div class="thanks-title"> お問い合わせありがとうございました。</div>
          <div class="thanks-message">いただいたお問い合わせ内容をご連絡先メールアドレスに送信いたしましたので、ご確認下さい。<br>お問い合わせ確認のメールが届かない場合は、お問い合わせ時に入力されたメールの受信設定をご確認下さい。</div>
          <div class="thanks-notice">「メールが届かない」というお問い合わせが多数ございます。ドメイン指定受信や迷惑メール拒否設定をされている方は、「@○○○○」からのメールを受信できるよう、事前に設定して下さい。</div>
        </div>
        <button type="button" class="btn-back"><a href="<?php echo home_url(); ?>">トップへ戻る</a></button>
      </section>
    </article>
  </div>
</main>

<?php get_footer(); ?>
