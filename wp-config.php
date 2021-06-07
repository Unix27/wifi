<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wifi' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wifi' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'i6VQwGXf' );

/** Имя сервера MySQL */
define( 'DB_HOST', 's8.thehost.com.ua' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hsw+*2Hy_Cl2~!2?:<j(2a-3io+.t)5h#VAIalrs9guatT&>N|#;@7Io(.8rTu.{' );
define( 'SECURE_AUTH_KEY',  'mUV,{K;j-|HVF[!`cs+S%<%$fmTMY6mzF9lGZ,*EC[FRIY5%KCwE[}]Y_FJYF|Jx' );
define( 'LOGGED_IN_KEY',    ' ?u7X=-;?R()Ag[G@}wS]ral]~[h!iGoN`W9}M;lQ.xdl+,TcO~^#`=~w?`#J<6%' );
define( 'NONCE_KEY',        'btmpG-~nA#vJ9uqjECnR:aI@Vu?)HfFY%;H88;A4V(b]a>lT~n>hO;?qq4DN50CP' );
define( 'AUTH_SALT',        '`LtR4GY&4Y82B$Wpn`maSNXjTg/(E)<c/7clb4JR0|Ne<K2^,kBfj@U@hEIlUF#p' );
define( 'SECURE_AUTH_SALT', 'tchh!zOi!o;Lk/!^z3Nm5=)]AKq9W{qg_z`w1GN75e?x(--H2@ua.r:Lun2hK~Uj' );
define( 'LOGGED_IN_SALT',   '][C`D$#(VZa.xO63dLN}_*%hJKJo[~`Eq?Oj;(^sBD oDFc[)w(sMQZ?s7x`TxC%' );
define( 'NONCE_SALT',       '-!Vk/Vz.tbv/}jaQ*r jH#)Pq.s{ceo?H+AS*6{H8P~$MTXcZpk;GOlEN>-.kh %' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
