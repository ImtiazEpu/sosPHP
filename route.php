<?php

use Phroute\Phroute\RouteCollector;

$router->filter('auth', function (){
    if (!isset($_SESSION['user'])){
        $errors[] = 'You are not logged in. Please login';
        $_SESSION['error'] = $errors;
        header('Location: /eshopping/login');
        exit();
    }
});

$router->controller( '/eshopping' , \App\Controllers\Frontend\HomeController::class );
$router->controller( '/eshopping/user' , \App\Controllers\Frontend\UsersController::class );

$router->group(['before'=>'auth'], function (RouteCollector $router){
    $router->controller( '/eshopping/dashboard' , \App\Controllers\Backend\dashboardController::class );
});

