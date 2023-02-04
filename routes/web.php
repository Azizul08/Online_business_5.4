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

// Route::get('/', function () {
//     return view('frontend.home');
// });


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/events', 'HomeController@events');
Route::get('/services', 'HomeController@services');
Route::get('/products', 'HomeController@products');
Route::get('/allproducts', 'HomeController@allproducts');
Route::get('/product-details/{id}', 'HomeController@productDetails');
Route::get('/bread', 'HomeController@bread');

// Route::get('/checkout', 'HomeController@getCheckout');
// Route::get('/payment', 'HomeController@getPayment');


Route::group(['middleware' => 'CustomerAuthenticateMiddleware'], function () {
    Route::post('/cart/add', 'CartController@addToCart');
    Route::get('/cart/show', 'CartController@showCart');
    Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');

    Route::get('/checkout/shipping', 'CheckoutController@showShippingForm');
    Route::post('/checkout/save-shipping', 'CheckoutController@saveShippingInfo');
    Route::get('/checkout/payment', 'CheckoutController@showPaymentForm');
    Route::post('/checkout/save-order', 'CheckoutController@saveOrderInfo');
    Route::get('/checkout/customer-order', 'CheckoutController@customerOrder');

});

/*=================================
=     Authentication Section      =
=================================*/

Route::get('/clientlogin', 'AuthController@login');
Route::get('/customer/login', 'AuthController@getLogin');
Route::post('/customer/login', 'AuthController@postLogin');
Route::get('/customer/logout', 'AuthController@getLogout');

Route::post('/customer/register', 'AuthController@customerRegistration');


/*=================================
=     Admin Section      =
=================================*/

Auth::routes();
Route::get('/dashboard', 'AdminController@index');


Route::group(['middleware' => 'AuthenticateMiddleware'], function () {
    
    Route::get('/user/manage', 'AdminController@manageUser');

    /* Product Info */
    Route::get('/product/add', 'ProductController@createProduct');
    Route::post('/product/save', 'ProductController@storeProduct');
    Route::get('/product/manage', 'ProductController@manageProduct');
    Route::get('/product/view/{id}', 'ProductController@viewProduct');
    Route::get('/product/edit/{id}', 'ProductController@editProduct');
    Route::post('/product/update', 'ProductController@updateProduct');
    Route::get('/product/delete/{id}', 'ProductController@deleteProduct');
          
    /* Category Info */
    Route::get('/category/add', 'CategoryController@createCategory');
    Route::post('/category/save', 'CategoryController@storeCategory');
    Route::get('/category/manage', 'CategoryController@manageCategory');
    Route::get('/category/edit/{id}', 'CategoryController@editCategory');
    Route::post('/category/update', 'CategoryController@updateCategory');
    Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
   

    /* Manufacturer Info */
    Route::get('/manufacturer/add', 'ManufacturerController@createManufacturer');
    Route::post('/manufacturer/save', 'ManufacturerController@storeManufacturer');
    Route::get('/manufacturer/manage', 'ManufacturerController@manageManufacturer');
    Route::get('/manufacturer/edit/{id}', 'ManufacturerController@editManufacturer');
    Route::post('/manufacturer/update', 'ManufacturerController@updateManufacturer');
    Route::get('/manufacturer/delete/{id}', 'ManufacturerController@deleteManufacturer');
    
});