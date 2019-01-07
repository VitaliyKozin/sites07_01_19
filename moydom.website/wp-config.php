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
define('DB_NAME', 'moydom');

/** Имя пользователя MySQL */
define('DB_USER', 'vitaliy_kozin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'BrRtHhtn');

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
define('AUTH_KEY',         '-Q<}?Rto[]wv/xySZ__9bsI)_g$!=e_@Jp*g4fH.R|4oe>Wl{;y1oL28Zq_FXb0o');
define('SECURE_AUTH_KEY',  'iw/Co-Xew.8jM4ZKN qDzq:Is`>m ryQ}u0tC_Q4 E3G!&A<5o_pQmm4(XF :vI;');
define('LOGGED_IN_KEY',    'ghJ0SPS0a0zB &Bt]K6d7o}am780J.k]fMtJ0zl;PXo^XIN@`9b)8cx:0D^nNW(K');
define('NONCE_KEY',        '}5cUeE?<RnX]@ R&TDD%E~X~XOt$g,?K<]}S1!*G$McG~4>=FiL6|[5P;XIRMaN,');
define('AUTH_SALT',        '60f6kJnINzhWRRsI&RmZwc[=WL<7D%`I5/NFtqS[ 5#w_slK&).7&:s|J|!c31Sn');
define('SECURE_AUTH_SALT', 'jAXW<u^!yPQl|pwzU=6jXvet&o(U$g+Xya@,SW,g(2!hr}GVCJ0=*uX[(|IG-I`s');
define('LOGGED_IN_SALT',   'hLmdtdu~`mBvCQDRYR-3Qxt$T%!%pIG_=]H|,$4O*JXmg;YK~`UJC{[9g95/glWA');
define('NONCE_SALT',       '(x$K%##V`wSJ=2%zwC+yb~h-$EE/unVYFA4]Rts>{A)-a!Avel_jIr68$wE<-$Xv');

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
