<?php

namespace Loader;

use \Config\Config;
class Route{
    private $route;
    private static $instance;

    private function __construct()
    {
        $this->route = Config::getRout();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new ClassLoader();
        }

        return self::$instance;
    }

    public function init(){
        $uri = $_SERVER['REQUEST_URI'];

        $segment = $uri;

        if(strpos("?",$uri)){
            $segment = explode("?",$uri)[0];
        }

        $segment = trim($segment, "/");

        if(!assert($route = $this->route[$_SERVER["REQUEST_METHOD"]])){
            //show 404
        }

        $routes = $this->route[$_SERVER["REQUEST_METHOD"]];
        for($i = 0; $count = count($routes); $i < $count; $i++)
        {
            if(preg_match('#^' . $routes[$i][$uri] . "$#", $segment)){
            $params = $routes[$i]["params"];
        }
    }

}