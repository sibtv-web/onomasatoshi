<?php
/*
Template Name: page-shop-form
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>商品注文ページ｜ONO's SHOP 小野正利オリジナルグッズネットショップ</title>
	<link href="<?php echo get_template_directory_uri(); ?>/onos-shop/mfp.statics/webshop.css" rel="stylesheet" type="text/css" />
	<!--メールフォームプロ用CSS-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/onos-shop/mfp.statics/mailformpro.css" type="text/css" />
  <!--/メールフォームプロ用CSS-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/onos-shop/mfp.statics/form.css" type="text/css" />
  <script src="<?php echo get_template_directory_uri(); ?>/onos-shop/js/jquery.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/onos-shop/js/form.js" type="text/javascript"></script>
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
	<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css">
	<link rel="stylesheet" media="(min-width: 640px)" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-pc.css">
	<link rel="stylesheet" media="(max-width: 640px)" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-sp.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-43773989-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-43773989-1');
		</script>
</head>
<body>
	<main>
		<article>
			<section id="sec-shop-form">
				<div id="wrapper">
		      <div id="header">商品注文ページ</div>

		      <div id="container">
		        <div id="contents">
		          <div id="content-text">
		            <dl>
		              <dt class="text-title">※お振込期限について</dt>
		              <dd class="text-block">
		                <p>お振込の振り込み期限は本メール受信より２週間までとなります。ご購入のお手続を頂き、注文確認から２週間以内までにご入金の無いお客様に関しましては、キャンセル扱いとさせて頂きますのでご注意下さい。<br>また、期限を過ぎてお振り込み頂いた場合のお客様は再度のご購入手続き、または在庫状況によっては商品をご用意できない場合がございます点、ご注意下さい。その際、お振り込み頂いた金額の返金の際、発生する振込手数料等はお客様ご負担となります。<br>何卒、ご理解のほど よろしくお願い致します。</p>
		              </dd>
		              <dt class="text-title">振込先</dt>
		              <dd class="text-block">
		                <p>振込口座： みずほ銀行　六本木支店<br>普通：　４１９４１４５<br>口座名義： 株式会社シブヤテレビジョン</p>
		                <p>また振込の際は、振込人名義にご注意ください。<br>姓が変わられている場合、またはお振込名義とご注文者様のお名前が違う場合は、商品の発送ができない可能性がございます。</p>
		              </dd>
		              <dt class="text-title">※商品の発送に関して </dt>
		              <dd class="text-block">
		                <p>商品はヤマト運輸または佐川急便にてご登録頂いた住所へ送付させて頂きます。お振込後２週間以内にお手元に届かない場合は、<br>お手数ですが <a href="mailto:ono-goods@sib.tv">ono-goods@sib.tv</a>まで お問い合わせ下さい。</p>
		              </dd>
		              <dt class="text-title text-caution">※メールの受信設定にご注意下さい！</dt>
		              <dd class="text-block text-caution">
		                <p>メールの受信設定にご注意下さい！注文確定後、通常は30分以内に自動返信メールを送信いたします。万が一30分以内にメールが来ないお客様はメールの受信設定が拒否状態、または迷惑メールフィルタによる拒否、メールアドレス入力間違いなどの原因でお手元に届いていない可能性がございます。あらかじめ、 <a href="mailto:ono-goods@sib.tv">ono-goods@sib.tv</a> からのメールアドレスが受信できるよう設定をお願い致します。また、携帯電話によっては文字数制限などの問題で送信が正しくされない場合もございます。なるべく確実にメールを受信できるアドレスをご使用下さい。正しく注文がとられない場合にはご予約がとれない場合もございます。 何卒ご了承くださいますよう、お願い致します。</p>
		              </dd>
		            </dl>
		          </div>
		        </div>

		      <!--メールフォームプロ-->
		      <form id="mailformpro" action="<?php echo get_template_directory_uri(); ?>/onos-shop/mailformpro/mailformpro.cgi" method="POST">

		        <div class="mfp_phase" summary="注文内容">
		          <dl class="mailform" id="item_wrap">
		            <dt class="mfp">商品を選択</dt>
		            <dd class="mfp">
									<ol id="item-list">
										<li>
		                  <span id="thumb22" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> VSツアーTシャツ ￥3,500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="3500" name="VSツアーTシャツ Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="3500" name="VSツアーTシャツ Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="3500" name="VSツアーTシャツ Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br><br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="3500" name="VSツアーTシャツ XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                </li>
										<li>
		                  <span id="thumb23" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> VSブルゾンパーカー ￥7,500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="7500" name="VSブルゾンパーカー Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="7500" name="VSブルゾンパーカー Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="7500" name="VSブルゾンパーカー Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br><br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="7500" name="VSブルゾンパーカー XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                </li>
										<li>
		                  <span id="thumb24" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> TAPES VSオリジナル(モバイルバッテリー)￥3,500（税込み）<br>
											<select data-price="3500" name="TAPES VSオリジナル(モバイルバッテリー)">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">個</span>　
		                  <br class="sp">
		                </li>
										<li>
		                  <span id="thumb25" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> キャップ ￥2,500（税込み）<br>
											<select data-price="2500" name="キャップ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　
		                  <br class="sp">
		                </li>
										<li>
		                  <span id="thumb26" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> 手提げバッグ（オリジナルチャーム付き） ￥3,000（税込み）<br>
											<select data-price="3000" name="手提げバッグ（オリジナルチャーム付き）">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>
											<br class="sp">
		                </li>
										<li>
		                  <span id="thumb27" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span>パーカー ￥5,000（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="5000" name="パーカー Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="5000" name="パーカー Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="5000" name="パーカー Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br><br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="5000" name="パーカー XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="MASATOSHI ONO PUBLIC RECORDING BIRTHDAY LIVE ”TAKE ONE”（CDアルバム）" data-join="TAKE_ONE+ +枚" value="" /> -->

		                  <span id="thumb01" class="thumb"></span>
		                  MASATOSHI ONO PUBLIC RECORDING BIRTHDAY LIVE<br>”TAKE ONE”（CDアルバム） ￥3,000（税込み）<br class="sp">
		                  <select data-price="3000" name="MASATOSHI ONO PUBLIC RECORDING BIRTHDAY LIVE ”TAKE ONE”（CDアルバム）">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　
		                </li>
		                <li>
		                  <span id="thumb12" class="thumb"></span>
		                  <span class="text-caution"></span> 小野正利 ”Go with the flow” スポーツタオル ￥2,000（税込み）　　<br class="sp">
		                  <select data-price="2000" name="小野正利 ”Go with the flow” スポーツタオル">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">個</span>　
		                </li>
		                <li>
		                  <span id="thumb13" class="thumb"></span>
		                  <span class="text-caution"></span> 小野正利 ”Go with the flow” ステーショナリーセット ￥1,000（税込み）<br class="sp">
		                  <select data-price="1000" name="小野正利 ”Go with the flow” ステーショナリーセット">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">個</span>　
		                </li>
										<li>
		                  <span id="thumb28" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> 小野正利 ”I LOVE” Tシャツ（チャコール） ￥3,500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” Tシャツ（チャコール）Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I LOVE” Tシャツ（チャコール）Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I LOVE” Tシャツ（チャコール）Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I LOVE” Tシャツ（チャコール）XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  <br>
		                </li>
										<li>
		                  <span id="thumb28" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> 小野正利 ”I LOVE” Tシャツ（ブラック） ￥3,500（税込み）<br>
		                  　<!-- <span class="select-text">Sサイズ</span>
		                  <select data-price="6000" name="小野正利 ”I love” コーチジャケット（ブラック） Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp"> -->
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I LOVE” Tシャツ（ブラック） Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I LOVE” Tシャツ（ブラック） Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I LOVE” Tシャツ（ブラック） XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  <br><span class="text-caution">　※Sサイズ完売しました。</span>
		                </li>
										<li>
		                  <span id="thumb29" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> 小野正利 ”I LOVE” ロングTシャツ ￥4,000（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="4000" name="小野正利 ”I LOVE” ロングTシャツ Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="4000" name="小野正利 ”I LOVE” ロングTシャツ Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="4000" name="小野正利 ”I LOVE” ロングTシャツ Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="4000" name="小野正利 ”I LOVE” ロングTシャツ XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                </li>
		                <li>
		                  <span id="thumb15" class="thumb"></span>
		                  <span class="text-caution"></span> 小野正利 ”I love” コーチジャケット ￥6,000（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="6000" name="小野正利 ”I love” コーチジャケット Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="6000" name="小野正利 ”I love” コーチジャケット Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <!-- <option value="3">3</option> -->
		                    <!-- <option value="4">4</option> -->
		                    <!-- <option value="5">5</option> -->
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="6000" name="小野正利 ”I love” コーチジャケット Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <!-- <option value="2">2</option> -->
		                    <!-- <option value="3">3</option> -->
		                    <!-- <option value="4">4</option> -->
		                    <!-- <option value="5">5</option> -->
		                  </select> <span class="select-text">点</span>　<br class="sp">
		                  　<!-- <span class="select-text">XLサイズ</span>
		                  <select data-price="6000" name="小野正利 ”I love” コーチジャケット XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　<br class="sp"> -->
		                  <br><span class="text-caution">　※XLサイズ完売しました。</span>
		                </li>
		                <li>
		                  <span id="thumb18" class="thumb"></span>
		                  <span class="text-caution"></span> 小野正利 ”I love” ニット帽 ￥2,500（税込み）<br class="sp">
		                  <select data-price="2500" name="小野正利 ”I love” ニット帽">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">点</span>　
		                </li>
		                <li>
		                  <span id="thumb20" class="thumb"></span>
		                  <span class="text-caution"></span> 小野正利 ”I love” T シャツ 白 ￥3,500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ 白 Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ 白 Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <!-- <option value="3">3</option> -->
		                    <!-- <option value="4">4</option> -->
		                    <!-- <option value="5">5</option> -->
		                  </select> <span class="select-text">枚</span>　
		<!--                   　<span class="select-text">Lサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ 白 Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp"> -->
		<!--                   　<span class="select-text">XLサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ 白 XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp"> -->
		                  <br><span class="text-caution">　※Lサイズ完売しました。</span>
		                  <br><span class="text-caution">　※XLサイズ完売しました。</span>
		                </li>
		<!--                 <li>
		                  <span id="thumb21" class="thumb"></span>
		                  <span class="text-caution">NEW!!</span> 小野正利 ”I love” T シャツ グレー ￥3,500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ グレー Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ グレー Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ グレー Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">XLサイズ</span>
		                  <select data-price="3500" name="小野正利 ”I love” T シャツ グレー XLサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                </li> -->

		                <li>
		                  <!-- <input type="hidden" name="小野正利 オリジナルバンダナ" data-join="オリジナルバンダナ+ +枚" value="" /> -->
		                  <span id="thumb02" class="thumb"></span>
		                  小野正利 オリジナルバンダナ ￥1,500円（税込み）<br class="sp">
		                  <select data-price="1500" name="小野正利 オリジナルバンダナ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">個</span>　
		                  <span id="thumb02" class="thumb"></span>
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 オリジナル缶バッジセット（3個入）" data-join="オリジナル缶バッジセット+ +個" value="" /> -->
		                  <span id="thumb03" class="thumb"></span>
		                  小野正利 オリジナル缶バッジセット (3個入) ￥800（税込み）<br class="sp">
		                  <select data-price="800" name="小野正利 オリジナル缶バッジセット（3個入）">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">個</span>　
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary Tシャツ（ブラック） Sサイズ" data-join="21th_Anniversary_Tシャツ(ブラック)_Sサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary Tシャツ（ブラック） Mサイズ" data-join="21th_Anniversary_Tシャツ(ブラック)_Mサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary Tシャツ（ブラック） Lサイズ" data-join="21th_Anniversary_Tシャツ(ブラック)_Lサイズ+ +枚" value="" /> -->
		                  <span id="thumb04" class="thumb"></span>
		                  小野正利 21th Anniversary Tシャツ（ブラック） ￥1,000（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="1000" name="小野正利 21th Anniversary Tシャツ（ブラック） Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="1000" name="小野正利 21th Anniversary Tシャツ（ブラック） Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span><!-- 　<br class="sp"> -->
		<!--                   　<span class="select-text">Lサイズ</span>
		                  <select data-price="1000" name="小野正利 21th Anniversary Tシャツ（ブラック） Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　 -->
		                  <br><span class="text-caution">　※Lサイズ完売しました。</span>
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary Tシャツ（ホワイト） Sサイズ" data-join="21th_Anniversary_Tシャツ(ホワイト)_Sサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary Tシャツ（ホワイト） Mサイズ" data-join="21th_Anniversary_Tシャツ(ホワイト)_Mサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary Tシャツ（ホワイト） Lサイズ" data-join="21th_Anniversary_Tシャツ(ホワイト)_Lサイズ+ +枚" value="" /> -->
		                  <span id="thumb05" class="thumb"></span>
		                  小野正利 21th Anniversary Tシャツ（ホワイト） ￥1,000（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="1000" name="小野正利 21th Anniversary Tシャツ（ホワイト） Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">Mサイズ</span>
		                  <select data-price="1000" name="小野正利 21th Anniversary Tシャツ（ホワイト） Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                  　<span class="select-text">Lサイズ</span>
		                  <select data-price="1000" name="小野正利 21th Anniversary Tシャツ（ホワイト） Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 21th Anniversary タオル（パープル）" data-join="21th_Anniversary_タオル（パープル）+ +枚" value="" /> -->
		                  <span id="thumb06" class="thumb"></span>
		                  小野正利 21th Anniversary タオル（パープル） ￥1,000（税込み）<br class="sp">
		                  <select data-price="1000" name="小野正利 21th Anniversary タオル（パープル）">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 Birthday Tシャツ（ブルー） Sサイズ" data-join="Birthday_Tシャツ(ブルー)_Sサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 Birthday Tシャツ（ブルー） Mサイズ" data-join="Birthday_Tシャツ(ブルー)_Mサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 Birthday Tシャツ（ブルー） Lサイズ" data-join="Birthday_Tシャツ(ブルー)_Lサイズ+ +枚" value="" /> -->
		                  <span id="thumb07" class="thumb"></span>
		                  小野正利 Birthday Tシャツ（ブルー） ￥500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="500" name="小野正利 Birthday Tシャツ（ブルー） Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　
		<!--                   　<span class="select-text">Mサイズ</span>
		                  <select data-price="500" name="小野正利 Birthday Tシャツ（ブルー） Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　 -->
		<!--                   　<span class="select-text">Lサイズ</span>
		                  <select data-price="500" name="小野正利 Birthday Tシャツ（ブルー） Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　 -->
		                  <br><span class="text-caution">　※Mサイズ完売しました。</span>
		                  <br><span class="text-caution">　※Lサイズ完売しました。</span>
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 Birthday Tシャツ（オレンジ） Sサイズ" data-join="Birthday_Tシャツ(オレンジ)_Sサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 Birthday Tシャツ（オレンジ） Mサイズ" data-join="Birthday_Tシャツ(オレンジ)_Mサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 Birthday Tシャツ（オレンジ） Lサイズ" data-join="Birthday_Tシャツ(オレンジ)_Lサイズ+ +枚" value="" /> -->
		                  <span id="thumb08" class="thumb"></span>
		                  小野正利 Birthday Tシャツ（オレンジ） ￥500（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="500" name="小野正利 Birthday Tシャツ（オレンジ） Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　<br class="sp">
		<!--                   　<span class="select-text">Mサイズ</span>
		                  <select data-price="500" name="小野正利 Birthday Tシャツ（オレンジ） Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select><span class="select-text">枚</span>　 -->
		<!--                   　<span class="select-text">Lサイズ</span>
		                  <select data-price="500" name="小野正利 Birthday Tシャツ（オレンジ） Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　 -->
		                  <br><span class="text-caution">　※Mサイズ完売しました。</span>
		                  <br><span class="text-caution">　※Lサイズ完売しました。</span>
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 20th Anniversary Tシャツ（ブラック） Sサイズ" data-join="20th_Anniversary_Tシャツ(ブラック)_Sサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 20th Anniversary Tシャツ（ブラック） Mサイズ" data-join="20th_Anniversary_Tシャツ(ブラック)_Mサイズ+ +枚" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 20th Anniversary Tシャツ（ブラック） Lサイズ" data-join="20th_Anniversary_Tシャツ(ブラック)_Lサイズ+ +枚" value="" /> -->
		                  <span id="thumb09" class="thumb"></span>
		                  小野正利 20th Anniversary Tシャツ（ブラック） ￥1,000（税込み）<br>
		                  　<span class="select-text">Sサイズ</span>
		                  <select data-price="1000" name="小野正利 20th Anniversary Tシャツ（ブラック） Sサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　
		<!--                   　<span class="select-text">Mサイズ</span>
		                  <select data-price="1000" name="小野正利 20th Anniversary Tシャツ（ブラック） Mサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select><span class="select-text">枚</span>　<br class="sp"> -->
		<!--                   　<span class="select-text">Lサイズ</span>
		                  <select data-price="1000" name="小野正利 20th Anniversary Tシャツ（ブラック） Lサイズ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select><span class="select-text">枚</span>　 -->
		                  <br><span class="text-caution">　※Mサイズ完売しました。</span>
		                  <br><span class="text-caution">　※Lサイズ完売しました。</span>
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 20th Anniversary タオル（ブラック）" data-join="20th_Anniversary_タオル(ブラック)+ +枚" value="" /> -->
		                  <span id="thumb10" class="thumb"></span>
		                  小野正利 20th Anniversary タオル（ブラック） ￥1,000（税込み）<br class="sp">
		                  <select data-price="1000" name="小野正利 20th Anniversary タオル（ブラック）">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">枚</span>　
		                </li>
		                <li>
		                  <!-- <input type="hidden" name="小野正利 トートバッグ" data-join="トートバッグ+ +個" value="" /> -->
		                  <!-- <input type="hidden" name="小野正利 トートバッグ" value="" /> -->
		                  <span id="thumb11" class="thumb"></span>
		                  小野正利 トートバッグ ￥500（税込み）<br class="sp">
		                  <select data-price="500" name="小野正利 トートバッグ">
		                    <option value="">0</option>
		                    <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                  </select> <span class="select-text">個</span>　
		                </li>
		              </ol>
		            </dd>

		          </dl>

		          <dl class="mailform">
		            <dt class="mfp">送料</dt>
		            <dd class="mfp">
		              <label for="postage"><input type="radio" id="postage" name="送料" checked="checked" required="required" data-price="640" data-value="" value="640円" >送料640円</label>
		            </dd>

		            <dt class="mfp">お支払い合計金額</dt>
		            <dd class="mfp">
		              <div id="mfp_price">0円</div>
		              <!-- <input type="hidden" name="合計金額" value="" /> -->
		              <input class="price_hidden" id="mfp_price_element" type="text" name="お支払い合計金額" value=""/>
		            </dd>
		          </dl>
		        </div>
		        <div class="mfp_phase" summary="個人情報">
		          <div id="mailfield">
		            <dl class="mailform">
		              <input type="hidden" name="お名前" data-join="姓+ +名+（+セイ+ +メイ+）" value="" />
		              <dt class="mfp"><span class="must">必須</span>お名前</dt>
		              <dd class="mfp">
		                <input type="text" name="姓" data-kana="セイ" size="15" required="required" /> <input type="text" name="名" data-kana="メイ" size="15" required="required" />
		              </dd>

		              <dt class="mfp"><span class="must">必須</span>フリガナ</dt>
		              <dd class="mfp"><input type="text" name="セイ" size="15" required="required" data-charcheck="kana" /> <input type="text" name="メイ" size="15" required="required" data-charcheck="kana" /></dd>

		              <dt class="mfp"><span class="must">必須</span>メールアドレス</dt>
		              <dd class="mfp"><input type="email" data-type="email" name="email" size="40" required="required" /></dd>

		              <dt class="mfp"><span class="must">必須</span>確認のためもう一度</dt>
		              <dd class="mfp"><input type="email" data-type="email" name="confirm_email" size="40" required="required" /></dd>

		              <dt class="mfp"><span class="must">必須</span>電話番号</dt>
		              <dd class="mfp"><input type="tel" data-type="tel" required="required"  name="電話番号" size="16" data-min="9" /></dd>
		            </dl>
		          </div>

		          <dl class="mailform">
		            <dt class="mfp"><span class="must">必須</span>郵便番号</dt>
		            <dd class="mfp">
		              <input type="hidden" name="ご住所" data-join="〒+郵便番号+\n+都道府県+市区町村+丁目番地" value="" />
		              <input type="text" name="郵便番号" size="30" required="required" data-address="都道府県,市区町村,市区町村" autocomplete="off" />
		            </dd>
		            <dt class="mfp"><span class="must">必須</span>ご住所</dt>
		            <dd class="mfp">
		              <ol>
		                <li>
		                  <span>都道府県</span>
		                  <select name="都道府県" required="required">
		                    <option value="" selected="selected">【選択して下さい】</option>
		                    <optgroup label="北海道・東北地方">
		                      <option value="北海道">北海道</option>
		                      <option value="青森県">青森県</option>
		                      <option value="岩手県">岩手県</option>
		                      <option value="秋田県">秋田県</option>
		                      <option value="宮城県">宮城県</option>
		                      <option value="山形県">山形県</option>
		                      <option value="福島県">福島県</option>
		                    </optgroup>
		                    <optgroup label="関東地方">
		                      <option value="栃木県">栃木県</option>
		                      <option value="群馬県">群馬県</option>
		                      <option value="茨城県">茨城県</option>
		                      <option value="埼玉県">埼玉県</option>
		                      <option value="東京都">東京都</option>
		                      <option value="千葉県">千葉県</option>
		                      <option value="神奈川県">神奈川県</option>
		                    </optgroup>
		                    <optgroup label="中部地方">
		                      <option value="山梨県">山梨県</option>
		                      <option value="長野県">長野県</option>
		                      <option value="新潟県">新潟県</option>
		                      <option value="富山県">富山県</option>
		                      <option value="石川県">石川県</option>
		                      <option value="福井県">福井県</option>
		                      <option value="静岡県">静岡県</option>
		                      <option value="岐阜県">岐阜県</option>
		                      <option value="愛知県">愛知県</option>
		                    </optgroup>
		                    <optgroup label="近畿地方">
		                      <option value="三重県">三重県</option>
		                      <option value="滋賀県">滋賀県</option>
		                      <option value="京都府">京都府</option>
		                      <option value="大阪府">大阪府</option>
		                      <option value="兵庫県">兵庫県</option>
		                      <option value="奈良県">奈良県</option>
		                      <option value="和歌山県">和歌山県</option>
		                    </optgroup>
		                    <optgroup label="四国地方">
		                      <option value="徳島県">徳島県</option>
		                      <option value="香川県">香川県</option>
		                      <option value="愛媛県">愛媛県</option>
		                      <option value="高知県">高知県</option>
		                    </optgroup>
		                    <optgroup label="中国地方">
		                      <option value="鳥取県">鳥取県</option>
		                      <option value="島根県">島根県</option>
		                      <option value="岡山県">岡山県</option>
		                      <option value="広島県">広島県</option>
		                      <option value="山口県">山口県</option>
		                    </optgroup>
		                    <optgroup label="九州・沖縄地方">
		                      <option value="福岡県">福岡県</option>
		                      <option value="佐賀県">佐賀県</option>
		                      <option value="長崎県">長崎県</option>
		                      <option value="大分県">大分県</option>
		                      <option value="熊本県">熊本県</option>
		                      <option value="宮崎県">宮崎県</option>
		                      <option value="鹿児島県">鹿児島県</option>
		                      <option value="沖縄県">沖縄県</option>
		                    </optgroup>
		                  </select>
		                </li>
		                <li><span>市区町村</span> <input type="text" name="市区町村" required="required" size="50" /></li>
		                <li><span>丁目番地</span> <input type="text" name="丁目番地" required="required" size="50" /></li>
		              </ol>
		            </dd>
		          </dl>

		          <!-- 別途送付先の指定 -->

		           <dl class="mailform">
		            <span id="special_reserve">※住所と別の場所に送付をご希望の方はこちらに記入をお願いします。</span>
		            <dt class="mfp special_reserve_d">郵便番号</dt>
		            <dd class="mfp special_reserve_d">
		              <input type="hidden" name="別途送付先ご住所" data-join="別途送付先郵便番号+\n+別途送付先都道府県+別途送付先市区町村+別途送付先丁目番地+\n+別途送付姓+ +別途送付名" value="" />
		              <input type="text" name="別途送付先郵便番号" size="30" data-address="別途送付先都道府県,別途送付先市区町村,別途送付先市区町村" autocomplete="off" />
		            </dd>
		            <dt class="mfp">ご住所</dt>
		            <dd class="mfp">
		              <ol>
		                <li>
		                  <span>都道府県</span>
		                  <select name="別途送付先都道府県">
		                    <option value="" selected="selected">【選択して下さい】</option>
		                    <optgroup label="北海道・東北地方">
		                      <option value="北海道">北海道</option>
		                      <option value="青森県">青森県</option>
		                      <option value="岩手県">岩手県</option>
		                      <option value="秋田県">秋田県</option>
		                      <option value="宮城県">宮城県</option>
		                      <option value="山形県">山形県</option>
		                      <option value="福島県">福島県</option>
		                    </optgroup>
		                    <optgroup label="関東地方">
		                      <option value="栃木県">栃木県</option>
		                      <option value="群馬県">群馬県</option>
		                      <option value="茨城県">茨城県</option>
		                      <option value="埼玉県">埼玉県</option>
		                      <option value="東京都">東京都</option>
		                      <option value="千葉県">千葉県</option>
		                      <option value="神奈川県">神奈川県</option>
		                    </optgroup>
		                    <optgroup label="中部地方">
		                      <option value="山梨県">山梨県</option>
		                      <option value="長野県">長野県</option>
		                      <option value="新潟県">新潟県</option>
		                      <option value="富山県">富山県</option>
		                      <option value="石川県">石川県</option>
		                      <option value="福井県">福井県</option>
		                      <option value="静岡県">静岡県</option>
		                      <option value="岐阜県">岐阜県</option>
		                      <option value="愛知県">愛知県</option>
		                    </optgroup>
		                    <optgroup label="近畿地方">
		                      <option value="三重県">三重県</option>
		                      <option value="滋賀県">滋賀県</option>
		                      <option value="京都府">京都府</option>
		                      <option value="大阪府">大阪府</option>
		                      <option value="兵庫県">兵庫県</option>
		                      <option value="奈良県">奈良県</option>
		                      <option value="和歌山県">和歌山県</option>
		                    </optgroup>
		                    <optgroup label="四国地方">
		                      <option value="徳島県">徳島県</option>
		                      <option value="香川県">香川県</option>
		                      <option value="愛媛県">愛媛県</option>
		                      <option value="高知県">高知県</option>
		                    </optgroup>
		                    <optgroup label="中国地方">
		                      <option value="鳥取県">鳥取県</option>
		                      <option value="島根県">島根県</option>
		                      <option value="岡山県">岡山県</option>
		                      <option value="広島県">広島県</option>
		                      <option value="山口県">山口県</option>
		                    </optgroup>
		                    <optgroup label="九州・沖縄地方">
		                      <option value="福岡県">福岡県</option>
		                      <option value="佐賀県">佐賀県</option>
		                      <option value="長崎県">長崎県</option>
		                      <option value="大分県">大分県</option>
		                      <option value="熊本県">熊本県</option>
		                      <option value="宮崎県">宮崎県</option>
		                      <option value="鹿児島県">鹿児島県</option>
		                      <option value="沖縄県">沖縄県</option>
		                    </optgroup>
		                  </select>
		                </li>
		                <li><span>市区町村</span> <input type="text" name="別途送付先市区町村" size="50" /></li>
		                <li><span>丁目番地</span> <input type="text" name="別途送付先丁目番地" size="50" /></li>
		              </ol>
		              <span class="text-caution">※ご住所は町名・番地・建物名　すべてご記入ください。</span>
		            </dd>
		            <dt class="mfp">お名前</dt>
		            <dd class="mfp">
		              <input type="text" name="別途送付姓" size="15" /> <input type="text" name="別途送付名" size="15" />
		            </dd>
		          </dl>

		        </div>
		        <div class="mfp_phase" summary="アンケート">
		          <dl class="mailform">
		            <dt class="mfp">備考欄</dt>
		            <dd class="mfp"><textarea name="備考欄" rows="10" cols="60"></textarea></dd>
		          </dl>
		          <div class="mfp_buttons">
		            <button type="submit"></button>
		          </div>
		        </div>
		      </form>

		        <p id="contact_link">
		          <a href="mailto:ono-goods@sib.tv">お問合わせ･ご連絡先</a>
		        </p>
		      <script type="text/javascript" id="mfpjs" src="<?php echo get_template_directory_uri(); ?>/onos-shop/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
		      <!--/メールフォームプロ-->

		    </div>

		</section>
		</article>
	</main>

</body>
</html>
