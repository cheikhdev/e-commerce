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


Route::get('/produit','ProductsController@index')->name('products');
Route::get('/products/create','ProductsController@create')->name('product_create');
Route::post('/products/create','ProductsController@store')->name('store_products');
//Route::post('/products/create','categoriesController@store')->name('store_products');
Route::get('products/{id}/edit','ProductsController@edit')->name("editer_produit");
Route::patch('products/{id}/edit', 'ProductsController@update')->name('update_product');
Route::get('/ajouproduit', 'ProductsController@create')->name('create_product');

Route::delete('product/{id}','ProductsController@destroy');

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/home', 'HomeController@deconnect')->name('deconnect');

Route::get('/dashbord', 'HomeController@dashbord')->name('dashbord');

Route::get('/utilisateur', 'HomeController@utilisateur')->name('utilisateur')->middleware('auth');

//Route::get('/orders/description', 'ProductsController@desc');
//Route::get('/orders/achat', 'ProductsController@achat');
Route::get("/produit/{id}/show", 'ProductsController@show');
Route::get("/produit/{id}/achat", 'ProductsController@achat')->name('achat_products');
Route::post("/produit/{id}/achat", 'OrderController@store')->name('achat_products');
Route::post('/product/add_to_cart', "AjaxController@add_to_cart");
Route::get('/cart', "OrderController@cart");
Route::get('/checkout', 'OrderController@checkout');
Route::get('/merci', "ProductsController@merci");
Route::get('/achat1', "ProductsController@achat1")->name('achat1_products');
Route::post('/achat1', "ProductsController@store1")->name('achat1_products');

Route::get('/agri', "ProductsController@agri");
Route::get('/sante', "ProductsController@sante");
Route::get('/tele', "ProductsController@tele");
Route::get('/sport', "ProductsController@sport");
Route::get('/elec', "ProductsController@elec");
Route::get('/acc', "ProductsController@acc");




