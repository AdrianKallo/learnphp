<?php

use App\Router;
//require_once __DIR__ . '/../src/Router.php';

spl_autoload_register(function($class){
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

require __DIR__ . '/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router -> match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($amtch['action']);
    }elseif(is_array($match['action']) && count($match['action']) == 2){
        $class = $match['action'][0];
        $controller = new $class();
        $method = $match['action'][1];
        $controller->$method();
    } else {
        throw new Exception('invalid router action');
    }
} else{
    http_response_code(404);
}

//switch($_SERVER['REQUEST_URL']){
//    case '/':
//        include 'view/index.php'
//        break;
//    case 'about':
//        include 'views/about.php';
//        break;
//    default:
//        echo 404;
//        break;
//}
