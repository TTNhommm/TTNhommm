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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home-admin/category',[
	'uses' => 'CategoryController@index',
    'as' => 'home-category'
]);
Route::get('/home-admin/category/create',[
	'uses' => 'CategoryController@create',
    'as' => 'create-category'
]);


?>