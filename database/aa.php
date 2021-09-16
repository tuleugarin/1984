<?php
class Route {
    private $url = null;
    private static $page404, $routes = [];

    private function __construct($url)    {
        $this->url = $url;
    }

    public static function path($url)    {
        return new static($url);
    }

    public function component($controller)    {
        static::$routes += array($this->url => $controller);
    }

    public static function page404 ($controller) {
        static::$page404 = $controller;
    }

    public static function start ()    {
        $route = $_SERVER['REQUEST_URI'];

        if(array_key_exists($route, static::$routes)) {
            include static::$routes[$route]; exit;
        } else {
            include static::$page404; exit;
        }
    }
}
 ?>