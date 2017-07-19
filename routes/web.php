<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

//Route::get('/', function () {
//
//    $data = [
//        '0'=>[
//            'name'=>'Rashed',
//            'city'=>'Dhaka',
//            'country'=>'Bangladesh'
//        ],
//        '1'=>[
//            'name'=>'Rashed',
//            'city'=>'Dhaka',
//            'country'=>'Bangladesh'
//        ]
//    ];
//    return $data;
//    //return "Hello from routes";
//
//    
//    return view('demo');
//    
//});
Route::get('/', 'WelcomeController@index');
Route::get('/category-view/{id}', 'WelcomeController@category');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/product-details', 'WelcomeController@productDetails');

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

/* category Info */
Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@saveCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('category/edit/{id}', 'CategoryController@editCategory');
Route::post('category/update', 'CategoryController@updateCategory');
Route::get('category/delete/{id}', 'CategoryController@deleteCategory');
/* category Info */


/* Manufacturer Info */
Route::get('/manufacturer/add', 'ManufacturerController@createManufacturer');
Route::post('manufacturer/save', 'ManufacturerController@saveManufacturer');
Route::get('/manufacturer/manage', 'ManufacturerController@manageManufacturer');
Route::get('manufacturer/edit/{id}', 'ManufacturerController@editManufacturer');
Route::post('manufacturer/update', 'ManufacturerController@updateManufacturer');
Route::get('manufacturer/delete/{id}', 'ManufacturerController@deleteManufacturer');
/*Manufacturer Info*/ 

/* Product Info */
Route::get('/product/add', 'ProductController@createProduct');
Route::post('product/save', 'ProductController@saveProduct');
Route::get('/product/manage', 'ProductController@manageProduct');
Route::get('/product/view/{id}', 'ProductController@viewProduct');
Route::get('product/edit/{id}', 'ProductController@editProduct');
Route::post('product/update', 'ProductController@updateProduct');
Route::get('product/delete/{id}', 'ProductController@deleteProduct');
/*product Info*/ 