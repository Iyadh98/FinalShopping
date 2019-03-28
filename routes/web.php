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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
Route::get('/app2','ProduitController@getAllProductsAndSousCategoriesApp');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
    return view('index');
});
/*
Route::get('/produits',function(){
    return view('product');
});
*/
Route::get('/produits','ProduitController@getAllProductsAndSousCategories');


Route::get('/panier','ProduitController@getCart');
Route::get('/about',function(){
    return view('about');
});
Route::get('/kk',function(){
    return view('kk');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/profil',function(){
    return view('profile');
});
Route::get('/admin','UserController@isAdm');
/*Route::get('/admin/login',function(){
    return view('admin/login');
});
Route::post('/admin/login','UserController@isAdm');*/

Route::get('/admin/clients','UserController@getAll');
Route::get('/admin/clients/cadeau/{userId}','UserController@retirerPointsCadeau');


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



Route::get('/admin/ajouter_sous_categorie','SousCategorieController@addGet');
Route::post('/admin/ajouter_sous_categorie','SousCategorieController@addPost');
Route::post('/contact','MessageController@addPost');
Route::post('/','SubscriberController@addPost');
Route::post('/produits','SubscriberController@addPost');
Route::post('/panier','SubscriberController@addPost');
Route::post('/about','SubscriberController@addPost');

Route::post('/search','SubscriberController@addPost');


Route::get('/admin/supprimer_sous_categorie',function(){
    return view('admin/supprimersouscat');
});
Route::get('/admin/modifier_sous_categorie',function(){
    return view('admin/modifiersouscat');
});


Route::post('/admin/ajouter_sous_categorie','SousCategorieController@addPost');
Route::get('/admin/lister_sous_categorie','SousCategorieController@getAllSousCategoriesWithCategories');
Route::get('/admin/lister_messages','MessageController@getAll');
Route::get('/admin/edit_sous_categorie/{sousCategorieId}','SousCategorieController@editGet');
Route::post('/admin/edit_sous_categorie','SousCategorieController@editPost');
Route::delete('/admin/delete_sous_categorie/{sousCategorieId}','SousCategorieController@delete');



Route::get('/produits/{id}/{nom}/{prix}', 'ProduitController@addCart');
Route::get('/Details/{id}/{nom}/{prix}', 'ProduitController@addCartDetails');
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

Route::get('/admin/deletecat/{name}','SousCategorieController@delete');
Route::get('/unsubscribe',function (){
    return view('unsubscribe');
});
Route::post('/unsubscribe','SubscriberController@delete');
//Route::get('/unsubscribe/{name}','SubscriberController@delete');

Route::get('/admin/deletesouscat/{name}','SousCategorieController@delete');
Route::get('/admin/deletecat/{name}','CategorieController@delete');

Route::get('/admin/deleteprod/{name}','ProduitController@delete');
//Route::post('/admin/imagesIndex','ImagesController@add');
Route::get('/','ImagesController@getAll');
Route::get('/admin/imagesIndex/{image}','ImagesController@editGet');
Route::post('/admin/imagesIndex','ImagesController@editPost');
Route::get('/produits','ImagesController@getAllProd');


Route::get('/admin/lister_commandes','CommandeController@getCommandesEncoursPreteWithUsers');
Route::get('/admin/lister_commandes_annulees','CommandeController@getCommandesAnnuleesWithUsers');
Route::get('/admin/lister_commandes_livrees','CommandeController@getCommandesLivreesWithUsers');
Route::get('/admin/changerEtatPrete/{commandeId}','CommandeController@changerEtatPrete');
Route::get('/admin/changerEtatLivree/{commandeId}','CommandeController@changerEtatLivree');
Route::get('/admin/changerEtatAnnulee/{commandeId}','CommandeController@changerEtatAnnulee');
Route::get('/admin/changerEtatAnnuleeClient/{commandeId}','CommandeController@changerEtatAnnuleeClient');


Route::get ( '/search', 'ProduitController@search');

Route::get('/searchSousCategorie','ProduitController@searchSousCategorie');

//Route::get('/searchCategorie','ProduitController@searchCategorie');

Route::get('/email','ProduitController@mail');



Route::get('/admin/ajouter_categorie',function(){
    return view('admin/ajoutcat');
});
Route::post('/admin/ajouter_categorie','CategorieController@addPost');
Route::get('/admin/lister_categorie','CategorieController@getAllCategories');
Route::get('/admin/edit_categorie/{categorieId}','CategorieController@editGet');
Route::post('/admin/edit_categorie','CategorieController@editPost');

Route::get('/ajax-subcat',function(){
    $cat_id=\Illuminate\Support\Facades\Input::get('cat_id');
    $subcategories= \App\Sous_Categorie::where('categorie_id','=',$cat_id)->get();
    return Response::json($subcategories);
});
Route::get('/admin/emailSubscriber/{id}','SubmessageController@editGetAdmin');
Route::post('/admin/emailSubscriber','SubmessageController@editPost');
Route::get('/submessage','SubmessageController@editGet');

Route::get('/Details/{id}','ProduitController@getDetails');
Route::get('/cadeaux','ProduitController@getCadeau');
