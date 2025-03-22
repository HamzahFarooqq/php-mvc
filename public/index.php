<?php 

require_once  __DIR__ . '/../vendor/autoload.php';
use app\core\Application;


$app = new Application();



$app->router->get('/', function(){
    return 'hello world';
});

$app->router->get('/users', function(){
    return 'users callback';
});

$app->router->get('/contacts', function(){
    return 'all contacts';
}); 

$app->router->get('/shows', 'show');




$app->run();