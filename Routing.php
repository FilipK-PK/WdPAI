<?php

require_once 'src/Controllers/DefaultController.php';
require_once 'src/Controllers/SecuritiController.php';

class Routing
{
    public static $routes;

    public static function get($url, $cont)
    {
        self::$routes[$url] = $cont;
    }

    public static function post($url, $cont)
    {
        self::$routes[$url] = $cont;
    }

    public static function run($url)
    {
        $action = explode("/", $url)[0];

        if(!array_key_exists($action, self::$routes))
        {
            die("wroooon");
        }
        
        $con = self::$routes[$action];
        $object = new $con;

        $object->$action();
    }
}
