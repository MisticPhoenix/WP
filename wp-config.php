<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'danil' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Feniks+1004' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^psJOH5ZS/JnTrres)v{&*!ERFY6bYV6]k@cv0x>dI0|;9J@}s?<Ak.:%`i(4(2A' );
define( 'SECURE_AUTH_KEY',  'ikYBfyf,Iq[clJ?00Vka]v:n}K,T$iv^I[ThZL7j,JkJci;hT}LVBJ))%[9J6u1a' );
define( 'LOGGED_IN_KEY',    'BYol)80e4dhS$zq;{!wF+/5?eOjKgAS%#9(~8R zem5@{W@B)Q^E_uYFcr)a{BEj' );
define( 'NONCE_KEY',        'LugWxoQYN<9S0Gv6ah-BF~Wo{#(9l7<o&n2!e0v5%>chBRsa6OZnZgTfuUMeglRr' );
define( 'AUTH_SALT',        'R9;uoI/Do3-LS,==whbtt6.&%~7/_Q_7p|2Rj[z]x@?nT}?D/;mB}~4y}[[3[<x:' );
define( 'SECURE_AUTH_SALT', 'Nnld>BW>A`U{t!xxnIPVYhe?43L/Vg1nTYXw1SN!QCD!HKL0Np>.m4TR>TNrmyb#' );
define( 'LOGGED_IN_SALT',   'hdX6D}pHU2-27`F70!_Zkn+9ca {,NT3jh;t8R;Z?/93;QmG`Y3Ju|,tZyJ=E+Rq' );
define( 'NONCE_SALT',       '!,(u%V&6yy7U}l]$;-EVo50a{4.xCS+Vuq8.1F_t>$X@AS|BEt 9$AG?DlC%*6IM' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
