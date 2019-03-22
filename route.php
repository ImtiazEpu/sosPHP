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

$router->group(['before'=>'auth','prefix'=>'/eshopping'], function (RouteCollector $router){
    $router->controller( '/dashboard' , \App\Controllers\Backend\DashboardController::class );
    $router->controller( '/categories' , \App\Controllers\Backend\CategoryController::class );
    $router->controller( '/products' , \App\Controllers\Backend\ProductController::class );
});

