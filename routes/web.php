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
use Illuminate\Support\Facades\Route;


Route::get('/produit','ProductsController@index')->name('products');
Route::get('/products/create','ProductsController@create')->name('product_create');
Route::post('/products/create','ProductsController@store')->name('store_products');
//Route::post('/products/create','categoriesController@store')->name('store_products');
Route::get('products/{id}/edit','ProductsController@edit')->name("editer_produit");
Route::patch('products/{id}/edit', 'ProductsController@update')->name('update_product');
Route::get('/ajouproduit', 'ProductsController@create')->name('create_product');

Route::delete('product/{id}','ProductsController@destroy');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('products.index');
Route::get('/', 'HomeController@deconnect')->name('deconnect');

Route::get('/dashbord', 'HomeController@dashbord')->name('dashbord');


Route::get('/espace_client', 'HomeController@utilisateur')->name('espace_client')->middleware('auth');

Route::post('/register_user', 'UsersController@store')->name('ajouter_user');

//Route::get('/orders/description', 'ProductsController@desc');
//Route::get('/orders/achat', 'ProductsController@achat');
Route::get("/produit/{id}/show", 'ProductsController@show');
Route::get("/produit/{id}/achat", 'ProductsController@achat')->name('achat_products');
Route::post("/produit/{id}/achat", 'OrderController@store')->name('achat_products');
Route::post('/product/add_to_cart', "AjaxController@add_to_cart")->name('add_to_cart');

Route::get('/cart', "OrderController@cart");
Route::get('/checkout', 'OrderController@checkout');
Route::get('/merci', "ProductsController@merci");
Route::get('/achat1', "ProductsController@achat1")->name('achat1_products');
Route::post('/achat1', "ProductsController@store1")->name('achat1_products');

// AFFICHER LES PRODUITS ASSOCIE AUX CATHEGORIES
Route::get('/category/{id}', "ProductsController@pagecategory")->name('produit_par_cat');

// ROUTE POUR LA BARRE DE RECHERCHE 
Route::get('/search', "ProductsController@search")->name('products.search');
//entete telephone
Route::get('/entete', "ProductsController@entete");
//ROUTE POUR LES CATEGORIES
Route::get('/agri', "ProductsController@agri");
Route::get('/sante', "ProductsController@sante");
Route::get('/tele', "ProductsController@tele");
Route::get('/sport', "ProductsController@sport");
Route::get('/elec', "ProductsController@elec");
Route::get('/acc', "ProductsController@acc");

// delate update cart

/// Ajout de categories
Route::post('/createCategory', "ProductsController@add_category");
//////

Route::delete('/panier/{rowId}','CartController@destroy')->name('cart.destroy');
Route::delete('/home/{rowId}','CartController@remove')->name('cart.remove');

Route::get('/finish_cart', "CartController@finish_cart");

Route::post('update','CartController@update_cart')->name('update_cart');

Route::post('/ajout_panier', "CartController@store")->name('cart.store');
Route::get('/contact', [
    'uses' => 'HomeController@contact'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'HomeController@CreateForm',
    'as' => 'contact.store'
]);
Route::get('/panier', "CartController@afficher_panier")->name('afficher_panier');
//  GERER LES UTILISATEURS : CREATION DE COMPTE , CONNEXION DU COMPTE CREER, LOG OUT .
//Route::get('/register', 'RegistrationController@create');
//Route::post('register', 'RegistrationController@store');
 
//Route::get('/login', 'SessionsController@create2');
//Route::post('/login', 'SessionsController@store');
//Route::get('/logout', 'SessionsController@destroy');-->




