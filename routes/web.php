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

	//sales
	Route::get('/admin/sales', ['as'=>'admin.sales', 'uses'=>'Admin\SalesController@index']);
	
	Route::get('/admin/sales/new', ['as'=>'admin.sales.new', 'uses'=>'Admin\SalesController@new']);

	Route::post('/admin/sales/save', ['as'=>'admin.sales.save', 'uses'=>'Admin\SalesController@save']);

	Route::get('/admin/sales/edit/{id}', ['as'=>'admin.sales.edit', 'uses'=>'Admin\SalesController@edit']);

	Route::put('/admin/sales/change/{id}', ['as'=>'admin.sales.change', 'uses'=>'Admin\SalesController@change']);

	Route::get('/admin/sales/delete/{id}', ['as'=>'admin.sales.delete', 'uses'=>'Admin\SalesController@delete']);

	//usuarios
	Route::get('/admin/users', ['as'=>'admin.users', 'uses'=>'Admin\UsersController@index']);
	
	Route::get('/admin/users/new', ['as'=>'admin.users.new', 'uses'=>'Admin\UsersController@new']);

	Route::post('/admin/users/save', ['as'=>'admin.users.save', 'uses'=>'Admin\UsersController@save']);

	Route::get('/admin/users/edit/{id}', ['as'=>'admin.users.edit', 'uses'=>'Admin\UsersController@edit']);

	Route::put('/admin/users/change/{id}', ['as'=>'admin.users.change', 'uses'=>'Admin\UsersController@change']);

	Route::get('/admin/users/delete/{id}', ['as'=>'admin.users.delete', 'uses'=>'Admin\UsersController@delete']);
});