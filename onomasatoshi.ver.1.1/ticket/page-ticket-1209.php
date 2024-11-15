<?php
/*
Template Name: page-ticket-1209
*/
	get_header();
?>
<article>
		<section id="sec-ticket">
			<div class="breadcrumb"><?php echo breadcrumb(); ?></div>
			<h2 class="page-title">Masatoshi Ono Christmas Live チケット</h2>
			<div id="ticket-content">
				<div class="ticket-contents-li">
					<h3 class="title">Masatoshi Ono Christmas Liveチケットフォーム<br><span class="term">11/12（月）18:00より受付開始</span></h3>
					<div class="ticket-explain">
						<dl>
							<dt>[ 公演タイトル ] </dt>
							<dd>Masatoshi Ono Christmas Live</dd>
							<dt>[ 公演日 ] </dt>
							<dd>2018/12/9（日）</dd>
							<dt>[ OPEN/START ] </dt>
							<dd>18:30/19:00</dd>
							<dt>[ 会場 ] </dt>
							<dd><a href="http://www.raphaelchapel.com/shonan/access/" target="_blank">湘南セント・ラファエロチャペル</a></dd>
							<dt>[ 住所 ]</dt>
							<dd>〒251-0055　神奈川県藤沢市南藤沢14-1</dd>
							<dt>[ チケット料金 ]</dt>
							<dd>￥4,000</dd>
							<dt>[ 企画 制作 ]</dt>
							<dd>株式会社シブヤテレビジョン</dd>
							<dt>[ お問い合わせ ]</dt>
							<dd>ono-ticket-reserved@sib.tv</dd>
						</dl>
						<div class="">
							<br>
							
							※チケットの整理番号は抽選となります。原則として整理番号の事前開示は致しません。予めご了承ください。<br>
							※会場内でのドリンクの販売は基本的にはございません。チャペルのため会場内は飲食が禁止となっておりますので、あらかじめご了承ください。<br>
							※原則として未就学児入場不可
						</div>
					</div>
				</div>

			<div class="ticket-contents-li">
				<div id="content-text">
					<h3>= 同意事項 =</h3>
					<ul class="ticket-explain">
						<li class="text-block">
							■販売期間　定員枚数まで<br>
							※予定枚数に達し次第、予告なく受付を終了する場合がございます。<br>
							あらかじめ、余裕をもってのお申し込みにご協力お願いいたします。
						</li>
						<li class="text-block">
							■チケット確保のタイミングについて<br>
							お申し込みフォームでの手続きを終えて、『申込み完了』画面が表示されたタイミングとなります。<br>
							また[<a href="ono-ticket-reserved@sib.tv">ono-ticket-reserved@sib.tv</a>]からのメール受信をご確認下さい。<br>
							重複したお申し込みがあった場合はお申し込みが早い方の予約を優先させて頂きます。
						</li>
						<li class="text-block">
							■お申し込みのキャンセルや枚数変更について<br>
							当公演ではお申し込み枚数の変更、キャンセル等は基本的に必要ございませんが、<br>
							お席に限りがございますので、その旨[<a href="ono-ticket-reserved@sib.tv">ono-ticket-reserved@sib.tv</a>]までご一報ください。
						</li>
						<li class="text-block">
							■お一人様各公演同時購入上限を2枚までとさせて頂きます。
						</li>
					</ul>
				</div>
				</div>
			<div id="contact-content">
				<!--メールフォームプロ-->
				<form id="mailformpro" action="<?php echo get_template_directory_uri(); ?>/ticket/mailformpro/mailformpro.cgi" method="POST">
					<input type="hidden" name="公演タイトル" value="Masatoshi Ono Christmas Live">
					<input type="hidden" name="公演日" value="2018/12/9（日）">

					<div class="mfp_phase" summary="注文内容">
						<dl class="mailform" id="ticket_wrap">
						<dt class="mfp"><span class="must">必須</span>公演名</dt>
						<dd>
							<input type="hidden" name="公演時間" value="OPEN/START : 18:30/19:00">Masatoshi Ono Christmas Live  OPEN/START : 18:30/19:00<br>
						<input type="hidden" name="会場" value="湘南セント・ラファエロチャペル">
						<input type="hidden" name="住所" value="〒251-0055　神奈川県藤沢市南藤沢14-1">
						</dd>

							<dt class="mfp"><span class="must">必須</span>お申込み枚数</dt>
							<dd class="mfp">
								<ol>
									<input type="hidden" name="お申込み枚数" data-join="Masatoshi Ono Christmas Live+ +枚" value="" />
									<li>
										4,000円
										<select data-price="4000" name="Masatoshi Ono Christmas Live" required="required" >
											<option value="">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<!-- <option value="3">3</option> -->
											<!-- <option value="4">4</option> -->
										</select>枚
									</li>
								</ol>
							</dd>
						</dl>
						<dl class="mailform">

							<!-- チケットを郵送する場合 -->
							<!--
							<dt class="mfp">送料</dt>
							<dd class="mfp">
								<label for="postage"><input type="radio" id="postage" name="送料" checked="checked" required="required" data-price="640" data-value="" value="640円" >送料640円</label>
							</dd>
							 -->

							<dt class="mfp">お支払い合計金額</dt>
							<dd class="mfp">
								<div id="mfp_price">0円</div>

								<input class="price_hidden" id="mfp_price_element" type="text" name="お支払い合計金額" value=""/>
							</dd>
						</dl>
					</div>
					<div class="mfp_phase" summary="個人情報">
						<div id="mailfield">
							<dl class="mailform">
								<input type="hidden" name="お名前" data-join="姓+ +名+（+セイ+ +メイ+）" value="" />
								<dt class="mfp"><span class="must">必須</span>代表者お名前</dt>
								<dd class="mfp">
									<input type="text" name="姓" data-kana="セイ" size="15" required="required" /> <input type="text" name="名" data-kana="メイ" size="15" required="required" />
								</dd>

								<dt class="mfp"><span class="must">必須</span>フリガナ</dt>
								<dd class="mfp"><input type="text" name="セイ" size="15" required="required" data-charcheck="kana" /> <input type="text" name="メイ" size="15" required="required" data-charcheck="kana" /></dd>

								<dt class="mfp"><span class="must">必須</span>メールアドレス</dt>
								<dd class="mfp"><input type="email" data-type="email" name="email" size="40" required="required" /></dd>

								<dt class="mfp"><span class="must">必須</span>メールアドレスの確認</dt>
								<dd class="mfp"><input type="email" data-type="email" name="confirm_email" size="40" required="required" /></dd>

								<dt class="mfp"><span class="must">必須</span>連絡がつく電話番号</dt>
								<dd class="mfp"><input type="tel" data-type="tel" required="required"  name="電話番号" size="16" data-min="9" /></dd>
							</dl>
						</div>
	<!--
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
	 -->
						<!-- 別途送付先の指定 -->
						<!--
	 					<dl class="mailform">
							<span id="special_reserve">※住所と別の場所に送付をご希望の方はこちらに記入をお願いします。</span>
							<dt class="mfp special_reserve_d">郵便番号</dt>
							<dd class="mfp special_reserve_d">
								<input type="hidden" name="別途送付先ご住所" data-join="〒+別途送付先郵便番号+\n+別途送付先都道府県+別途送付先市区町村+別途送付先丁目番地" value="" />
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
							</dd>
						</dl>
						-->
					</div>
					<div class="mfp_phase" summary="アンケート">
						<dl class="mailform">
							<dt class="mfp">備考欄</dt>
							<dd class="mfp"><textarea name="備考欄" rows="10" cols="60"></textarea></dd>
						</dl>
						<div class="mfp_buttons">
							<button type="submit">送信する</button>&nbsp;&nbsp;<button type="reset">リセット</button>
						</div>
					</div>
					</div>
				</form>
			</div>
				<script type="text/javascript" id="mfpjs" src="<?php echo get_template_directory_uri(); ?>/ticket/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
				<!--/メールフォームプロ-->
		</section>
</article>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/ticket/contact.js" charset="UTF-8"></script>
<?php get_footer(); ?>
