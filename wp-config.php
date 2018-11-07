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
define('DB_NAME', 's-islamov-wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/8ES<*VG$ =@j#%e<`6?:D45S_}d]A) G%|<>$D2}`}sX+x`_4;ToX$BF)F|(!4%');
define('SECURE_AUTH_KEY',  '=OgVssZivKXoU%Z:q@BtbG/XH5hxR-cwPPts8`9euKf36#D#2@S3@}scC69#8ojN');
define('LOGGED_IN_KEY',    'Q JC1HrY#SCK%;-?lF]B&Czb=978&|JbAFFy9BCS}~ga9%CJ}Abo6P-=q5D?_z|%');
define('NONCE_KEY',        'z1WNOLc&^DD,<=RjYGmfacPa[1@oc98t-72,4G*pyE4:)(p{e48GGaA: zwf;=Fr');
define('AUTH_SALT',        'f3OXd>KOeJ;fdQ4MQ%kiDR&r0*}labSc)}Me6MYiGuKD%f==ynia3bBjNGFS `BK');
define('SECURE_AUTH_SALT', 'gQaP`6GxyAVXt li%DGr9f2}!PkL8zA@w#F.l5[`{MSPM>77ai{> .@^0pt=W(SP');
define('LOGGED_IN_SALT',   's2{T:&pD*+ax5-?,2Q3w,Uof>bS[acON1Xf,LYy8KbtdjmF([!V6Q7^^zH<V09Z@');
define('NONCE_SALT',       '<|e)Vce/20HzK).BECPj/iv#x{&RryR*:$J5sN`z7o0-J^$r;SoA)QJ)+1t u^2)');

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
