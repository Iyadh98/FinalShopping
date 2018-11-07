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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index',function(){
    return view('index');
});
/*
Route::get('/produits',function(){
    return view('product');
});
*/
Route::get('/produits','ProduitController@getAllProductsAndCategories');

Route::get('/panier',function(){
    return view('cart');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/profil',function(){
    return view('profile');
});
Route::get('/admin',function(){
    return view('admin/index');
});
Route::get('/admin/clients','UserController@getAll');
Route::get('/admin/commandes',function(){
    return view('admin/datacomm');
});

Route::get('/admin/ajouter_produit','ProduitController@addGet');
Route::post('/admin/ajouter_produit','ProduitController@addPost');

Route::get('/admin/lister_produit','ProduitController@getAllProducts');

Route::get('/admin/edit_produit/{produitId}','ProduitController@addGet');





Route::get('/admin/modifier_produit',function(){
    return view('admin/modifprod');
});
Route::get('/admin/supprimer_produit',function(){
    return view('admin/supprimerprod');
});
Route::get('/admin/ajouter_categorie',function(){
    return view('admin/ajoutcat');
});
Route::get('/admin/supprimer_categorie',function(){
    return view('admin/supprimercat');
});
Route::get('/admin/modifier_categorie',function(){
    return view('admin/modifiercat');
});
Route::post('/admin/ajouter_categorie','CategorieController@addPost');