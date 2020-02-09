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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db_nes' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'comandaA' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'nas070998alex' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '`?De+kf^3eJ1u$#wBcr32Q~S^`$f7]ELK/Ti>+yzt6z.=bdG%%Xl6td!Wo~=.,yZ' );
define( 'SECURE_AUTH_KEY',  '36;i9jWwr|ZB{fPMx&Z P_nX;MY8aw!?Dpq8+Rgf}s`]<:Sdh?)0_hJJ`Zknsd01' );
define( 'LOGGED_IN_KEY',    'aOdkozJOl6I/iiA;W<[9EYP^,J^1g/HIqNjjAny&CEl]G1@Hx^QTGktI2u=fO7rC' );
define( 'NONCE_KEY',        'N[c-}#dleB[{Q|gFhfeJ{T-4RrW`70f5O{v9U<.7$6NFI%;2=-NHQc9&8RJJ2_W!' );
define( 'AUTH_SALT',        'z`{L%X$DC3Vm3`Y8}nU7/H*2F_4y3z&oQn>4V=C-*_qLvG93ze:0_L:V6>@NP,V)' );
define( 'SECURE_AUTH_SALT', 'SWB?~SFEj,`:s$9ult-L)h4f6#Wpkl7_wWl@[)@>oT(iqIakl1s8>9#;t!L4e9)W' );
define( 'LOGGED_IN_SALT',   'ms>@R5p)06&o+j814Ri#R0)1-+C;glB5QL*E96u8VACxSFW~ yS=HcP 2~S$WCxh' );
define( 'NONCE_SALT',       ') DL};|mp*%{&2sVCiEF>7;R5B9hk2H>Ho#?51t .F`&Rn7vyC7>5>A]W?/chX_j' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
