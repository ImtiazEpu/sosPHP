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
        $title         = $_POST[ 'title' ];
        $category_id   = (int)$_POST[ 'category_id' ];
        $slug          = $this->slugify($_POST[ 'title' ]);
        $description   = $_POST[ 'description' ];
        $price         = $_POST[ 'price' ];
        $sale_price    = $_POST[ 'sale_price' ];
        $active        = (int)$_POST[ 'active' ];
        $product_photo = $_FILES[ 'product_photo' ];

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
       /* if ($validator::image()->validate( $product_photo[ 'name' ]) === false) {
            $errors[ 'product_photo' ] = 'Product photo must be a valid image';
        }*/
        if (empty( $errors )) {
            $product = Product::create( [
                'title'       => $title ,
                'category_id' => $category_id ,
                'slug'        => $slug,
                'description' => $description ,
                'price'       => $price ,
                'sale_price'  => $sale_price ,
                'active'      => $active ,
            ] );
            //process file upload
            $file_name = 'product_photo_' . time();
            $extension = explode( '.' , $product_photo[ 'name' ] );
            $ext = end( $extension );
            move_uploaded_file( $product_photo[ 'tmp_name' ] , 'media/products/' . $file_name . '.' . $ext );
            $product->product_photo()->create([
                'image_path' => $file_name . '.' . $ext,
            ]);

            $_SESSION[ 'success' ] = 'Product Created successful!';
            redirect( 'dashboard/products' );
        }
        $_SESSION[ 'error' ] = $errors;
        redirect( 'dashboard/products' );
    }
}