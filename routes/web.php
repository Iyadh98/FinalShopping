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
    return view('Admin/template');
});
