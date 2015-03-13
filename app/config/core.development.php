<?php
define('ENV_PRODUCTION', false);
define('APP_HOST', $_SERVER["HTTP_HOST"]);
define('APP_BASE_PATH', '/');
define('APP_URL', 'http://'.$_SERVER["HTTP_HOST"]);

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
ini_set('error_log', LOGS_DIR.'php.log');
ini_set('session.auto_start', 0);

// Whoops
$run = new \Whoops\Run();
$handler = new \Whoops\Handler\PrettyPageHandler();
$run->pushHandler($handler);
$run->register();

// mod_rewrite check
if (!isset($_REQUEST[DC_ACTION])) {
    throw new ErrorException('dc_action not found. please check mod_rewrite setting');
}

