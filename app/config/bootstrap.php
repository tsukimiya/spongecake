<?php
// autoload
require_once VENDOR_DIR.'autoload.php';

// application
require_once APP_DIR.'app_controller.php';
require_once APP_DIR.'app_model.php';
require_once APP_DIR.'app_layout_view.php';
require_once APP_DIR.'app_exception.php';

// helpers
require_once HELPERS_DIR.'html_helper.php';

// lib
require_once APP_DIR.'lib/session.php';

// config

spl_autoload_register(function($name) {
    $filename = Inflector::underscore($name) . '.php';
    if (strpos($name, 'Controller') !== false) {
        require CONTROLLERS_DIR.$filename;
    } else {
        if (file_exists(MODELS_DIR.$filename)) {
            require MODELS_DIR.$filename;
        }
    }
});
