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

Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

Route::get('/login', ['as'=>'site.login', 'uses'=>'Site\LoginController@index']);

Route::post('/login/enter', ['as'=>'site.login.enter', 'uses'=>'Site\LoginController@enter']);

Route::get('/login/logout', ['as'=>'site.login.logout', 'uses'=>'Site\LoginController@logout']);

//controla requisições (somente logados entrarão)
Route::group(['middleware'=>'auth'], function() {
	//rotas managers
	Route::get('/admin/', ['as'=>'admin.home', 'uses'=>'Admin\HomeController@index']);
	Route::get('/admin/home', ['as'=>'admin.home', 'uses'=>'Admin\HomeController@index']);

	Route::get('/admin/products', ['as'=>'admin.products', 'uses'=>'Admin\ProductsController@index']);
	
	Route::get('/admin/products/new', ['as'=>'admin.products.new', 'uses'=>'Admin\ProductsController@new']);

	Route::post('/admin/products/save', ['as'=>'admin.products.save', 'uses'=>'Admin\ProductsController@save']);

	Route::get('/admin/products/edit/{id}', ['as'=>'admin.products.edit', 'uses'=>'Admin\ProductsController@edit']);

	Route::put('/admin/products/change/{id}', ['as'=>'admin.products.change', 'uses'=>'Admin\ProductsController@change']);

	Route::get('/admin/products/delete/{id}', ['as'=>'admin.products.delete', 'uses'=>'Admin\ProductsController@delete']);
});