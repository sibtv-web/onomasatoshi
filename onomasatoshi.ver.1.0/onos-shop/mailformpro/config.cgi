$config{'about'} = 'Mailform Pro 4.2.2';

## 確認画面のタイプ
## 0: オーバーレイ / 1:フラット / 2: システムダイアログ / 3:確認なし
$config{'ConfirmationMode'} = 0;

## sendmailのパス
#$config{'sendmail'} = 'C:\sendmail\sendmail.exe';
$config{'sendmail'} = '/usr/sbin/sendmail';

## フォームの送信先
push @mailto,'ono-goods@sib.tv';

## 自動返信メールの差出人名
$config{'fromname'} = 'ONOs SHOP 小野正利オリジナルグッズネットショップ';

## 自動返信メールの差出人メールアドレス
$config{'mailfrom'} = $mailto[0];

## 念のためBCC送信宛先 (解除する場合は下記1行をコメントアウト)
## 以下をコメントアウトしていない場合は自動返信メールの控えが届きます。
#$config{'bcc'} = $mailto[0];

## メールの差出人を固定 (0:無効 / 1:固定)
$config{'fixed'} = 0;

## 通し番号の書式
$config{'SerialFormat'} = '<date>%04d';

## 通し番号への加算値
$config{'SerialBoost'} = 0;

## サンクスページのURL(URLかsend.cgiから見た相対パス)
$config{'ThanksPage'} = 'http://www.onomasatoshi.com/onos-shop/thanks.html';

## 設置者に届くメールの件名
$config{'subject'} = 'ONOs SHOP 小野正利オリジナルグッズネットショップ/小野正利公式サイト';

## 設置者に届くメールの本文整形
$_TEXT{'posted'} = <<'__posted_body__';
<_mfp_jssemantics_>
<_mfp_date_>
ONOs SHOP 小野正利オリジナルグッズネットショップより以下のメールを受付ました。
──────────────────────────
受付番号：<_mfp_serial_>

<_resbody_>

入力時間：<_mfp_input_time_>
確認時間：<_mfp_confirm_time_>
──────────────────────────
〒150-0041
東京都渋谷区神南１−１５−３　神南プラザビル３F
株式会社　シブヤテレビジョン
「ONOs SHOP 小野正利オリジナルグッズネットショップ」受付係
──────────────────────────
__posted_body__

## ※※※！！！※※※！！！※※※！！！※※※！！！※※※！！！※※※
## 自動返信メールの件名 (有効にする場合は下記の行頭#を外してください。)
## ※※※！！！※※※！！！※※※！！！※※※！！！※※※！！！※※※

$config{"ReturnSubject"} = 'ご注文ありがとうございました';

## 自動返信メールの本文
$_TEXT{'responder'} = <<'__return_body__';
<_お名前_> 様　【受付番号：<_mfp_serial_>】
────────────────────────────────────
この度は小野正利オフィシャルグッズをご注文頂き誠にありがとうございます。

■商品代金のお支払い方法とお振込期限について

お振込の振り込み期限は本メール受信より10日間となります。
ご注文を頂き、注文確認メール受信から10日間以内にご入金が確認できないお客様に関しましては、 [キャンセル扱い]とさせて頂きますのでご注意下さい。
また、期限を過ぎてお振り込み頂いた場合は手配が遅れてしまう可能性や、在庫状況によっては商品をご用意できない場合がございますのでくれぐれもご注意下さい。
お客様都合でのお振り込み頂いた金額の返金に発生する振込手数料等はお客様ご負担となります。 何卒、ご理解のほど よろしくお願い致します。

※期限を過ぎてのご入金の場合は、ご入金日・受付番号・お名前を明記の上 ono-goods@sib.tv までご連絡頂けますようお願い申し上げます。

【振込先】
振込口座： みずほ銀行　六本木支店
普通　４１９４１４５
口座名義： 株式会社シブヤテレビジョン

お振込み名義人様はご注文者様と同名義でお手続き下さいませ。
姓が変わられている場合、またはお振込名義とご注文者様のお名前が違う場合は、商品の発送ができない可能性がございます。

※お振込みの際に注文番号の明記は必要ございません。お申込者様の名義でお振り込み下さい。


■商品の発送に関して
商品はヤマト運輸または佐川急便での発送となります。
お振込をもってご注文を確定致しますが、 基本的にお振込確認、商品発送のご案内メール等はお送り致しません。
商品の発送をもって変えさせて頂きますので、 ご注文、お振込された日付からの２週間以内にお手元に商品が届かない場合は、お手数ですがお振り込み完了日・受付番号・氏名の3点をご明記の上、 ono-goods@sib.tv までご連絡下さい。
※商品はヤマト運輸または佐川急便にてご注文時にご登録頂いた住所へ送付させて頂きます。
※海外発送は行っておりませんので予めご了承下さいませ。


─ご送信内容の確認───────────────────────────
受付番号：<_mfp_serial_>
<_resbody_>
────────────────────────────────────

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
お問い合わせ先
〒150-0041
東京都渋谷区神南１－１５－３　神南プラザビル３F
株式会社　シブヤテレビジョン
ONOs SHOP 受付係
e-mail：ono-goods@sib.tv
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
__return_body__



####################################################
## スパム対策関連
####################################################

## Javascriptが無効の場合は送信を許可しない(1:許可しない / 0:許可する)
$config{'DisabledJs'} = 1;

## リファラードメインチェック / 有効にする場合は行頭の#を削除
#$config{'PostDomain'} = $ENV{'HTTP_HOST'};

## 全文英語のスパム候補を除外(1:除外 / 0:除外しない)
$config{'EnglishSpamBlock'} = 1;

## リンク系スパム候補を除外(1:除外 / 0:除外しない)
$config{'LinkSpamBlock'} = 1;

## URLの送信を許可しない(1:許可しない / 0:許可する)
$config{'DisableURI'} = 0;


####################################################
## 有効期限など
####################################################

## 送信数制限
#$config{'limit'} = 100;

## 期限の書式は YYYY-MM-DD HH:MM:SS です。
## 受付開始日時
#$config{'OpenDate'} = '2013-01-01 06:21:00';

## 受付終了日時
#$config{'CloseDate'} = '2013-03-09 00:00:00';


####################################################
## アドオン(Javascriptの追加機能)
####################################################

$config{'dir.AddOns'} = './add-ons/';

@AddOns = ();
#push @AddOns,'OperationCheck.js';		## 動作チェック
push @AddOns,'charactercheck.js';		## 文字校正
push @AddOns,'prefcode/prefcode.js';	## 郵便番号からの住所入力
#push @AddOns,'prefcodeadv/prefcode.js';## 郵便番号からの住所入力(高機能・高負荷)
push @AddOns,'furigana.js';				## フリガナ(Firefox非対応)
push @AddOns,'datelist.js';				## 日付リストの生成機能 [Update]
#push @AddOns,'ok.js';					## OKアドオン [New]
push @AddOns,'nospace.js';				## スペースのみの入力を無効
push @AddOns,'toggle.js';				## 入力欄の可変
#push @AddOns,'cart/cart.js';			## ショッピングカート機能
#push @AddOns,'phase.js';				## 段階的入力機能
#push @AddOns,'drilldown.js';			## ドリルダウン機能
#push @AddOns,'charformat.js';			## テキスト整形(Xperia非対応)
#push @AddOns,'noresume.js';			## 入力された内容をレジュームしない
#push @AddOns,'switching.js';			## スイッチング機能サンプル
#push @AddOns,'prevention.js';			## イタズラ防止
#push @AddOns,'wellcome.js';			## (技術デモ)ウェルカムメッセージ
#push @AddOns,'speechAPI.js';			## (技術デモ)音声入力
#push @AddOns,'WadaVoiceDemo.js';		## (技術デモ)音声ガイダンス
#push @AddOns,'progress.js';			## プログレスバー表示
#push @AddOns,'WTKConnect.js';			## WebsiteToolKit.jsとの連動
#push @AddOns,'submitdisabled.js';		## エラー時に送信ボタンを無効化
#push @AddOns,'sizeajustdisabled.js';	## 入力欄の自動調整機能を無効化
#push @AddOns,'defaultValue.js';		## 初期値を無効
#push @AddOns,'estimate.js';			## 見積計算(ベータ版)
#push @AddOns,'beforeunload.js';		## ページを離脱する際のアラート(ベータ版)
#push @AddOns,'setValue.js';			## 初期値をセット
#push @AddOns,'errorScroll.js';			## エラー時に対象エレメントまでスクロール(ベータ版)
#push @AddOns,'reserve.js';				## 予約受付 [New]
#push @AddOns,'taboowords/taboowords.js';## 禁止ワードの指定 [New]
#push @AddOns,'pricefactor.js';			## 人数分の料金掛け算 [New]
#push @AddOns,'tax.js';					## 消費税計算 [New]
#push @AddOns,'email.js';				## メールアドレスのチェック(やや厳格)

####################################################
## モジュール(CGIの追加機能)
####################################################

@Modules = ();
#push @Modules,'MultiConfig';	## 複数の設定ファイルを分岐させる
#push @Modules,'check';			## CGI動作環境チェック
#push @Modules,'thanks';		## サンクスページへの引き継ぎ
#push @Modules,'cart';			## ショッピングカート機能
#push @Modules,'ISO-2022-JP';	## メールをJISで送信
#push @Modules,'HTMLMail';		## 自動返信メールにHTMLメールを追加
#push @Modules,'HTMLMailAdmin';	## 管理者宛メールにHTMLメールを追加
#push @Modules,'CSVExport';		## CSV保存機能
#push @Modules,'SQLExport';		## SQL発行機能
#push @Modules,'vCard';			## vCard機能
#push @Modules,'iCal';			## iCal連携機能
#push @Modules,'IPLogs';		## IPログトラッキング機能
#push @Modules,'PayPal';		## PayPal決済
#push @Modules,'SMTP';			## SMTP送信
#push @Modules,'MAILHEAD';		## メールヘッダのカスタマイズ
#push @Modules,'mailauth';		## メールアドレス認証
#push @Modules,'reqonce';		## 一度きりの送信
#push @Modules,'questionnaire';	## アンケート集計モジュール
#push @Modules,'GmailSMTP';		## GmailのSMTPを使う場合
#push @Modules,'regist';		## メールアドレスの登録・解除
#push @Modules,'ReplyTime';		## 応答時間計測 [New]
#push @Modules,'logger';			## アクセス解析ログモジュール [New]
#push @Modules,'count';			## 集計モジュール [New]
#push @Modules,'reserve';		## 予約管理モジュール [New]
#push @Modules,'taboowords';	## 禁止ワードの指定 [New]
#push @Modules,'stress';		## ストレスチェック判定モジュール [New]
#push @Modules,'csvatt';		## CSV添付機能 [New]

#push @Modules,'MFPOrderConnect'; ## MFP Order Connect API
#push @Modules,'MFPAddressConnect'; ## MFP Address Connect API
#push @Modules,'demo';			## デモ


####################################################
## 高度な設定的な感じのもの
####################################################

## 詳細なsendmail設定
#$config{'sendmail_advanced'} = '/usr/local/bin/sendmail -t -f$email';

## 表示調整 単一行表示
$config{'singleline'} = "[ %s ] %s\n";

## 表示調整 複数行表示
$config{'multiline'} = "[ %s ]\n%s\n\n";

## 未入力の項目を含める(1: on / 0: off)
$config{'blankfield'} = 0;

## 連続送信対応
$config{'seek'} = 0;

## メールの改行コード
#$config{'breakcode'} = "\r\n";

## 開封確認 (開封確認を通知する場合は以下の1行のコメントを解除)
#$config{'Notification'} = $mailto[0];

## 各種データを格納しているファイル

$config{'data.dir'} = './data/';

## [0] Serial, [1] InputTime, [2] ConfirmTime, [3] UniqueUser
$config{'file.data'} = "$config{'data.dir'}dat.mailformpro.cgi";

## ドロップ検知
$config{'file.drop'} = "$config{'data.dir'}dat.drop.cgi";

## jsキャッシュ
$config{'file.cache'} = "$config{'data.dir'}mfp.cache.js";

## 言語設定ファイル
$config{'lang'} = 'lang.ja';
#$config{'lang'} = 'lang.en';

## スクリプトのURL / ※基本的にここは変更しなくてOKです
$config{'uri'} = 'http://' . $ENV{'SERVER_NAME'} . $ENV{'SCRIPT_NAME'};

## Prefix
$config{'prefix'} = '_MFP';

1;
