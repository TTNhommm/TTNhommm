<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|,'middleware'=> 'auth'
*/
//group chứa nhiều file có tiền tố backend
////'namespace'=>'Backend' thay thế đường dẫn trong 'uses' => 'HomeController@index', ở home.php
///
Route::group(['prefix' => 'backend', 'namespace'=>'Backend'],function(){
	require_once 'backend/home.php';
	require_once 'backend/category.php';
	require_once 'backend/role.php';
	require_once 'backend/product.php';
	require_once 'backend/user.php';
	// require_once 'backend/unit.php';
	// require_once 'backend/import.php';
	require_once 'backend/order.php';
	// require_once 'backend/orderdetail.php';
	// require_once 'backend/customer.php';
	// require_once 'backend/nation.php';


});
require_once 'login.php';
require_once 'frontend.php';
?>
