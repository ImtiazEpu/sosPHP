<?php
if (!function_exists( 'view' )) {
    function view($view = 'index' , $data = [])
    {
        extract( $data , EXTR_SKIP );
        ob_start();
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}

if (!function_exists( 'backend_view' )) {
    function backend_view($view = 'index' , $data = [])
    {
        extract( $data , EXTR_SKIP );
        ob_start();
        require_once __DIR__ . '/../views/backend' . $view . '.php';
    }
}

if (!function_exists( 'partial_view' )) {
    function partials_view($view = 'index')
    {
        require_once __DIR__ . '/../views/partials/' . $view . '.php';
    }
}

if (!function_exists( 'redirect' )) {
    function redirect($location = '/eshopping' , $base = false)
    {
        if ($base) {
            header( 'Location: ' . $location );
            exit();
        }
        header( 'Location: ' . BASE_URL . '/' . $location );
        exit();
    }
}

if (!function_exists( 'dd' )) {
    function dd($data)
    {
        echo '<pre>';
        var_dump( $data );
        echo '</pre>';
        die();
    }
}


