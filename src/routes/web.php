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

Route::get('/', 'MainController@indexAction');

Route::get('/smells', 'SmellController@indexAction')->name('smells');
Route::get('/smells/add', 'SmellController@routeIndex');
Route::post('/smells/add', 'SmellController@saveAction');
Route::get('/smells/{id}/delete', 'SmellController@deleteAction')->name('deleteSmell');

Route::get('/categories', 'CategoryController@indexAction');
Route::get('categories/add', 'CategoryController@routeIndex');
Route::post('categories/add', 'CategoryController@saveAction');
