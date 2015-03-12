<?php
define('ENV_PRODUCTION', true);
define('APP_HOST', $_SERVER["HTTP_HOST"]);
define('APP_BASE_PATH', '/');
define('APP_URL', 'http://'.$_SERVER["HTTP_HOST"]);

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'Off');
ini_set('error_log', LOGS_DIR.'php.log');
ini_set('session.auto_start', 0);

