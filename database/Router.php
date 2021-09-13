<?php

class Route {
    private $url = null;
    private static $page404, $routes = [];

    private function __construct(string $url)    {
        $this->url = $url;
    }

    public static function path(string $url)    {
        return new self($url);
    }

    public function component(string $controller)    {
        self::$routes += array($this->url => $controller);
    }

    public static function page404 (string $controller) {
        self::$page404 = $controller;
    }

    public static function start ()    {
        $route = $_SERVER['REQUEST_URI'];

        if(array_key_exists($route, self::$routes)) {
            include self::$routes[$route]; exit;
        } else {
            include self::$page404; exit;
        }
    }
}


 ?>