<?php
define('ROOT_DIR', dirname(dirname(__DIR__)).'/');
define('APP_DIR', ROOT_DIR.'/app/');

// PHP built-in web server and FrankenPHP support
if (in_array(php_sapi_name(), ['cli-server', 'frankenphp'], true)) {
    $cli_filepath = preg_replace('/(\?.*)\z/', '', $_SERVER['REQUEST_URI']);
    if ($_SERVER['REQUEST_URI'] === '/') {
        $cli_filepath = 'default/index';
    }
    if (is_file(__DIR__.$cli_filepath)) {
        return false;
    }
    $_REQUEST['dc_action'] = preg_replace('/\A\//', '', $cli_filepath);
}

// autoload
require_once ROOT_DIR.'vendor/autoload.php';

require_once ROOT_DIR.'vendor/dietcake/dietcake/dietcake.php';
require_once CONFIG_DIR.'bootstrap.php';
require_once CONFIG_DIR.'core.php';

Dispatcher::invoke();

