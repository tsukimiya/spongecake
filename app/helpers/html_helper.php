<?php

function eh($string)
{
    if (!isset($string)) {
        return;
    }
    echo htmlspecialchars($string, ENT_QUOTES);
}

function url($url = '', $params = array())
{
    $query = http_build_query($params);
    if (strlen($query) > 0) {
        $query = '?' . $query;
    }
    if ($url === '') {
        $url = substr($_SERVER['REQUEST_URI'], strlen(APP_BASE_PATH));
        $url = APP_URL . $url;
    } elseif ($url === '/') {
        $url = APP_URL . $query;
    } elseif (strpos($url, 'http') === 0) {
        $url = $url . $query;
    } elseif (strpos($url, '#') === 0) {
        $url = $url;
    } elseif (strpos($url, '?') === 0) {
        $url = $url;
    } else {
        $url = APP_BASE_PATH . $url . $query;
    }
    return $url;
}
