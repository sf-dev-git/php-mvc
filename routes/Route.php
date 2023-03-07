<?php
include 'traits/Request.php';
class Route
{
    use Request;

    protected static $routes = [];

    public static function run()
    {
        $req = new Route();
        $req->set_request();
        $url = parse_url($req->req_uri(), PHP_URL_PATH);

        foreach (self::$routes[$req->req_method()] as $pattern => $action) {
            $pattern = preg_replace('/:(\w+)/', '(?P<\1>\d+)', $pattern);
            $pattern = str_replace('/', '\/', $pattern);

            if (preg_match("/^$pattern$/", $url, $matches)) {
                list($controller, $method) = explode('@', $action);

                include 'app/http/controllers/'.$controller.'.php';
                $controller = new $controller;
                call_user_func_array(array($controller, $method), array(!empty($matches[1])?$matches[1] : null));
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