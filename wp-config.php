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
define( 'DB_NAME', 'testwork671' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'invest' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'invest' );

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
define( 'AUTH_KEY',         '*#E[0Qa/9[aUk+c}1x]&C?%eE6N7E.OS,],Rhx*}kJ54.S%Y=}nhv-dW4n24s ~c' );
define( 'SECURE_AUTH_KEY',  'Qoh60{-ioDi0isNfOp2v}lOsUu#H<jVos,L=(s5AW]h_]_tZe6)Chy?%#Q]|C-m:' );
define( 'LOGGED_IN_KEY',    'v2,G:/oW#U^6MtJ?nE1m]u1*,j{%<MzFa{0kun9~V pr?99J {jUP6 &2m#ctAqn' );
define( 'NONCE_KEY',        'h%l>U8LC<B+yOl9ZF):y$kiap4?FXHBX:$ekdwStDTe(%>`bMXyThnm0x S0?,M~' );
define( 'AUTH_SALT',        ';2w(ONw5wa5[# QE[|SF{thyiYFs_Lo5,tOGRe/#M<9<!eAa-y0,/i6QbS A;9o[' );
define( 'SECURE_AUTH_SALT', 'Sd9IF~ZXCvs{1jRsF&^W4aqYNzYk5W2=3n}D_?}ZLG#1[V0U%OPHZW1:zo7.#D8+' );
define( 'LOGGED_IN_SALT',   'urZn=ogq@QA%k<l9/:`57bygnMzToP6d;=6l$ WZk/GuDLY>e29Rr7*yu/.YAig+' );
define( 'NONCE_SALT',       'sk,$+3M6^W#,}&C<>:#obepWs3zD0+y&nT8)&yC@|~g{Q@1Dl^2XrVx(1/#zsL~v' );

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
