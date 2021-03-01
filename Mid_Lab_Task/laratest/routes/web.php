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

Route::get('/', function () {
    return view('welcome');
    //echo "WelCome...!";

});    

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

Route::get('/test', 'LoginController@test');

Route::get('/home', 'HomeController@index');

Route::get('/home/create', 'HomeController@create');
Route::post('/home/create', 'HomeController@store');

Route::get('/home/userlist', 'HomeController@userlist');

Route::get('/home/edit/{id}', 'HomeController@edit');
Route::post('/home/edit/{id}', 'HomeController@update');

Route::get('/admin/delete/{id}', 'AdminController@destroy');
Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::post('/admins', 'AdminController@store');
Route::post('/admins', 'AdminController@index');
Route::post('/admin/{id}', 'AdminController@update');

Route::get('/products/create', 'ProductController@create');
Route::get('/product/delete/{id}', 'ProductController@destroy');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::post('/products', 'ProductController@store');
Route::post('/products', 'ProductController@index');
Route::post('/product/{id}', 'ProductController@update');

Route::get('/cutomers/create', 'CustomerController@create');
Route::get('/cutomer/delete/{id}', 'CustomerControllerr@destroy');
Route::get('/cutomers/{id}/edit', 'CustomerController@edit');
Route::post('/cutomers', 'CustomerController@store');
Route::post('/cutomers', 'CustomerController@index');
Route::post('/cutomer/{id}', 'CustomerController@update');