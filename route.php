<?php

$router->controller( '/eshopping' , \App\Controllers\Frontend\HomeController::class );
$router->controller( '/eshopping/user' , \App\Controllers\Frontend\UsersController::class );
$router->controller( '/eshopping/dashboard' , \App\Controllers\Backend\dashboardController::class );
