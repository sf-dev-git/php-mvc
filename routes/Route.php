<?php
class Route
{
    protected static $routes = [];

    public static function run()
    {
        $http_method = $_SERVER['REQUEST_METHOD'];
        $data = null;
        if ($http_method == 'POST') $data = $_POST;
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach (self::$routes[$http_method] as $pattern => $action) {
            $pattern = preg_replace('/:(\w+)/', '(?P<\1>\d+)', $pattern);
            $pattern = str_replace('/', '\/', $pattern);

            if (preg_match("/^$pattern$/", $url, $matches)) {
                list($controller, $method) = explode('@', $action);

                include 'app/http/controllers/'.$controller.'.php';
                $controller = new $controller;
                $controller->$method($data == null ? $matches : $data);
                exit;
            }
        }
    }

    public static function get($url, $controller) {
        self::$routes['GET'][$url] = $controller;
    }

    public static function post($url, $controller) {
        self::$routes['POST'][$url] = $controller;
    }
}