<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');


Route::get('/catalogue', 'ProductController@index')->name('catalogue');


Route::DELETE('/produit/{id}', 'ProductController@destroy')->name('produit-destroy');
Route::Put('/produit/{id}', 'ProductController@update')->name('produit-update');
Route::Get('/produit/{id}/edit', 'ProductController@edit')->name('produit-edit');
Route::Post('/produit', 'ProductController@store')->name('produit-store');
Route::Get('/produit/create', 'ProductController@create')->name('produit-create');
Route::Get('/produit/{id}', 'ProductController@show')->name('produit');



Route::Get('/panier/{id}', 'PanierController@add')->name('panier-add');





