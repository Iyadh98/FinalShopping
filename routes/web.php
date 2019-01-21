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
Route::get('/app2','ProduitController@getAllProductsAndCategoriesApp');
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


Route::get('/admin/ajouter_produit','ProduitController@addGet');
Route::post('/admin/ajouter_produit','ProduitController@addPost');

Route::get('/admin/lister_produit','ProduitController@getAllProducts');

Route::get('/admin/edit_produit/{produitId}','ProduitController@editGet');
Route::post('/admin/edit_produit','ProduitController@editPost');

Route::delete('/admin/delete_produit/{produitId}','ProduitController@delete');







Route::get('/admin/modifier_produit',function(){
    return view('admin/modifprod');
});
Route::get('/admin/supprimer_produit',function(){
    return view('admin/supprimerprod');
});


Route::get('/admin/ajouter_categorie',function(){
    return view('admin/ajoutcat');
});
Route::post('/admin/ajouter_categorie','CategorieController@addPost');
Route::get('/admin/supprimer_categorie',function(){
    return view('admin/supprimercat');
});
Route::get('/admin/modifier_categorie',function(){
    return view('admin/modifiercat');
});


Route::post('/admin/ajouter_categorie','CategorieController@addPost');
Route::get('/admin/lister_categorie','CategorieController@getAllCategories');
Route::get('/admin/edit_categorie/{categorieId}','CategorieController@editGet');
Route::post('/admin/edit_categorie','CategorieController@editPost');
Route::delete('/admin/delete_categorie/{categorieId}','CategorieController@delete');



Route::get('/produits/{id}/{nom}/{prix}', 'ProduitController@addCart');
Route::get('/produits/supp','ProduitController@destroyCart');
Route::post('/panier','ProduitController@updateCart');


Route::get('/checkout','CommandeController@addGet');
Route::post('/checkout','CommandeController@addPost');
Route::get('/checkout','ProduitController@getAllProductsCheckout');
Route::post('/profil/{id}','UserController@edit');


Route::get('/profil','CommandeController@getAll');




Route::get ( '/search', 'ProduitController@search');

Route::get('/admin/imagesIndex',function(){
    return view('admin/imagesIndex');
});
Route::get('/admin/deletecat/{name}','CategorieController@delete');
Route::get('/admin/deleteprod/{name}','ProduitController@delete');
//Route::post('/admin/imagesIndex','ImagesController@add');
Route::get('/index','ImagesController@getAll');
Route::get('/admin/imagesIndex/{image}','ImagesController@editGet');
Route::post('/admin/imagesIndex','ImagesController@editPost');
Route::get('/produits','ImagesController@getAllProd');


Route::get('/admin/lister_commandes','CommandeController@getCommandesEncoursPreteWithUsers');
Route::get('/admin/lister_commandes_annulees','CommandeController@getCommandesAnnuleesWithUsers');
Route::get('/admin/lister_commandes_livrees','CommandeController@getCommandesLivreesWithUsers');
Route::get('/admin/changerEtatPrete/{commandeId}','CommandeController@changerEtatPrete');
Route::get('/admin/changerEtatLivree/{commandeId}','CommandeController@changerEtatLivree');


Route::get ( '/search', 'ProduitController@search');
Route::get('/ss','ProduitController@searchCategorie');

Route::get('/email','ProduitController@sendEmail');

