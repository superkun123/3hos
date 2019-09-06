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
define( 'DB_NAME', 'u77306' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'u77306' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'pykxFkgkyiCVR3R' );

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
define( 'AUTH_KEY',         '5u1rqJJUOf-55*s}N|(_?,ezVh1daG))NawaQCU1xxpQ*-wh%z&]8t~A iY_IRy_' );
define( 'SECURE_AUTH_KEY',  '+((l:2/,YfZ@yMJg#~;Q8Ra)z}m 25C.7|w5DK2/Jw>,eNrK0q[.Qw//Br^^coJX' );
define( 'LOGGED_IN_KEY',    '~#FSNt-[.4OP/$L~l?eq?Mylj>.=f{+~-57sR06=i}waO1(mrO^XS5jo<}dJe@;z' );
define( 'NONCE_KEY',        '!pYI=;Xl8[%ep!?bvk$Z`lE@!|n|_;)A5ZC;jUe=8=YU^7[W}h@kCSXi#{*F9]7w' );
define( 'AUTH_SALT',        'C<r*4!;X%Q=/ra4G>Rx^Xnk,t^+cr:4c.OLUGBmHW!JZgp62(+^QsfUWMUaN+1B-' );
define( 'SECURE_AUTH_SALT', 'D*kPY<[&r)}wkQ]Js1.=JM;.5O]l;74Or},|,938$;SOZ8mW>srwM6}q4&qEWmWV' );
define( 'LOGGED_IN_SALT',   'I8dLqNvb70.CX[TG:AM`)a5nIa$LW2a?u@txfDO:#g8[vwzFe ]6Ehl4GC i:?.J' );
define( 'NONCE_SALT',       '{_[hIPyfc5p[Fc|`_CEEXW zSS-xIHsF?%8:O29>c7/8+.<GRs1Gc)`gVw3ub 45' );

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
