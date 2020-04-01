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
Route::get('/home-admin/order/notapprove',[
	'uses' => 'OrderController@getOrderNotApprove',
    'as' => 'order-notapprove'
]);

Route::get('/home-admin/order/approve',[
	'uses' => 'OrderController@getOrderApprove',
    'as' => 'order-approve'
]);

Route::get('/home-admin/order/detail',[
	'uses' => 'OrderController@showOrder',
    'as' => 'order-detail'
]);

?>