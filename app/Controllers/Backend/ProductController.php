<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Product;
use Respect\Validation\Validator;

class ProductController extends Controller
{
    public function getIndex()
    {
        backend_view( "/product/index" );
    }

    public function postIndex()
    {
        $validator = new Validator();

        $errors = [];
        $title = $_POST[ 'title' ];
        $category_id = (int)$_POST[ 'category_id' ];
        $slug = $this->slugify($_POST[ 'title' ]);
        $description = $_POST[ 'description' ];
        $price = $_POST[ 'price' ];
        $sale_price = $_POST[ 'sale_price' ];
        $active = (int)$_POST[ 'active' ];

        // validation
        if ($validator::length(4,255)->validate( $title ) === false) {
            $errors[ 'title' ] = 'Title can only contain alphabets & numbers';
        }
        if (strlen( $description ) <= 0) {
            $errors[ 'description' ] = 'Description cannot be empty';
        }
        if ($validator::numeric()->positive()->validate( $price ) === false) {
            $errors[ 'price' ] = 'Price must be a positive value';
        }
        if ($validator::numeric()->positive()->validate( $sale_price ) === false) {
            $errors[ 'sale_price' ] = 'Sale Price must be a positive value';
        }
        if (empty( $errors )) {
            Product::create( [
                'title'       => $title ,
                'category_id' => $category_id ,
                'slug'        => strtolower( $slug ) ,
                'description' => $description ,
                'price'       => $price ,
                'sale_price'  => $sale_price ,
                'active'      => $active ,
            ] );
            $_SESSION[ 'success' ] = 'Product Created successful!';
            redirect( 'dashboard/products' );
        }
        $_SESSION[ 'error' ] = $errors;
        redirect( 'dashboard/products' );
    }
}