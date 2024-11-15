$config{'about'} = 'Mailform Pro 4.2.3';

## 確認画面のタイプ
## 0: オーバーレイ / 1:フラット / 2: システムダイアログ / 3:確認なし
$config{'ConfirmationMode'} = 0;

## sendmailのパス
#$config{'sendmail'} = 'C:\sendmail\sendmail.exe';
$config{'sendmail'} = '/usr/sbin/sendmail';

## フォームの送信先
push @mailto,'ono-ticket-reserved@sib.tv';

## 自動返信メールの差出人名
$config{'fromname'} = '［小野正利ライブ チケット］お申込み';

## 自動返信メールの差出人メールアドレス
$config{'mailfrom'} = $mailto[0];

## 念のためBCC送信宛先 (解除する場合は下記1行をコメントアウト)
## 以下をコメントアウトしていない場合は自動返信メールの控えが届きます。
#$config{'bcc'} = $mailto[0];

## メールの差出人を固定 (0:無効 / 1:固定)
## 固定にした場合、Reply-Toにお客様のアドレスがセットされます。
$config{'fixed'} = 1;

## 通し番号の書式
$config{'SerialFormat'} = '%04d';

## 通し番号への加算値
$config{'SerialBoost'} = 0;

## サンクスページのURL(URLかsend.cgiから見た相対パス)
$config{'ThanksPage'} = 'https://www.onomasatoshi.com/ticket-thanks/';

## 設置者に届くメールの件名
$config{'subject'} = '［小野正利ライブ チケット］お申込み';

## 設置者に届くメールの本文整形
$_TEXT{'posted'} = <<'__posted_body__';
<_mfp_date_>
［小野正利ライブ チケット］お申込みフォームより以下のメールを受付ました。
──────────────────────────
受付番号：<_mfp_serial_>

<%公演タイトル:公演タイトル%>
<%公演日:公演日%>
<%公演選択:公演選択%>
<%会場:会場%>
<%住所:住所%>
<%お申込み枚数:お申込み枚数%>
<%お支払い合計金額:お支払い合計金額%>
<%お名前:お名前%>
<%メールアドレス:email%>
<%電話番号:電話番号%>
<%備考欄:備考欄%>

入力時間：<_mfp_input_time_>
確認時間：<_mfp_confirm_time_>
──────────────────────────
〒150-0041
東京都渋谷区神南１-１５-３　神南プラザビル３F
株式会社　シブヤテレビジョン
──────────────────────────
__posted_body__

## ※※※！！！※※※！！！※※※！！！※※※！！！※※※！！！※※※
## 自動返信メールの件名 (有効にする場合は下記の行頭#を外してください。)
## ※※※！！！※※※！！！※※※！！！※※※！！！※※※！！！※※※

$config{"ReturnSubject"} = '［小野正利ライブ］チケット抽選お申込みありがとうございました';

## 自動返信メールの本文
$_TEXT{'responder'} = <<'__return_body__';
<_mfp_date_>
受付番号：<_mfp_serial_>

<_お名前_> 様

この度は 星めぐりのシャンデリア～天声による2019年の癒し納め～ へお申し込み頂き、誠にありがとうございました。
お申し込み内容は下記の通りです。

─お申込み内容の確認─────────────────
<%公演タイトル:公演タイトル%>
<%公演日:公演日%>
<%公演選択:公演選択%>
<%会場:会場%>
<%住所:住所%>
<%お申込み枚数:お申込み枚数%>
<%お支払い合計金額:お支払い合計金額%>
<%お名前:お名前%>
<%メールアドレス:email%>
<%電話番号:電話番号%>
<%備考欄:備考欄%>
──────────────────────────


■抽選結果について

こちらのお申込みはチケット抽選への申し込みとなります。
抽選結果(当落結果)のご連絡は2019年12月11日(水)15:00頃　お申込みメールアドレス宛に ono-ticket-reserved@sib.tv　よりメールでご案内いたします。

■【重複申し込みについて】

システム上、予約申し込みは何度でもできますが、同姓同名または同メールアドレスの方からのお申し込みがあった場合は、もっとも新しい（もっとも後の）予約申し込みのみを受付させていただきます。
たくさんの方にお楽しみいただけるよう、ご理解のほどお願いいたします。

■本公演のお問い合わせ先：ono-ticket-reserved@sib.tv

■企画 制作：株式会社シブヤテレビジョン


◇こちらのメールに心あたりのない方は、このままメールを削除してください。

━━━━━━━━━━━━━━━━━━━━━━━━━━



　　■□小野正利オフィシャルチケット□■

　　Mail to : ono-ticket-reserved@sib.tv



　　　■転送・転載禁止／返信不可
　　　■発行：株式会社　シブヤテレビジョン

━━━━━━━━━━━━━━━━━━━━━━━━━━

__return_body__


####################################################
## セパレーターの設定
####################################################
## 改行を入れる場合は\nを挿入してください。
$config{'mfp_separator_1'} = "【送信者情報】\n";
$config{'mfp_separator_2'} = "\n【お問い合わせ内容】\n";


####################################################
## スパム対策関連
####################################################

## Javascriptが無効の場合は送信を許可しない(1:許可しない / 0:許可する)
$config{'DisabledJs'} = 0;

## リファラードメインチェック / 有効にする場合は行頭の#を削除
#$config{'PostDomain'} = $ENV{'HTTP_HOST'};

## 全文英語のスパム候補を除外(1:除外 / 0:除外しない)
$config{'EnglishSpamBlock'} = 1;

## リンク系スパム候補を除外(1:除外 / 0:除外しない)
$config{'LinkSpamBlock'} = 1;

## URLの送信を許可しない(1:許可しない / 0:許可する)
$config{'DisableURI'} = 1;


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
#push @AddOns,'OperationCheck.js';    ## 動作チェック ※本番では消してください
push @AddOns,'charactercheck.js';   ## 文字校正
#push @AddOns,'prefcode/prefcode.js'; ## 郵便番号からの住所入力
#push @AddOns,'prefcodeadv/prefcode.js';## 郵便番号からの住所入力(高機能・高負荷)
#push @AddOns,'furigana.js';        ## フリガナ(Firefox非対応)
#push @AddOns,'datelist.js';        ## 日付リストの生成機能 [Update]
#push @AddOns,'ok.js';          ## OKアドオン [New]
push @AddOns,'nospace.js';        ## スペースのみの入力を無効
push @AddOns,'toggle.js';       ## 入力欄の可変
#push @AddOns,'cart/cart.js';     ## ショッピングカート機能
#push @AddOns,'request/request.js';   ## [New] リクエスト機能
#push @AddOns,'phase.js';       ## 段階的入力機能
#push @AddOns,'drilldown.js';     ## ドリルダウン機能
#push @AddOns,'charformat.js';      ## テキスト整形(Xperia非対応)
#push @AddOns,'noresume.js';      ## 入力された内容をレジュームしない
#push @AddOns,'switching.js';     ## スイッチング機能サンプル
#push @AddOns,'prevention.js';      ## イタズラ防止
#push @AddOns,'wellcome.js';      ## (技術デモ)ウェルカムメッセージ
#push @AddOns,'speechAPI.js';     ## (技術デモ)音声入力
#push @AddOns,'WadaVoiceDemo.js';   ## (技術デモ)音声ガイダンス
#push @AddOns,'progress.js';      ## プログレスバー表示
#push @AddOns,'WTKConnect.js';      ## WebsiteToolKit.jsとの連動
#push @AddOns,'submitdisabled.js';    ## エラー時に送信ボタンを無効化
#push @AddOns,'sizeajustdisabled.js'; ## 入力欄の自動調整機能を無効化
#push @AddOns,'defaultValue.js';    ## 初期値を無効
#push @AddOns,'estimate.js';      ## 見積計算(ベータ版)
#push @AddOns,'beforeunload.js';    ## ページを離脱する際のアラート(ベータ版)
#push @AddOns,'setValue.js';      ## 初期値をセット
#push @AddOns,'errorScroll.js';     ## エラー時に対象エレメントまでスクロール(ベータ版)
#push @AddOns,'reserve.js';       ## 予約受付 [New]
#push @AddOns,'taboowords/taboowords.js';## 禁止ワードの指定 [New]
#push @AddOns,'pricefactor.js';     ## 人数分の料金掛け算
#push @AddOns,'tax.js';         ## 消費税計算 [New]
#push @AddOns,'email.js';       ## メールアドレスのチェック(やや厳格)
#push @AddOns,'confirm.js';       ## [New] 確認用エレメント
#push @AddOns,'record.js';        ## [New] 記録用
#push @AddOns,'birthday.js';      ## [New] 生年月日選択補助
#push @AddOns,'unchecked.js';     ## [New] radioのチェック解除
push @AddOns,'mobileScrollFix.js';    ## [New] モバイル端末エラー時のスクロール調整
#push @AddOns,'bpm.js';   ## [New] BPMクレジット決済
#push @AddOns,'attachedfiles.js';   ## 添付ファイル機能(有償)
#push @AddOns,'coupon/coupon.js';

####################################################
## モジュール(CGIの追加機能)
####################################################

@Modules = ();
#push @Modules,'MultiConfig'; ## 複数の設定ファイルを分岐させる
#push @Modules,'check';     ## CGI動作環境チェック ※本番では消してください
#push @Modules,'logger';      ## アクセス解析ログモジュール
#push @Modules,'thanks';      ## サンクスページへの引き継ぎ
#push @Modules,'cart';      ## ショッピングカート機能
#push @Modules,'request';   ## リクエスト機能
#push @Modules,'ISO-2022-JP'; ## メールをJISで送信
#push @Modules,'HTMLMail';    ## 自動返信メールにHTMLメールを追加
#push @Modules,'HTMLMailAdmin'; ## 管理者宛メールにHTMLメールを追加
#push @Modules,'CSVExport';   ## CSV保存機能
#push @Modules,'SQLExport';   ## SQL発行機能
#push @Modules,'vCard';     ## vCard機能
#push @Modules,'iCal';      ## iCal連携機能
#push @Modules,'IPLogs';    ## IPログトラッキング機能
#push @Modules,'PayPal';    ## PayPal決済
#push @Modules,'SMTP';      ## SMTP送信
#push @Modules,'SMTPS';     ## [New] SMTPS送信
#push @Modules,'SimpleMailHead';## [New] シンプルメールヘッダ
#push @Modules,'MAILHEAD';    ## メールヘッダのカスタマイズ
#push @Modules,'mailauth';    ## メールアドレス認証
#push @Modules,'reqonce';   ## 一度きりの送信
#push @Modules,'questionnaire'; ## アンケート集計モジュール
#push @Modules,'GmailSMTP';   ## GmailのSMTPを使う場合
#push @Modules,'regist';    ## メールアドレスの登録・解除
#push @Modules,'ReplyTime';   ## 応答時間計測
#push @Modules,'count';     ## 集計モジュール
#push @Modules,'reserve';   ## 予約管理モジュール
#push @Modules,'taboowords';  ## 禁止ワードの指定 [New]
#push @Modules,'stress';    ## ストレスチェック判定モジュール
#push @Modules,'csvatt';    ## CSV添付機能
#push @Modules,'bpm';   ## [New] BPMクレジット決済

#push @Modules,'MFPOrderConnect'; ## MFP Order Connect API
#push @Modules,'MFPAddressConnect'; ## MFP Address Connect API
#push @Modules,'demo';      ## デモ


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

## SSL環境下でのみCookie使う場合有効にしてください
#$config{'secure'} = ' secure';

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
