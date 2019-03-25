<?php

use Phroute\Phroute\RouteCollector;

$router->filter( 'auth' , function () {
    if (!isset( $_SESSION[ 'user' ] )) {
        $errors[] = 'You are not logged in. Please login';
        $_SESSION[ 'error' ] = $errors;
        header( 'Location: /eshopping/login' );
        exit();
    }
} );

$router->group( ['prefix' => '/eshopping'] , function (RouteCollector $router) {
    $router->controller( '/' , \App\Controllers\Frontend\HomeController::class );
    $router->controller( '/cart' , \App\Controllers\Frontend\CartController::class );
});
$router->group( ['before' => 'auth' , 'prefix' => '/eshopping/dashboard'] , function (RouteCollector $router) {
    $router->controller( '/' , \App\Controllers\Backend\DashboardController::class );
    $router->controller( '/categories' , \App\Controllers\Backend\CategoryController::class );
    $router->controller( '/products' , \App\Controllers\Backend\ProductController::class );

} );

