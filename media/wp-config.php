<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'brownbear506_english-camp');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'brownbear506');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'aBXAWN8rv-Zf');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql57.brownbear506.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%2;,,lKA?&aGRp}6|[Z}mr?N:{Fg7g;Qw;75x|(QywNdjyRZ[d6y{SkX[$ENLkof');
define('SECURE_AUTH_KEY',  'QdVL$q2x65_vTqbztp%T/XQo2n;7?R/Del8A[}IDjx~Y)#ihIKP`{~Z9drH)!-q{');
define('LOGGED_IN_KEY',    '@cLom&b,R@f9/h5IU6E:D*#NC0qY9-2uk^j!x9$`p_8 >)_eol K>5(v9#C^El 1');
define('NONCE_KEY',        '_2CvrXusL?YRQKLV$I,45.9&h{5RS_{jcAcZz%99S~~Gr2TRuwCvoY`c.f~@0RD5');
define('AUTH_SALT',        'rN51qpL#gW M<>[A@ -+TVn3W_?aW]<C0^Q`KkVjRDn~%Byq3ujk^QG*$VC<2pYj');
define('SECURE_AUTH_SALT', ':$d_V$5yWLt6P6`TVeKqdA5:UmP L&VAtQ:}zMPsGoOD!yo:Oo.F7|{JvuwIj>E+');
define('LOGGED_IN_SALT',   '|C7fNUPa|Z{*FvxkXJ{R qh8GCp}ur2Q?nu2Ku%GJ`#PXdU7ZzbB#4vttn.W+MHr');
define('NONCE_SALT',       'H8!CZ9&)C&o9m5OKX~X?T9Zi>p,)5SfAypbR{x7|4K5oV7v%>N4pwfU.al^93{;o');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp3d753a';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
