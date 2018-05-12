<?php


define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('MYSQL_SSL_CA', '/etc/aws-ca.pem');
define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
define( 'DB_CHARSET', 'utf8');
define( 'DB_COLLATE', '');

define( 'WP_CACHE', TRUE);
define( 'WP_AUTO_UPDATE_CORE', FALSE);
define( 'FS_METHOD', 'direct');
define( 'FS_CHMOD_DIR', 0775);
define( 'FS_CHMOD_FILE', 0664);
define( 'DISALLOW_FILE_MODS', TRUE);
define( 'DISALLOW_FILE_EDIT', TRUE);
define( 'DISABLE_WP_CRON', FALSE);
define( 'FORCE_SSL_LOGIN', FALSE);
define( 'WP_POST_REVISIONS', FALSE);

$protocol = 'http';
$_SERVER['HTTPS']='off';
if (getenv('NOW_URL')) {
	$_SERVER['HTTPS']='on';
	$protocol = 'https';
}

define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', $protocol . $_SERVER['HTTP_HOST']);

$table_prefix  = 'wp_';
define('WP_DEBUG', true);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'email-settings.php');
require_once(ABSPATH . 'wp-settings.php');
