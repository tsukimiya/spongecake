<?php
define('ROOT_DIR', dirname(dirname(__DIR__)).'/');
define('APP_DIR', ROOT_DIR.'/app/');

// PHP5.4 built-in web server support
if (php_sapi_name() === 'cli-server') {
    $cli_filepath = preg_replace('/(\?.*)\z/', '', $_SERVER['REQUEST_URI']);
    if (is_file(__DIR__.$cli_filepath)) {
        return false;
    }
    $_REQUEST['dc_action'] = preg_replace('/\A\//', '', $cli_filepath);
}

require_once ROOT_DIR.'vendor/dietcake/dietcake/dietcake.php';
require_once CONFIG_DIR.'bootstrap.php';
require_once CONFIG_DIR.'core.php';

Dispatcher::invoke();

