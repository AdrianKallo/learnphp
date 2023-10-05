<?php
namespace App;

class Router {
    private string $path;
    static $routes = [];
    public function __construct(string $path)
    {
        $this->path = parse_url($path, PHP_URL_PATH);
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['path'] === $this->path){
                return $route;
            }
        }
        return false;
    }

    public static function addRoute(string $path, callable|array $action){
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
}