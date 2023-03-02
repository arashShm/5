<?php
require_once '../vendor/autoload.php' ;

use Core\Application ;
use Core\Router ;
use Core\Request ;

$app = new Application(dirname(__DIR__)) ;
$app ->router->get('/' , 'home') ;
$app ->router->get('/contact' , 'contact') ;
$app->router->post('/contact', function(){
    return 'handling submitted data';
});


$app->run() ;
