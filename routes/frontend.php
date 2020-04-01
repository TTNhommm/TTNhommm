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
Route::get('/',[
	'uses' => 'FrontendController@index',
	'as' => 'home'
]);
Route::get('/san-pham',[
	'uses' => 'FrontendController@product',
	'as' => 'san-pham'
]);
Route::get('/blog',[
	'uses' => 'FrontendController@blog',
	'as' => 'blog'
]);
Route::get('/lien-he',[
	'uses' => 'FrontendController@lien_he',
	'as' => 'lien-he'
]);
Route::get('/dang-nhap',[
	'uses' => 'FrontendController@dang_nhap',
	'as' => 'dang-nhap'
]);
Route::get('/dang-ki',[
	'uses' => 'FrontendController@dang_ki',
	'as' => 'dang-ki'
]);
Route::get('/gio-hang',[
	'uses' => 'FrontendController@gio_hang',
	'as' => 'gio-hang'
]);
Route::get('/dat-giao-hang',[
	'uses' => 'FrontendController@dat_giao_hang',
	'as' => 'dat-giao-hang'
]);
Route::get('/xac-nhan',[
	'uses' => 'FrontendController@xac_nhan',
	'as' => 'xac-nhan'
]);
Route::get('/san-pham/chi-tiet-laptop',[
	'uses' => 'FrontendController@chi_tiet_san_pham',
	'as' => 'chi-tiet-laptop'
]);


