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
Route::get('/home-admin/customer',[
	'uses' => 'UserController@getCustomer',
    'as' => 'customer-home'
]);
Route::get('/home-admin/employee',[
	'uses' => 'UserController@getUser',
    'as' => 'employee-home'
]);
Route::get('/home-admin/employee-create',[
	'uses' => 'UserController@getUserCreate',
    'as' => 'employee-create'
]);
Route::get('/home-admin/employee-show',[
	'uses' => 'UserController@getUserShow',
    'as' => 'employee-show'
]);
Route::get('/home-admin/employee-edit',[
	'uses' => 'UserController@getUserEdit',
    'as' => 'employee-edit'
]);

?>