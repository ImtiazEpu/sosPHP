<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>E-SHOPPING SYSTEM</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <!-- Font Awesome's CDN-->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
           integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
    <!-- Font Awesome's Package-->
    <link href=<?php echo BASE_URL."/node_modules/@fortawesome/fontawesome-free/css/all.min.css"?> rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href=<?php echo BASE_URL."/node_modules/bootstrap/dist/css/bootstrap.min.css"?> rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=<?php echo BASE_URL."/asset/css/main.css"?> rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/eshopping">Ecommerce System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="/eshopping">Home</a>
                </li>
                <li class="nav-item">
                    <!--<a class="nav-link" href="category.html">Categories</a>-->
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu mt-2"  aria-labelledby="dropdownMenuButton">
                            <? foreach ($categories as $category):?>
                            <a class="dropdown-item"  href="eshopping/category/<? echo $category->slug;?>">
                                <? echo $category->title;?>
                            </a>
                            <?endforeach;?>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="/eshopping/cart">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light"><? echo \count($cart)?></span>
                </a>
                    <a class="btn btn-outline-info ml-3" href="/eshopping/login">Login</a>
                    <a class="btn btn-outline-info ml-2" href="/eshopping/register">Register</a>
            </form>
        </div>
    </div>
    </nav>
</header>