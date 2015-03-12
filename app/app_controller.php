<?php

class AppController extends Controller
{
    public $default_view_class = 'AppLayoutView';

    /**
     *
     *
     * @param $url
     * @param array $params
     */
    public function redirect($url, $params = [])
    {
        $query = http_build_query($params);
        if (strlen($query) > 0) {
            $query = '?' . $query;
        }
        if ($url === '') {
            $url = substr($_SERVER['REQUEST_URI'], strlen(APP_BASE_PATH));
            $url = APP_URL . APP_BASE_PATH . urlencode($url);
        } elseif ($url === '/') {
            $url = APP_URL . APP_BASE_PATH . $query;
        } elseif (strpos($url, 'http') === 0) {
            $url = $url . $query;
        } else if (strpos($url, '/') === 0) { // $url = '/foo/bar'
            $url = APP_URL . APP_BASE_PATH . substr($url, 1) . $query;
        } else { // $url = 'foo/bar'
            $url = APP_URL . APP_BASE_PATH . $url . $query;
        }
        header('Location: ' . $url);
        exit;
    }
}
