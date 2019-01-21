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
define('DB_NAME', 'crimeatest');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '99q~|-)P3sq.*[oS=,UE]K2ZsAVl8mQI7uU,#3T2(lF- R1|)PlJeGb7*^t,&Giw');
define('SECURE_AUTH_KEY',  '^G@lHcG?a^1*g~[S`T5jNFgJT_7~IM4A`G[BhZm>e&S0PB]cfrz+%]Iod,VC_DHF');
define('LOGGED_IN_KEY',    '5|rgcBN<(c(* #C`glUX+{Q3Ts&g]o+j2-vl_IC3+trL,x@p?Q17awiKcq<-<g^d');
define('NONCE_KEY',        'vY{TyGwafEk2=d~;-64@@d}C3X~ARLW.dQtbdIM}-f[:+bI-!=erIVmgxbC2kRlL');
define('AUTH_SALT',        '-Y_{^l(jRk?X`-VWV% etrY)qT8&.fb<_K-8ce!7KFOYBU>.4B_c`!VH0-:s7>)u');
define('SECURE_AUTH_SALT', '2{@_Z09o![Lz2NYkiV5_ke`ec%$V$8; O~2t(fdyn,~!F=B^Jh!gM[4RfP4UK(2l');
define('LOGGED_IN_SALT',   '4-D]>@|>o1}Y8y[lBQ-+hfJ:HEE::#4a&Yb^_|uS~i-Y<=Qr;pu%^ug2|sxhKjg|');
define('NONCE_SALT',       'pX41x>T1-jj-D9{Ug9Huh-t|bfAx{9XH7(M-dm+k|7H _:CRW#&X?EMhmJIcDE^j');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
