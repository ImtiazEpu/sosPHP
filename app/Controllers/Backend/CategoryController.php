<?php

namespace App\Controllers\Backend;

use App\Controllers\Controller;
use App\Models\Category;
use Respect\Validation\Validator;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        backend_view( "/category/index",['categories'=>$categories]);
    }

    public function postIndex()
    {
        $validator = new Validator();

        $errors = [];
        $title = $_POST[ 'title' ];
        $slug = $this->slugify( $_POST[ 'title' ] );
        $active = $_POST[ 'active' ];

        // validation
        if ($validator::alpha()->validate( $title ) === false) {
            $errors[ 'title' ] = 'Title can only contain alphabets';
        }
        if (empty( $errors )) {
            Category::create( [
                'title' => $title ,
                'slug' => strtolower( $slug ) ,
                'active' => $active ,
            ] );
            $_SESSION[ 'success' ] = 'Category Created successful!';
            redirect( 'dashboard/categories' );
        }
        $_SESSION[ 'error' ] = $errors;
        redirect( 'dashboard/categories' );

    }

    public function getEdit($id = null)
    {
        if ($id === null) {
            redirect( 'dashboard/categories' );
        }

//        $_SESSION[ 'category_id' ] = $id;
        $category = Category::findOrfail($id);
        backend_view( "/category/edit", ['category'=>$category] );
//        unset( $_SESSION[ 'category_id' ] );
    }

    public function postEdit($id = null)
    {
        if ($id === null) {
            redirect( 'dashboard/categories' );
        }
        $validator = new Validator;

        $errors = [];
        $title = $_POST[ 'title' ];
        $slug = $_POST[ 'slug' ];
        $active = $_POST[ 'active' ];

        // validation
        if ($validator::alpha()->validate( $title ) === false) {
            $errors[ 'title' ] = 'Title can only contain alphabets';
        }
        if ($validator::slug()->validate( $slug ) === false) {
            $errors[ 'slug' ] = 'Slug must be valid slug';
        }
        if (empty( $errors )) {
            try {
                $category = Category::find( $id );
                $category->update( [
                    'title' => $title ,
                    'slug' => strtolower( $slug ) ,
                    'active' => $active ,
                ] );
                $_SESSION[ 'success' ] = 'Category Updated successful!';
                redirect( 'dashboard/categories' );
            } catch ( \Exception $e ) {
                $_SESSION[ 'error' ] = ['message' => $e->getMessage()];
                redirect( 'dashboard/categories' );
            }
        }
        $_SESSION[ 'error' ] = $errors;
        redirect( 'dashboard/categories' );
    }

    public function getDelete($id = null)
    {
        if ($id === null) {
            redirect( 'dashboard/categories' );
        }
        $category = Category::find( $id );
        $category->delete();
        $_SESSION[ 'success' ] = 'Category Delete successful!';
        redirect( 'dashboard/categories' );
    }
}